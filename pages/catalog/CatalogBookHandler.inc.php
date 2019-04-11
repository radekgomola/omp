<?php

/**
 * @file pages/catalog/CatalogBookHandler.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CatalogBookHandler
 * @ingroup pages_catalog
 *
 * @brief Handle requests for the book-specific part of the public-facing
 *   catalog.
 */

import('classes.handler.Handler');

// import UI base classes
import('lib.pkp.classes.linkAction.LinkAction');
import('lib.pkp.classes.core.JSONMessage');

DEFINE('CATALOG_SOUVISEJICI_PUBLIKACE_POCET', 6);

class CatalogBookHandler extends Handler {
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}


	//
	// Overridden functions from PKPHandler
	//
	/**
	 * @see PKPHandler::authorize()
	 * @param $request PKPRequest
	 * @param $args array
	 * @param $roleAssignments array
	 */
	function authorize($request, &$args, $roleAssignments) {
		import('classes.security.authorization.OmpPublishedMonographAccessPolicy');
		$this->addPolicy(new OmpPublishedMonographAccessPolicy($request, $args, $roleAssignments));
		return parent::authorize($request, $args, $roleAssignments);
	}


	//
	// Public handler methods
	//
	/**
	 * Display a published monograph in the public catalog.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function book($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$publishedMonograph = $this->getAuthorizedContextObject(ASSOC_TYPE_PUBLISHED_MONOGRAPH);
		$this->setupTemplate($request, $publishedMonograph);
		AppLocale::requireComponents(LOCALE_COMPONENT_APP_SUBMISSION, LOCALE_COMPONENT_PKP_SUBMISSION); // submission.synopsis; submission.copyrightStatement

		$templateMgr->assign('publishedMonograph', $publishedMonograph);

		// Provide the publication formats to the template
		$publicationFormats = $publishedMonograph->getPublicationFormats(true);
		$availablePublicationFormats = array();
		foreach ($publicationFormats as $format) {
			if ($format->getIsAvailable()) {
				$availablePublicationFormats[] = $format;
			}
		}
		$templateMgr->assign('publicationFormats', $availablePublicationFormats);

		// Assign chapters (if they exist)
		$chapterDao = DAORegistry::getDAO('ChapterDAO');
		$chapters = $chapterDao->getChapters($publishedMonograph->getId());
		$templateMgr->assign('chapters', $chapters->toAssociativeArray());

		// Determine which pubId plugins are enabled.
		$pubIdPlugins = PluginRegistry::loadCategory('pubIds', true);
		$enabledPubIdTypes = array();
		$metaCustomHeaders = '';

		foreach ((array) $pubIdPlugins as $plugin) {
			if ($plugin->getEnabled()) {
				$enabledPubIdTypes[] = $plugin->getPubIdType();
				// check to see if the format has a pubId set.  If not, generate one.
				foreach ($publicationFormats as $publicationFormat) {
					if ($plugin->getPubIdType() == 'doi' && $publicationFormat->getStoredPubId('doi')) {
						$pubId = strip_tags($publicationFormat->getStoredPubId('doi'));
						$metaCustomHeaders .= '<meta name="DC.Identifier.DOI" content="' . $pubId . '"/><meta name="citation_doi" content="'. $pubId . '"/>';
					}
				}
			}
		}
		$templateMgr->assign(array(
			'enabledPubIdTypes' => $enabledPubIdTypes,
			'metaCustomHeaders' => $metaCustomHeaders,
			'licenseUrl' => $publishedMonograph->getLicenseURL(),
			'ccLicenseBadge' => Application::getCCLicenseBadge($publishedMonograph->getLicenseURL())
		));

		// e-Commerce
		import('classes.payment.omp.OMPPaymentManager');
		$ompPaymentManager = new OMPPaymentManager($request);
		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO');
		if ($ompPaymentManager->isConfigured()) {
			$availableFiles = array_filter(
				$submissionFileDao->getLatestRevisions($publishedMonograph->getId()),
				create_function('$a', 'return $a->getViewable() && $a->getDirectSalesPrice() !== null && $a->getAssocType() == ASSOC_TYPE_PUBLICATION_FORMAT;')
			);

			// Only pass files in pub formats that are also available
			$filteredAvailableFiles = array();
			foreach ($availableFiles as $file) {
				foreach ($availablePublicationFormats as $format) {
					if ($file->getAssocId() == $format->getId()) {
						$filteredAvailableFiles[] = $file;
						break;
					}
				}
			}
                        $remoteResourcesByPublicationFormat = array();
			foreach ($publishedMonograph->getPublicationFormats(true) as $publicationFormat) {
				$remoteURL = $publicationFormat->getRemoteURL();
				if ($remoteURL != null) {
					$remoteResourcesByPublicationFormat[$publicationFormat->getId()] = $remoteURL;
				}
			}

                        // Expose variables to template
			$templateMgr->assign('availableFiles', $filteredAvailableFiles);
                        $templateMgr->assign('remoteResources', $remoteResourcesByPublicationFormat);
		}

		// Provide the currency to the template, if configured.
		$currencyDao = DAORegistry::getDAO('CurrencyDAO');
		$press = $request->getPress();
		if ($currency = $press->getSetting('currency')) {
			$templateMgr->assign('currency', $currencyDao->getCurrencyByAlphaCode($currency));
		}

                /********
                 * MUNIPRESS
                 */
                $site = $request->getSite();
                $locales = $site->getSupportedLocales();
                
                $locale = AppLocale::getLocale();
                $submissionKeywordDao = DAORegistry::getDAO('SubmissionKeywordDAO');
                $submissionLanguageDao = DAORegistry::getDAO('SubmissionLanguageDAO');       

                $allKeywords = $submissionKeywordDao->getKeywords($publishedMonograph->getId(), $locales);
                $templateMgr->assign('keywords', $allKeywords[$locale]);

                $allLanguages = $submissionLanguageDao->getLanguages($publishedMonograph->getId(), $locales);
                $templateMgr->assign('languages', $allLanguages[$locale]);

                /***********
                 * MUNIPRESS - použito pro souvisejici publikace
                 **********/
                
                $publishedMonographsDao = DAORegistry::getDAO('PublishedMonographDAO');
                $submissionSubjectDao = DAORegistry::getDAO('SubmissionSubjectDAO');
                $allPublikace = $submissionSubjectDao->getSubjects($publishedMonograph->getId(), $locales);
                $souvisejiciPublikace = array();

                If(sizeof($allPublikace[$locale]) <=0){
                    $vyberPublikaci = $publishedMonographsDao->getBySameCategories($publishedMonograph->getId());
                    $velikostPole = sizeof($vyberPublikaci);
                    If($velikostPole<=7) {
                        $idPublikaciProVypis = $vyberPublikaci;
                    } else {
                        shuffle($vyberPublikaci);
                        for ($i=0; $i < CATALOG_SOUVISEJICI_PUBLIKACE_POCET; $i++){
                            
                            $idPublikaciProVypis[] = $vyberPublikaci[$i];
                        }
                    }
                } else{
                    $idPublikaciProVypis = $allPublikace[$locale];
                }
                foreach($idPublikaciProVypis as $idPublikace){
                    $publikace = $publishedMonographsDao->getById($idPublikace);
                    if($publikace){
                        $souvisejiciPublikace[] = $publikace;
                    }

                }
                
                $templateMgr->assign('souvisejiciPublikace', $souvisejiciPublikace);
                
                /***********************/
		// Display
		$templateMgr->display('frontend/pages/book.tpl');
	}

        function flipbook($args, $request){
                $this->download($args, $request, false, true);
        }
	/**
	 * Use an inline viewer to view a published monograph publication
	 * format file.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function view($args, $request) {
		$this->download($args, $request, true);
	}

	/**
	 * Download a published monograph publication format file.
	 * @param $args array
	 * @param $request PKPRequest
	 * @param $view boolean True iff inline viewer should be used, if available
	 */
	function download($args, $request, $view = false, $flipbook = false) {
		$dispatcher = $request->getDispatcher();
		$publishedMonograph = $this->getAuthorizedContextObject(ASSOC_TYPE_PUBLISHED_MONOGRAPH);
		$this->setupTemplate($request, $publishedMonograph);
		$press = $request->getPress();

		$monographId = array_shift($args); // Validated thru auth
		$representationId = array_shift($args);
		$bestFileId = array_shift($args);
                
		$publicationFormatDao = DAORegistry::getDAO('PublicationFormatDAO');
		$publicationFormat = $publicationFormatDao->getByBestId($representationId, $publishedMonograph->getId());
		if (!$publicationFormat || !$publicationFormat->getIsApproved() || !$publicationFormat->getIsAvailable() || $remoteURL = $publicationFormat->getRemoteURL()) fatalError('Invalid publication format specified.');

		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO');
		import('lib.pkp.classes.submission.SubmissionFile'); // File constants
		$submissionFile = $submissionFileDao->getByBestId($bestFileId, $publishedMonograph->getId());
		if (!$submissionFile) $dispatcher->handle404();

                $fileIdAndRevision = $submissionFile->getFileIdAndRevision();
		list($fileId, $revision) = array_map(create_function('$a', 'return (int) $a;'), preg_split('/-/', $fileIdAndRevision));
		import('lib.pkp.classes.file.SubmissionFileManager');
		$monographFileManager = new SubmissionFileManager($publishedMonograph->getContextId(), $publishedMonograph->getId());
                /*MUNIPRESS - flipbook*/
                
                if($flipbook){
                    $filename = "";
                    foreach($args as $value){
                        $filename .= "/".$value;
                    }
                    return $monographFileManager->downloadFile($fileId, $revision, true, $filename, $flipbook);
                }
                /*********/
                
		switch ($submissionFile->getAssocType()) {
			case ASSOC_TYPE_PUBLICATION_FORMAT: // Publication format file
				if ($submissionFile->getAssocId() != $publicationFormat->getId() || $submissionFile->getDirectSalesPrice() === null) fatalError('Invalid monograph file specified!');
				break;
			case ASSOC_TYPE_SUBMISSION_FILE: // Dependent file
				$genreDao = DAORegistry::getDAO('GenreDAO');
				$genre = $genreDao->getById($submissionFile->getGenreId());
				if (!$genre->getDependent()) fatalError('Invalid monograph file specified!');
                                
				return $monographFileManager->downloadFile($fileId, $revision);
				break;
			default: fatalError('Invalid monograph file specified!');
		}
		$ompCompletedPaymentDao = DAORegistry::getDAO('OMPCompletedPaymentDAO');
		$user = $request->getUser();
		if ($submissionFile->getDirectSalesPrice() === '0' || ($user && $ompCompletedPaymentDao->hasPaidPurchaseFile($user->getId(), $fileIdAndRevision)) || ($user && $user->getZlatyFond())) {
			// Paid purchase or open access.
			if (!$user && $press->getSetting('restrictMonographAccess')) {
				// User needs to register first.
				Validation::redirectLogin();
			}

			// If inline viewing is requested, permit plugins to
			// handle the document.
			PluginRegistry::loadCategory('viewableFiles', true);                                                    
			if ($view) {   
				if (HookRegistry::call('CatalogBookHandler::view', array(&$this, &$publishedMonograph, &$publicationFormat, &$submissionFile))) {                               
					// If the plugin handled the hook, prevent further default activity.
					exit();
				}
			}
			// Inline viewer not available, or viewing not wanted.
			// Download or show the file.
			$inline = $request->getUserVar('inline')?true:false;
                        $flipbook = $submissionFile->getFlipbookChecker();
			if (HookRegistry::call('CatalogBookHandler::download', array(&$this, &$publishedMonograph, &$publicationFormat, &$submissionFile, &$inline, $flipbook))) {                                          
				// If the plugin handled the hook, prevent further default activity.
				exit();
			}
			return $monographFileManager->downloadFile($fileId, $revision, $inline);
		}
                
                if ($submissionFile->getDirectSalesPrice() === '-1'){
                    if (!$user) return $request->redirect(null, 'login', null, null, array('source' => $request->url(null, null, null, array($monographId, $representationId, $bestFileId))));
                    if ($user && $user->getZlatyFond()==='0') return $request->redirect(null, 'user', 'profile', null, array('source' => $request->url(null, null, null, array($monographId, $representationId, $bestFileId))));
                }

		// Fall-through: user needs to pay for purchase.

		// Users that are not logged in need to register/login first.
		if (!$user) return $request->redirect(null, 'login', null, null, array('source' => $request->url(null, null, null, array($monographId, $representationId, $bestFileId))));

		// They're logged in but need to pay to view.
		import('classes.payment.omp.OMPPaymentManager');
		$ompPaymentManager = new OMPPaymentManager($request);
		if (!$ompPaymentManager->isConfigured()) {
			$request->redirect(null, 'catalog');
		}

		$queuedPayment = $ompPaymentManager->createQueuedPayment(
			$press->getId(),
			PAYMENT_TYPE_PURCHASE_FILE,
			$user->getId(),
			$fileIdAndRevision,
			$submissionFile->getDirectSalesPrice(),
			$press->getSetting('currency')
		);

		$ompPaymentManager->displayPaymentForm(
			$ompPaymentManager->queuePayment($queuedPayment),
			$queuedPayment
		);
	}

	/**
	 * Set up common template variables.
	 * @param $request PKPRequest
	 * @param $publishedMonograph PublishedMonograph
	 */
	function setupTemplate($request, $publishedMonograph) {
		$templateMgr = TemplateManager::getmanager($request);
		if ($seriesId = $publishedMonograph->getSeriesId()) {
			$seriesDao = DAORegistry::getDAO('SeriesDAO');
			$series = $seriesDao->getById($seriesId, $publishedMonograph->getContextId());
			$templateMgr->assign('series', $series);
		}

		parent::setupTemplate($request);
	}
}

?>
