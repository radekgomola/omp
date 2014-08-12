<?php

/**
 * @file pages/vyhledavaniAutori/VyhledavaniAutoriHandler.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class VyhledavaniAutoriHandler
 * @ingroup pages_vyhledavaniAutori
 *
 * 
 */

import('classes.handler.Handler');
import('lib.pkp.classes.security.PKPRoleDAO');
import('classes.monograph.AuthorDAO');
import('classes.monograph.PublishedMonographDAO');

class VyhledavaniAutoriHandler extends Handler {
    /**
	 * Constructor
	 **/
	function VyhledavaniAutoriHandler() {
		parent::Handler();
	}

	/**
	 * Show index of published articles by author.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function index($args, $request) {
		$this->validate();
		$this->setupTemplate($request, true);

		$press =& $request->getPress();

		$authorDao =& DAORegistry::getDAO('AuthorDAO');
                
                $publishedMonographDao =& DAORegistry::getDAO('PublishedMonographDAO');

		if (isset($args[0]) && $args[0] == 'view') {
			// View a specific author
			$firstName = $request->getUserVar('firstName');
			$middleName = $request->getUserVar('middleName');
			$lastName = $request->getUserVar('lastName');
			$affiliation = $request->getUserVar('affiliation');
			$country = $request->getUserVar('country');
                        $submissionId = $request->getUserVar('submissionId');

			//$publishedArticles = $authorDao->getAuthorsAlphabetizedByPress($press?$press->getId():null, null, null);
                                
                        $publishedMonographs =&  $publishedMonographDao->getById($submissionId, $press?$press->getId():  NULL);           

//			foreach ($publishedMonographs as $monograph) {
//				$monographId = $monograph->getId();
//			}

			if (empty($publishedMonographs)) {
				$request->redirect(null, $request->getRequestedPage());
			}

			$templateMgr =& TemplateManager::getManager();
			$templateMgr->assign_by_ref('publishedMonographs', $publishedMonographs);
//			$templateMgr->assign('firstName', $firstName);
//			$templateMgr->assign('middleName', $middleName);
//			$templateMgr->assign('lastName', $lastName);
//			$templateMgr->assign('affiliation', $affiliation);
//
//			$countryDao =& DAORegistry::getDAO('CountryDAO');
//			$country = $countryDao->getCountry($country);
//			$templateMgr->assign('country', $country);

			$templateMgr->display('vyhledavaniAutori/authorDetails.tpl');
		} else {
			// Show the author index
			$searchInitial = $request->getUserVar('searchInitial');
			 $rangeInfo = $this->getRangeInfo($request, 'authors');

			$authors =& $authorDao->getAuthorsAlphabetizedByPress(
				isset($press)?$press->getId():null,
				$searchInitial,
				$rangeInfo
			);

			$templateMgr =& TemplateManager::getManager();
			$templateMgr->assign('searchInitial', $request->getUserVar('searchInitial'));
			$templateMgr->assign('alphaList', explode(' ', __('common.alphaList')));
			$templateMgr->assign_by_ref('authors', $authors);
			$templateMgr->display('vyhledavaniAutori/authorIndex.tpl');
		}
	}

}

?>
