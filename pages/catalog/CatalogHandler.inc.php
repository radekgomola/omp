<?php

/**
 * @file pages/catalog/CatalogHandler.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CatalogHandler
 * @ingroup pages_catalog
 *
 * @brief Handle requests for the press-specific part of the public-facing
 *   catalog.
 */
import('classes.handler.Handler');

// import UI base classes
import('lib.pkp.classes.linkAction.LinkAction');
import('lib.pkp.classes.core.JSONMessage');

define('CATEGORY_OBORY', 1);
define('CATEGORY_FAKULTY', 32);

class CatalogHandler extends Handler {

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
    }

    //
    // Overridden methods from Handler
    //
	/**
     * @see PKPHandler::authorize()
     */
    function authorize($request, &$args, $roleAssignments) {
        import('lib.pkp.classes.security.authorization.ContextRequiredPolicy');
        $this->addPolicy(new ContextRequiredPolicy($request));
        return parent::authorize($request, $args, $roleAssignments);
    }

    //
    // Public handler methods
    //
	/**
     * Show the catalog home.
     * @param $args array
     * @param $request PKPRequest
     */
    function index($args, $request) {
        $templateMgr = TemplateManager::getManager($request);
        $this->setupTemplate($request);
        $press = $request->getPress();
        $publishedMonographDao = DAORegistry::getDAO('PublishedMonographDAO');
        $monographDao = DAORegistry::getDAO('MonographDAO');
         
        /* MUNIPRESS */
        $locale = AppLocale::getLocale();
        $trideni = $request->getUserVar('trideni');
        $rok = $request->getUserVar('rok');
        $obor = $request->getUserVar('obor');
        $jazyk = $request->getUserVar('jazyk');
        $fakulta = $request->getUserVar('fakulta');

        $categoryDao = DAORegistry::getDAO('CategoryDAO');
        // Provide a list of categories to browse
        
//        $time4 = -microtime(true); 
        $templateMgr->assign('filtrJazyky', $monographDao->getLanguagesForFilter($locale));
        $filtrJazykyPocet = $publishedMonographDao->getByPressIdCount($press->getId(), $obor, $rok, 'VYBER-MS', $fakulta);
        $templateMgr->assign('filtrJazykyPocet', $filtrJazykyPocet);
//        $time4 += microtime(true); 
//        echo "Microtime jazyk: ",sprintf('%f', $time4),PHP_EOL; 
//        
//        $time = -microtime(true); 
        $obory = $categoryDao->getByParentIdNotEmpty(CATEGORY_OBORY, $press->getId(), $locale);
        $oboryPole = $obory->toAssociativeArray();
        $filtrOboryPocet = $publishedMonographDao->getByPressIdCount($press->getId(), "VYBER-MS", $rok, $jazyk, $fakulta);
        $templateMgr->assign('obory', $oboryPole);
        $templateMgr->assign('filtrOboryPocet', $filtrOboryPocet);
//        $time += microtime(true); 
//        echo "Microtime obory: ",sprintf('%f', $time),PHP_EOL; 
//        
//        $time2 = -microtime(true); 
        $fakulty = $categoryDao->getByParentIdNotEmpty(CATEGORY_FAKULTY, $press->getId(), $locale);
        $fakultyPole = $fakulty->toAssociativeArray();
        $filtrFakultyPocet = $publishedMonographDao->getByPressIdCount($press->getId(), $obor, $rok, $jazyk, "VYBER-MS");
        $templateMgr->assign('fakulty', $fakultyPole);
        $templateMgr->assign('filtrFakultyPocet', $filtrFakultyPocet);
//        $time2 += microtime(true); 
//        echo "Microtime fakulty: ",sprintf('%f', $time2),PHP_EOL; 
//
//        $time3 = -microtime(true); 
//       
        $templateMgr->assign('filtrRoky', $monographDao->getYears());
        $filtrRokyPocet = $publishedMonographDao->getByPressIdCount($press->getId(), $obor, 'VYBER-MS', $jazyk, $fakulta);
        $templateMgr->assign('filtrRokyPocet', $filtrRokyPocet);
//        $time3 += microtime(true); 
//        echo "Microtime Roky: ",sprintf('%f', $time3),PHP_EOL; 

        $templateMgr->assign('filtrovaniObor', $obor);
        $templateMgr->assign('filtrovaniRok', $rok);
        $templateMgr->assign('filtrovaniJazyk', $jazyk);
        $templateMgr->assign('filtrovaniFakulta', $fakulta);

        $sortBy = $sortDirection = null;

        if ($trideni) {
            $sortBy = $publishedMonographDao->getSortBy($trideni);
            $sortDirection = $publishedMonographDao->getSortDirection($trideni);
        }
        $rangeInfo = $this->getRangeInfo($request, 'catalogPaging');
        /* ---------- */

        // Fetch the monographs to display
//		$publishedMonographs = $publishedMonographDao->getByPressId($press->getId());
        //*MUNIPRESS*/
        $publishedMonographs = $publishedMonographDao->getByPressIdFiltered($press->getId(), null, $rangeInfo, $sortBy, $sortDirection, false, false, $obor, $rok, $jazyk, $fakulta);
        $templateMgr->assign('itemsPerPageHelp', $rangeInfo->getCount());
        $templateMgr->assign('trideni', $trideni);
        $templateMgr->assign('sortOptions', $publishedMonographDao->getSortSelectOptions());
        $templateMgr->assign('publishedMonographs', $publishedMonographs);
        /* ---------- */

        //$templateMgr->assign('publishedMonographs', $publishedMonographs->toAssociativeArray());
        // Expose the featured monograph IDs and associated params
        $featureDao = DAORegistry::getDAO('FeatureDAO');
        $featuredMonographIds = $featureDao->getSequencesByAssoc(ASSOC_TYPE_PRESS, $press->getId());
//                $templateMgr->assign('featuredMonographIds', $featuredMonographIds);
        /* MUNIPRESS */
        $featuredMonographs = $publishedMonographDao->getByIds($featuredMonographIds, $press->getId());
        $templateMgr->assign('featuredMonographs', $featuredMonographs);
        /* --------- */

        // Display
        $templateMgr->display('frontend/pages/catalog.tpl');
    }

    /**
     * Show the catalog new releases.
     * @param $args array
     * @param $request PKPRequest
     */
    function newReleases($args, $request) {
        $templateMgr = TemplateManager::getManager($request);
        $this->setupTemplate($request);
        $press = $request->getPress();

        // Provide a list of new releases to browse
        $newReleaseDao = DAORegistry::getDAO('NewReleaseDAO');
        $newReleases = $newReleaseDao->getMonographsByAssoc(ASSOC_TYPE_PRESS, $press->getId());
        $templateMgr->assign('publishedMonographs', $newReleases);

        // Display
        $templateMgr->display('frontend/pages/catalogNewReleases.tpl');
    }

    /**
     * View the content of a category.
     * @param $args array
     * @param $request PKPRequest
     * @return string
     */
    function category($args, $request) {
        $templateMgr = TemplateManager::getManager($request);
        $press = $request->getPress();
        $this->setupTemplate($request);
        $publishedMonographDao = DAORegistry::getDAO('PublishedMonographDAO');
        $monographDao = DAORegistry::getDAO('MonographDAO');
        
        /* MUNIPRESS */
        $locale = AppLocale::getLocale();
        $trideni = $request->getUserVar('trideni');
        $rok = $request->getUserVar('rok');
        $obor = $request->getUserVar('obor');
        $jazyk = $request->getUserVar('jazyk');
        $fakulta = $request->getUserVar('fakulta');
        /* ---------- */

        // Get the category
        $categoryDao = DAORegistry::getDAO('CategoryDAO');
        $categoryPath = array_shift($args);
        $category = & $categoryDao->getByPath($categoryPath, $press->getId());

        /* MUNIPRESS */
        // Provide a list of categories to browse
        $templateMgr->assign('filtrJazyky', $monographDao->getLanguagesForFilter($locale));
        $filtrJazykyPocet = $publishedMonographDao->getByCategoryIdCount($category->getId(),$press->getId(), $obor, $rok, 'VYBER-MS', $fakulta);
        $templateMgr->assign('filtrJazykyPocet', $filtrJazykyPocet);
        
        $obory = $categoryDao->getByParentIdNotEmpty(CATEGORY_OBORY, $press->getId(), $locale);
        $oboryPole = $obory->toAssociativeArray();
        $filtrOboryPocet = $publishedMonographDao->getByCategoryIdCount($category->getId(),$press->getId(), "VYBER-MS", $rok, $jazyk, $fakulta);
        $templateMgr->assign('obory', $oboryPole);
        $templateMgr->assign('filtrOboryPocet', $filtrOboryPocet);

        $fakulty = $categoryDao->getByParentIdNotEmpty(CATEGORY_FAKULTY, $press->getId(), $locale);
        $fakultyPole = $fakulty->toAssociativeArray();
        $filtrFakultyPocet = $publishedMonographDao->getByCategoryIdCount($category->getId(),$press->getId(), $obor, $rok, $jazyk, "VYBER-MS");
        $templateMgr->assign('fakulty', $fakultyPole);
        $templateMgr->assign('filtrFakultyPocet', $filtrFakultyPocet);


        $templateMgr->assign('filtrRoky', $monographDao->getYears());
        $filtrRokyPocet = $publishedMonographDao->getByCategoryIdCount($category->getId(),$press->getId(), $obor, 'VYBER-MS', $jazyk, $fakulta);
        $templateMgr->assign('filtrRokyPocet', $filtrRokyPocet);

        $templateMgr->assign('filtrovaniObor', $obor);
        $templateMgr->assign('filtrovaniRok', $rok);
        $templateMgr->assign('filtrovaniJazyk', $jazyk);
        $templateMgr->assign('filtrovaniFakulta', $fakulta);
        /* ------------- */

        if (isset($category)) {
            $templateMgr->assign('category', $category);

            // Fetch the monographs to display
            $publishedMonographDao = DAORegistry::getDAO('PublishedMonographDAO');


            /* MUNIPRESS */
            $sortBy = $sortDirection = null;

            if ($trideni) {
                $sortBy = $publishedMonographDao->getSortBy($trideni);
                $sortDirection = $publishedMonographDao->getSortDirection($trideni);
            }
            $rangeInfo = $this->getRangeInfo($request, 'catalogPaging');
            $publishedMonographs = $publishedMonographDao->getByCategoryIdFiltered($category->getId(), $press->getId(), null, $rangeInfo, $sortBy, $sortDirection, false, false, $obor, $rok, $jazyk, $fakulta);

            $templateMgr->assign('publishedMonographs', $publishedMonographs);
            $templateMgr->assign('itemsPerPageHelp', $rangeInfo->getCount());

            // Expose the featured monograph IDs and associated params
            $featureDao = DAORegistry::getDAO('FeatureDAO');
            $featuredMonographIds = $featureDao->getSequencesByAssoc(ASSOC_TYPE_PRESS, $press->getId());
            $featuredMonographs = $publishedMonographDao->getByIdsCategory($featuredMonographIds, $press->getId(), $category->getId());
            $templateMgr->assign('featuredMonographs', $featuredMonographs);
            $templateMgr->assign('sortOptions', $publishedMonographDao->getSortSelectOptions());
            $templateMgr->assign('cesta', $categoryPath);
            $templateMgr->assign('trideni', $trideni);
            /* ------------ */

            // Provide a list of new releases to browse
            $newReleaseDao = DAORegistry::getDAO('NewReleaseDAO');
            $newReleases = $newReleaseDao->getMonographsByAssoc(ASSOC_TYPE_CATEGORY, $category->getId());
            $templateMgr->assign('newReleasesMonographs', $newReleases);

            // Provide the parent category and a list of subcategories
            $parentCategory = $categoryDao->getById($category->getParentId());
            $subcategories = $categoryDao->getByParentId($category->getId());
            $templateMgr->assign('parentCategory', $parentCategory);
            $templateMgr->assign('subcategories', $subcategories);
            // Display
            return $templateMgr->display('frontend/pages/catalogCategory.tpl');
        }
        $request->redirect(null, 'catalog');
    }

    /**
     * TODO: předělat na Munispace vyber
     */

    /**
     * View the content of a series.
     * @param $args array
     * @param $request PKPRequest
     * @return string
     */
    function series($args, $request) {
        $templateMgr = TemplateManager::getManager($request);
        $press = $request->getPress();
        $this->setupTemplate($request);

        /* MUNIPRESS */
        $trideni = $request->getUserVar('sort');
        /* --------- */

        // Get the series
        $seriesDao = DAORegistry::getDAO('SeriesDAO');
        $seriesPath = array_shift($args);
        $series = $seriesDao->getByPath($seriesPath, $press->getId());
        if (isset($series)) {
            $templateMgr->assign('series', $series);

            // Fetch the monographs to display
            $publishedMonographDao = DAORegistry::getDAO('PublishedMonographDAO');

            /* MUNIPRESS */
            $sortBy = $sortDirection = null;

            if ($trideni) {
                $sortBy = $publishedMonographDao->getSortBy($trideni);
                $sortDirection = $publishedMonographDao->getSortDirection($trideni);
            }

            $rangeInfo = $this->getRangeInfo($request, 'catalogPaging');
            /* ---------------- */

            $publishedMonographs = $publishedMonographDao->getBySeriesId($series->getId(), $press->getId(), $rangeInfo, $sortBy, $sortDirection);
            //$templateMgr->assign('publishedMonographs', $publishedMonographs->toAssociativeArray());
            $templateMgr->assign('publishedMonographs', $publishedMonographs);
            $templateMgr->assign('itemsPerPageHelp', $rangeInfo->getCount());

            // Expose the featured monograph IDs and associated params
            $featureDao = DAORegistry::getDAO('FeatureDAO');
            $featuredMonographIds = $featureDao->getSequencesByAssoc(ASSOC_TYPE_SERIES, $series->getId());
            $templateMgr->assign('featuredMonographIds', $featuredMonographIds);

            /* MUNIPRESS */
            $featuredMonographs = $publishedMonographDao->getByIdsSeries($featuredMonographIds, $press->getId(), $series->getId());
            $templateMgr->assign('featuredMonographs', $featuredMonographs);
            $templateMgr->assign('cesta', $seriesPath);
            $templateMgr->assign('trideni', $trideni);
            /* --------- */

            // Provide a list of new releases to browse
            $newReleaseDao = DAORegistry::getDAO('NewReleaseDAO');
            $newReleases = $newReleaseDao->getMonographsByAssoc(ASSOC_TYPE_SERIES, $series->getId());
            $templateMgr->assign('newReleasesMonographs', $newReleases);

            // Display
            return $templateMgr->display('frontend/pages/catalogSeries.tpl');
        }
        $request->redirect(null, 'catalog');
    }

    /**
     * View the results of a search operation.
     * @param $args array
     * @param $request PKPRequest
     * @return string
     */
    function results($args, $request) {
        $templateMgr = TemplateManager::getManager($request);
        $press = $request->getPress();
        $this->setupTemplate($request);

        $query = $request->getUserVar('query');
        $templateMgr->assign('searchQuery', $query);

        // Fetch the monographs to display
        import('classes.search.MonographSearch');
        $monographSearch = new MonographSearch();
        $error = null;
        $resultsIterator = $monographSearch->retrieveResults($request, $press, array(null => $query), $error);

        $publishedMonographs = array();
        while ($result = $resultsIterator->next()) {
            $publishedMonograph = $result['publishedMonograph'];
            if ($publishedMonograph) {
                $publishedMonographs[$publishedMonograph->getId()] = $publishedMonograph;
            }
        }
        $templateMgr->assign('publishedMonographs', $publishedMonographs);

        // Display
        $templateMgr->display('frontend/pages/searchResults.tpl');
    }

    /**
     * Serve the image for a category or series.
     */
    function fullSize($args, $request) {

        $press = $request->getPress();
        $type = $request->getUserVar('type');
        $id = $request->getUserVar('id');
        $imageInfo = array();
        $path = null;

        switch ($type) {
            case 'category':
                $path = '/categories/';
                $categoryDao = DAORegistry::getDAO('CategoryDAO');
                $category = $categoryDao->getById($id, $press->getId());
                if ($category) {
                    $imageInfo = $category->getImage();
                }
                break;
            case 'series':
                $path = '/series/';
                $seriesDao = DAORegistry::getDAO('SeriesDAO');
                $series = $seriesDao->getById($id, $press->getId());
                if ($series) {
                    $imageInfo = $series->getImage();
                }
                break;
            default:
                fatalError('invalid type specified');
                break;
        }

        if ($imageInfo) {
            import('lib.pkp.classes.file.ContextFileManager');
            $pressFileManager = new ContextFileManager($press->getId());
            $pressFileManager->downloadFile($pressFileManager->getBasePath() . $path . $imageInfo['name'], null, true);
        }
    }

    /**
     * Serve the thumbnail for a category or series.
     */
    function thumbnail($args, $request) {
        $press = $request->getPress();
        $type = $request->getUserVar('type');
        $id = $request->getUserVar('id');
        $imageInfo = array();
        $path = null; // Scrutinizer

        switch ($type) {
            case 'category':
                $path = '/categories/';
                $categoryDao = DAORegistry::getDAO('CategoryDAO');
                $category = $categoryDao->getById($id, $press->getId());
                if ($category) {
                    $imageInfo = $category->getImage();
                }
                break;
            case 'series':
                $path = '/series/';
                $seriesDao = DAORegistry::getDAO('SeriesDAO');
                $series = $seriesDao->getById($id, $press->getId());
                if ($series) {
                    $imageInfo = $series->getImage();
                }
                break;
            default:
                fatalError('invalid type specified');
                break;
        }

        if ($imageInfo) {
            import('lib.pkp.classes.file.ContextFileManager');
            $pressFileManager = new ContextFileManager($press->getId());
            $pressFileManager->downloadFile($pressFileManager->getBasePath() . $path . $imageInfo['thumbnailName'], null, true);
        }
    }

    /**
     * Set up the basic template.
     */
    function setupTemplate($request) {
        $templateMgr = TemplateManager::getManager($request);
        $press = $request->getPress();
        if ($press) {
            $templateMgr->assign('currency', $press->getSetting('currency'));
        }
        parent::setupTemplate($request);
    }

}

?>
