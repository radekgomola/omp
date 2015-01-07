<?php

/**
 * @file pages/photoGallery/PhotoGalleryHandler.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PhotoGalleryHandler
 * @ingroup pages_photoGallery
 *
 */

import('classes.handler.Handler');

// import UI base classes
import('lib.pkp.classes.linkAction.LinkAction');
import('lib.pkp.classes.core.JSONMessage');

class PhotoGalleryHandler extends Handler {
	/**
	 * Constructor
	 */
	function PhotoGalleryHandler() {
		parent::Handler();
	}

	// Public handler methods
	//
	/**
	 * Show the photo gallery home.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function index($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$press = $request->getPress();

		// Fetch the monographs to display
		$photoGalleryDao = DAORegistry::getDAO('PhotoGalleryDAO');
                
		$photoGalleries = $PhotoGalleryDao->getByPressId($press->getId());
		$templateMgr->assign('photoGalleries', $photoGalleries);
                
		// Display
		$templateMgr->display('photoGallery/index.tpl');
	}

	//
	// Public handler methods
	//
	/**
	 * Display a gallery.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function gallery($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
	
		// Get Social media blocks enabled for the catalog
		$socialMediaDao = DAORegistry::getDAO('SocialMediaDAO');
		$socialMedia = $socialMediaDao->getEnabledForContextByContextId($publishedMonograph->getContextId());
		$blocks = array();
		while ($media = $socialMedia->next()) {
			$media->replaceCodeVars($publishedMonograph);
			$blocks[] = $media->getCode();
		}

		$templateMgr->assign_by_ref('blocks', $blocks);

		// add Chapters, if they exist.
		if ($publishedMonograph->getWorkType() == WORK_TYPE_EDITED_VOLUME) {
			$chapterDao = DAORegistry::getDAO('ChapterDAO');
			$chapters = $chapterDao->getChapters($publishedMonograph->getId());
			$templateMgr->assign_by_ref('chapters', $chapters->toAssociativeArray());
		}
		// determine which pubId plugins are enabled.
		$pubIdPlugins = PluginRegistry::loadCategory('pubIds', true);
		$enabledPubIdTypes = array();
		foreach ((array) $pubIdPlugins as $plugin) {
			if ($plugin->getEnabled()) {
				$enabledPubIdTypes[] = $plugin->getPubIdType();
				// check to see if the format has a pubId set.  If not, generate one.
				$publicationFormats = $publishedMonograph->getPublicationFormats(true);
				foreach ($publicationFormats as $publicationFormat) {
					if ($publicationFormat->getStoredPubId($plugin->getPubIdType()) == '') {
						$plugin->getPubId($publicationFormat);
					}
				}
			}
		}
		$templateMgr->assign('enabledPubIdTypes', $enabledPubIdTypes);

		// e-Commerce
		import('classes.payment.omp.OMPPaymentManager');
		$ompPaymentManager = new OMPPaymentManager($request);
		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO');
		if ($ompPaymentManager->isConfigured()) {
			$availableFiles = array_filter(
				$submissionFileDao->getLatestRevisions($publishedMonograph->getId()),
				create_function('$a', 'return $a->getViewable() && $a->getDirectSalesPrice() !== null && $a->getAssocType() == ASSOC_TYPE_PUBLICATION_FORMAT;')
			);
			$availableFilesByPublicationFormat = array();
			foreach ($availableFiles as $availableFile) {
				$availableFilesByPublicationFormat[$availableFile->getAssocId()][] = $availableFile;
			}

			// Determine whether or not to use the collapsed view.
			$useCollapsedView = true;
			foreach ($availableFilesByPublicationFormat as $publicationFormatId => $availableFiles) {
				if (count($availableFiles)>1) {
					$useCollapsedView = false;
					break;
				}
			}

			// Expose variables to template
			$templateMgr->assign('availableFiles', $availableFilesByPublicationFormat);
			$templateMgr->assign('useCollapsedView', $useCollapsedView);
		}

		if ($seriesId = $publishedMonograph->getSeriesId()) {
			$seriesDao = DAORegistry::getDAO('SeriesDAO');
			$series = $seriesDao->getById($seriesId, $publishedMonograph->getContextId());
			$templateMgr->assign('series', $series);
		}

		// Display
		$templateMgr->display('catalog/book/book.tpl');
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
