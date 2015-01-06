<?php

/**
 * @file pages/catalog/CatalogHandler.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
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

class CatalogHandler extends Handler {
	/**
	 * Constructor
	 */
	function CatalogHandler() {
		parent::Handler();
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
                $trideni = $request->getUserVar('sort');
                $rok = $request->getUserVar('rok');
                $obor = $request->getUserVar('obor');
                $jazyk = $request->getUserVar('jazyk');
                $fakulta = $request->getUserVar('fakulta');

                $categoryDao = DAORegistry::getDAO('CategoryDAO');
                // Provide a list of categories to browse
		$obory = $categoryDao->getByParentId(1,$press->getId());
		$templateMgr->assign('obory', $obory);
                $fakulty= $categoryDao->getByParentId(32,$press->getId());
		$templateMgr->assign('fakulty', $fakulty);
                
                $monographDao = DAORegistry::getDAO('MonographDAO');
                $templateMgr->assign('filtrRoky', $monographDao->getYears(2015,2000));
                $templateMgr->assign('filtrJazyky', $monographDao->getLanguagesForFilter());            
                
                $templateMgr->assign('filtrovaniObor', $obor);
                $templateMgr->assign('filtrovaniRok', $rok);
                $templateMgr->assign('filtrovaniJazyk', $jazyk);
                $templateMgr->assign('filtrovaniFakulta', $fakulta);
                
		// Fetch the monographs to display
		$publishedMonographDao = DAORegistry::getDAO('PublishedMonographDAO');
                
		$rangeInfo = $this->getRangeInfo($request, 'catalogPaging');
		$publishedMonographs = $publishedMonographDao->getByPressIdFiltered($press->getId(), null, $rangeInfo, $trideni, $obor, $rok, $jazyk, $fakulta);
		$templateMgr->assign('publishedMonographs', $publishedMonographs);
                
                $publishedMonographsFeature =& $publishedMonographDao->getByPressId($press->getId());
                $templateMgr->assign('publishedMonographsFeature', $publishedMonographsFeature->toAssociativeArray());

                $templateMgr->assign('itemsPerPageHelp', $rangeInfo->getCount());
                
                $templateMgr ->assign('trideni',$trideni);
                
		// Display
		$templateMgr->display('catalog/index.tpl');
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
		$templateMgr->display('catalog/newReleases.tpl');
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
                $trideni = $request->getUserVar('sort');
                $rok = $request->getUserVar('rok');
                $obor = $request->getUserVar('obor');
                $jazyk = $request->getUserVar('jazyk');
                $fakulta = $request->getUserVar('fakulta');
		$this->setupTemplate($request);
               
		// Get the category
		$categoryDao = DAORegistry::getDAO('CategoryDAO');
		$categoryPath = array_shift($args);
		$category =& $categoryDao->getByPath($categoryPath, $press->getId());
                // Provide a list of categories to browse
		$obory = $categoryDao->getByParentId(1,$press->getId());
		$templateMgr->assign('obory', $obory);
                $fakulty= $categoryDao->getByParentId(32,$press->getId());
		$templateMgr->assign('fakulty', $fakulty);
                
                $monographDao = DAORegistry::getDAO('MonographDAO');
                $templateMgr->assign('filtrRoky', $monographDao->getYears(2015,2000));
                $templateMgr->assign('filtrJazyky', $monographDao->getLanguagesForFilter());            
                
                $templateMgr->assign('filtrovaniObor', $obor);
                $templateMgr->assign('filtrovaniRok', $rok);
                $templateMgr->assign('filtrovaniJazyk', $jazyk);
                $templateMgr->assign('filtrovaniFakulta', $fakulta);
                
		if (isset($category)) {
			$templateMgr->assign('category', $category);
			$additionalArgs = array('type' => 'category', 'path' => $category->getPath());
			$templateMgr->assign('additionalArgs', $additionalArgs);
                        
                        // Fetch the monographs to display
			$publishedMonographDao = DAORegistry::getDAO('PublishedMonographDAO');
			$rangeInfo = $this->getRangeInfo($request, 'catalogPaging');
			$publishedMonographs =& $publishedMonographDao->getByCategoryIdFiltry($category->getId(), $press->getId(), $rangeInfo, $trideni, $obor, $rok, $jazyk, $fakulta);
			$templateMgr->assign('publishedMonographs', $publishedMonographs);
                        
                        $publishedMonographsFeature =& $publishedMonographDao->getByCategoryId($category->getId(), $press->getId());
			$templateMgr->assign('publishedMonographsFeature', $publishedMonographsFeature->toAssociativeArray());
                        
                        $templateMgr->assign('itemsPerPageHelp', $rangeInfo->getCount());
                        
			// Expose the featured monograph IDs and associated params
			$featureDao = DAORegistry::getDAO('FeatureDAO');
			$featuredMonographIds = $featureDao->getSequencesByAssoc(ASSOC_TYPE_CATEGORY, $category->getId());
			$templateMgr->assign('featuredMonographIds', $featuredMonographIds);
                        
                        $templateMgr->assign('cesta', $categoryPath);    
                        $templateMgr ->assign('trideni',$trideni);
                        
			// Provide a list of new releases to browse
			$newReleaseDao = DAORegistry::getDAO('NewReleaseDAO');
			$newReleases = $newReleaseDao->getMonographsByAssoc(ASSOC_TYPE_CATEGORY, $category->getId());
			$templateMgr->assign('newReleasesMonographs', $newReleases);
			// Display
		}
		$templateMgr->display('catalog/category.tpl');
	}

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
                $trideni = $request->getUserVar('sort');

		// Get the series
		$seriesDao = DAORegistry::getDAO('SeriesDAO');
		$seriesPath = array_shift($args);
		$series = $seriesDao->getByPath($seriesPath, $press->getId());
		$templateMgr->assign('series', $series);
		$additionalArgs = array('type' => 'series', 'path' => $series->getPath());
		$templateMgr->assign('additionalArgs', $additionalArgs);

		// Fetch the monographs to display
		$publishedMonographDao = DAORegistry::getDAO('PublishedMonographDAO');
		$rangeInfo = $this->getRangeInfo($request, 'catalogPaging');
		$publishedMonographs = $publishedMonographDao->getBySeriesId($series->getId(), $press->getId(), $rangeInfo, $trideni);
		$templateMgr->assign('publishedMonographs', $publishedMonographs);
                $templateMgr->assign('itemsPerPageHelp', $rangeInfo->getCount());
                
		// Expose the featured monograph IDs and associated params
		$featureDao = DAORegistry::getDAO('FeatureDAO');
		$featuredMonographIds = $featureDao->getSequencesByAssoc(ASSOC_TYPE_SERIES, $series->getId());
		$templateMgr->assign('featuredMonographIds', $featuredMonographIds);
                
                $templateMgr->assign('cesta', $seriesPath);
                $templateMgr ->assign('trideni',$trideni);

		// Provide a list of new releases to browse
		$newReleaseDao = DAORegistry::getDAO('NewReleaseDAO');
		$newReleases = $newReleaseDao->getMonographsByAssoc(ASSOC_TYPE_SERIES, $series->getId());
		$templateMgr->assign('newReleasesMonographs', $newReleases);

		// Display
		$templateMgr->display('catalog/series.tpl');
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
                //$rangeInfo = $this->getRangeInfo($request, 'catalogPaging');
                
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
		$templateMgr->display('catalog/results.tpl');
	}

	/**
	 * Serve the image for a category or series.
	 */
	function fullSize($args, $request) {

		$press = $request->getPress();
		$type = $request->getUserVar('type');
		$id = $request->getUserVar('id');
		$imageInfo = array();

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
