<?php

/**
 * @file pages/about/AboutContextHandler.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AboutContextHandler
 * @ingroup pages_about
 *
 * @brief Handle requests for context-level about functions.
 */

import('classes.handler.Handler');
import('lib.pkp.classes.pages.about.IAboutContextInfoProvider');

class VyhledejAutoryHandler extends Handler {
    /**
	 * Constructor
	 **/
	function VyhledejAutoryHandler() {
		parent::Handler();
	}

	/**
	 * Show index of published articles by author.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function index($args, &$request) {
		$this->validate();
		$this->setupTemplate($request, true);

		$press =& $request->getPress();

		$authorDao =& DAORegistry::getDAO('AuthorDAO');

		if (isset($args[0]) && $args[0] == 'view') {
			// View a specific author
			$firstName = $request->getUserVar('firstName');
			$middleName = $request->getUserVar('middleName');
			$lastName = $request->getUserVar('lastName');
			$affiliation = $request->getUserVar('affiliation');
			$country = $request->getUserVar('country');

			$publishedArticles = $authorDao->getAuthorsAlphabetizedByPress($press?$press->getId():null, null, null);

			// Load information associated with each article.
			$journals = array();
			$issues = array();
			$sections = array();
			$issuesUnavailable = array();

			$issueDao =& DAORegistry::getDAO('IssueDAO');
			$sectionDao =& DAORegistry::getDAO('SectionDAO');
			$journalDao =& DAORegistry::getDAO('JournalDAO');

			foreach ($publishedArticles as $article) {
				$articleId = $article->getId();
				$issueId = $article->getIssueId();
				$sectionId = $article->getSectionId();
				$journalId = $article->getJournalId();

				if (!isset($issues[$issueId])) {
					import('classes.issue.IssueAction');
					$issue =& $issueDao->getIssueById($issueId);
					$issues[$issueId] =& $issue;
					$issuesUnavailable[$issueId] = IssueAction::subscriptionRequired($issue) && (!IssueAction::subscribedUser($journal, $issueId, $articleId) && !IssueAction::subscribedDomain($journal, $issueId, $articleId));
				}
				if (!isset($journals[$journalId])) {
					$journals[$journalId] =& $journalDao->getById($journalId);
				}
				if (!isset($sections[$sectionId])) {
					$sections[$sectionId] =& $sectionDao->getSection($sectionId, $journalId, true);
				}
			}

			if (empty($publishedArticles)) {
				$request->redirect(null, $request->getRequestedPage());
			}

			$templateMgr =& TemplateManager::getManager();
			$templateMgr->assign_by_ref('publishedArticles', $publishedArticles);
			$templateMgr->assign_by_ref('issues', $issues);
			$templateMgr->assign('issuesUnavailable', $issuesUnavailable);
			$templateMgr->assign_by_ref('sections', $sections);
			$templateMgr->assign_by_ref('journals', $journals);
			$templateMgr->assign('firstName', $firstName);
			$templateMgr->assign('middleName', $middleName);
			$templateMgr->assign('lastName', $lastName);
			$templateMgr->assign('affiliation', $affiliation);

			$countryDao =& DAORegistry::getDAO('CountryDAO');
			$country = $countryDao->getCountry($country);
			$templateMgr->assign('country', $country);

			$templateMgr->display('search/authorDetails.tpl');
		} else {
			// Show the author index
			$searchInitial = $request->getUserVar('searchInitial');
			$rangeInfo = $this->getRangeInfo('authors');

			$authors =& $authorDao->getAuthorsAlphabetizedByJournal(
				isset($journal)?$journal->getId():null,
				$searchInitial,
				$rangeInfo
			);

			$templateMgr =& TemplateManager::getManager();
			$templateMgr->assign('searchInitial', $request->getUserVar('searchInitial'));
			$templateMgr->assign('alphaList', explode(' ', __('common.alphaList')));
			$templateMgr->assign_by_ref('authors', $authors);
			$templateMgr->display('search/authorIndex.tpl');
		}
	}

	

	

	/**
	 * Setup common template variables.
	 * @param $request PKPRequest
	 * @param $subclass boolean set to true if caller is below this handler in the hierarchy
	 * @param $op string Current operation (for breadcrumb construction)
	 */
	function setupTemplate($request, $subclass = false, $op = 'index') {
		parent::setupTemplate();
		$templateMgr =& TemplateManager::getManager();
		$templateMgr->assign('helpTopicId', 'user.searchAndBrowse');

		$opMap = array(
			'index' => 'navigation.search',
			'categories' => 'navigation.categories'
		);

		$templateMgr->assign('pageHierarchy',
			$subclass ? array(array($request->url(null, 'search', $op), $opMap[$op]))
				: array()
		);

		$journal =& $request->getJournal();
		if (!$journal || !$journal->getSetting('restrictSiteAccess')) {
			$templateMgr->setCacheability(CACHEABILITY_PUBLIC);
		}
	}
}
	/**
	 * Constructor
	 */
	function AboutContextHandler() {
		parent::Handler();
		AppLocale::requireComponents(LOCALE_COMPONENT_APP_COMMON);
	}

	/**
	 * @see PKPHandler::authorize()
	 */
	function authorize($request, &$args, $roleAssignments) {
		$context = $request->getContext();
		if (!$context || !$context->getSetting('restrictSiteAccess')) {
			$templateMgr = TemplateManager::getManager($request);
			$templateMgr->setCacheability(CACHEABILITY_PUBLIC);
		}

		import('lib.pkp.classes.security.authorization.ContextRequiredPolicy');
		$this->addPolicy(new ContextRequiredPolicy($request));
		return parent::authorize($request, $args, $roleAssignments);
	}

	/**
	 * Display contact page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function contact($args, $request) {
		$settingsDao = DAORegistry::getDAO('PressSettingsDAO');
		$context = $request->getContext();
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('contactInfo', AboutContextHandler::getContactInfo($context));
		$templateMgr->display('about/contact.tpl');
	}

	/**
	 * Display description page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function description($args, $request) {
		$context = $request->getContext();

		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('descriptionInfo', AboutContextHandler::getDescriptionInfo($context));
		$templateMgr->display('about/description.tpl');
	}
        
        /**
	 * Display partners page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function partneri($args, $request) {
		$context = $request->getContext();

		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('partneriInfo', AboutContextHandler::getPartneriInfo($context));
		$templateMgr->display('about/partneri.tpl');
	}

	/**
	 * Display sponsorship page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function sponsorship($args, $request) {
		$context = $request->getContext();
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('sponsorshipInfo', AboutContextHandler::getSponsorshipInfo($context));
		$templateMgr->display('about/sponsorship.tpl');
	}

	/**
	 * Display editorialTeam page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function editorialTeam($args, $request) {
		$context = $request->getContext();
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('editorialTeamInfo', AboutContextHandler::getEditorialTeamInfo($context));
		$templateMgr->display('about/editorialTeam.tpl');
	}

	/**
	 * Display editorialPolicies page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function editorialPolicies($args, $request) {
		$context = $request->getContext();
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('editorialPoliciesInfo', AboutContextHandler::getEditorialPoliciesInfo($context));
		$templateMgr->display('about/editorialPolicies.tpl');
	}

	/**
	 * Display submissions page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function submissions($args, $request) {
		$settingsDao = DAORegistry::getDAO('PressSettingsDAO');
		$context = $request->getContext();
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('submissionInfo', AboutContextHandler::getSubmissionsInfo($context));
		$templateMgr->display('about/submissions.tpl');
	}


	//
	// Static protected methods.
	//
	/**
	* Get contact information used by contact operation.
	* @param $context Press
	* @return Array
	*/
	static protected function getContactInfo($context) {
		$pressSettings = $context->getSettings();
		$contactSettingNames = array('mailingAddress', 'contactPhone',
				'contactFax', 'contactEmail', 'contactName', 'supportName',
				'supportPhone', 'supportEmail');
		$contactSettings = array_intersect_key($pressSettings, array_fill_keys($contactSettingNames, null));

		// Remove empty elements.
		$contactSettings = array_filter($contactSettings);

		$contactLocalizedSettingNames = array('contactTitle', 'contactAffiliation', 'contactMailingAddress',
				'contactTitle', 'contactAffiliation', 'contactMailingAddress');

		foreach ($contactLocalizedSettingNames as $settingName) {
			$settingValue = $context->getLocalizedSetting($settingName);
			if ($settingValue) {
				$contactSettings[$settingName] = $settingValue;
			}
		}

		return $contactSettings;
	}

	/**
	 * Get description information used by description operation.
	 * @param $context Press
	 * @return Array
	 */
	static protected function getDescriptionInfo($context) {
		$descriptionSettings =  array(
				'description' => $context->getLocalizedSetting('description')
		);

		// Remove empty elements.
		$descriptionSettings = array_filter($descriptionSettings);
		return $descriptionSettings;
	}

        /**
	 * Get partners information used by description operation.
	 * @param $context Press
	 * @return Array
	 */
	static protected function getPartneriInfo($context) {
		$partneriSettings =  array(
				'partneri' => $context->getLocalizedSetting('partneri')
		);

		// Remove empty elements.
		$partneriSettings = array_filter($partneriSettings);
		return $partneriSettings;
	}
        
	/**
	 * Get sponsorship information used by sponsorship operation.
	 * @param $context Press
	 * @return Array
	 */
	static protected function getSponsorshipInfo($context) {
		$sponsorshipSettings = array(
				'contributorNote' => $context->getLocalizedSetting('contributorNote'),
				'contributors' => $context->getSetting('contributors'),
				'sponsorNote' => $context->getLocalizedSetting('sponsorNote'),
				'sponsors' => $context->getSetting('sponsors')
		);

		// Remove empty elements.
		$sponsorshipSettings = array_filter($sponsorshipSettings);
		return $sponsorshipSettings;
	}

	/**
	 * Get editorial team information used by editorial team operation.
	 * @param $context Press
	 * @return Array
	 */
	static protected function getEditorialTeamInfo($context) {
		$editorialTeamInfo = array(
				'masthead' => $context->getLocalizedSetting('masthead')
		);

		// Remove empty elements.
		$editorialTeamInfo = array_filter($editorialTeamInfo);
		return $editorialTeamInfo;
	}

	/**
	 * Get editorial policies information used by editorial
	 * policies operation.
	 * @param $context Press
	 * @return Array
	 */
	static protected function getEditorialPoliciesInfo($context) {
		$editorialPoliciesSettingNames = array('focusScopeDesc', 'reviewPolicy',
				'openAccessPolicy', 'customAboutItems');

		$editorialPoliciesInfo = array();

		foreach ($editorialPoliciesSettingNames as $settingName) {
			$settingValue = $context->getLocalizedSetting($settingName);
			if ($settingValue) {
				$editorialPoliciesInfo[$settingName] = $settingValue;
			}
		}

		return $editorialPoliciesInfo;
	}

	/**
	 * Get submissions information used by submissions operation.
	 * @param $context Press
	 */
	static protected function getSubmissionsInfo($context) {
		$submissionSettingNames = array('authorGuidelines', 'copyrightNotice', 'privacyStatement');

		$submissionInfo = array();

		foreach ($submissionSettingNames as $settingName) {
			$settingValue = $context->getLocalizedSetting($settingName);
			if ($settingValue) {
				$editorialPoliciesInfo[$settingName] = $settingValue;
			}
		}

		$submissionChecklist = $context->getLocalizedSetting('submissionChecklist');
		if (!empty($submissionChecklist)) {
			ksort($submissionChecklist);
			reset($submissionChecklist);
			$submissionInfo['checklist'] = $submissionChecklist;
		}

		return $submissionInfo;
	}


	//
	// Static public methods.
	//
	/**
	* @see IAboutContextInfoProvider::getAboutInfo()
	*/
	static function getAboutInfo($context) {
		return array(
			'contact' => AboutContextHandler::getContactInfo($context),
			'description' => AboutContextHandler::getDescriptionInfo($context),
                        'partneri' => AboutContextHandler::getPartneriInfo($context),
			'sponsorship' => AboutContextHandler::getSponsorshipInfo($context),
			'editorialTeam' => AboutContextHandler::getEditorialTeamInfo($context),
			'editorialPolicies' => AboutContextHandler::getEditorialPoliciesInfo($context),
			'submissions' => AboutContextHandler::getSubmissionsInfo($context)
		);
	}
}

?>
