<?php

/**
 * @file plugins/generic/reviewerInterests/ReviewerInterestsPlugin.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ReviewerInterestsPlugin
 * @ingroup plugins_generic_reviewerInterests
 *
 * @brief Reviewer Interests plugin class
 */

import('lib.pkp.classes.plugins.GenericPlugin');

class ReviewerInterestsPlugin extends GenericPlugin {
	/**
	 * Called as a plugin is registered to the registry
	 * @param $category String Name of category plugin was registered to
	 * @return boolean True iff plugin initialized successfully; if false,
	 * 	the plugin will not be registered.
	 */
	function register($category, $path) {
		$success = parent::register($category, $path);
		if (!Config::getVar('general', 'installed') || defined('RUNNING_UPGRADE')) return true;
		if ($success && $this->getEnabled()) {

			$this->import('ReviewerInterestsKeywordDAO');
			$this->import('ReviewerInterestsEntryKeywordDAO');

			$this->import('ReviewerInterestsKeyword');

			$reviewerInterestsKeywordDao = new ReviewerInterestsKeywordDAO();
			$returner =& DAORegistry::registerDAO('ReviewerInterestsKeywordDAO', $reviewerInterestsKeywordDao);

			$reviewerInterestsEntryKeywordDao = new ReviewerInterestsEntryKeywordDAO();
			$returner =& DAORegistry::registerDAO('ReviewerInterestsEntryKeywordDAO', $reviewerInterestsEntryKeywordDao);

			// Replace interests block on user profile with dropdown containing constrained list.
			HookRegistry::register('TemplateManager::display', array($this, 'insertInterests'));
		}
		return $success;
	}

	function getDisplayName() {
		return __('plugins.generic.reviewerInterests.displayName');
	}

	function getDescription() {
		return __('plugins.generic.reviewerInterests.description');
	}

	/**
	 * Extend the {url ...} smarty to support this plugin.
	 */
	function smartyPluginUrl($params, &$smarty) {
		$path = array($this->getCategory(), $this->getName());
		if (is_array($params['path'])) {
			$params['path'] = array_merge($path, $params['path']);
		} elseif (!empty($params['path'])) {
			$params['path'] = array_merge($path, array($params['path']));
		} else {
			$params['path'] = $path;
		}

		if (!empty($params['id'])) {
			$params['path'] = array_merge($params['path'], array($params['id']));
			unset($params['id']);
		}
		return $smarty->smartyUrl($params, $smarty);
	}

	/**
	 * Set the page's breadcrumbs, given the plugin's tree of items
	 * to append.
	 * @param $subclass boolean
	 */
	function setBreadcrumbs($isSubclass = false) {
		$templateMgr =& TemplateManager::getManager();
		$pageCrumbs = array(
			array(
				Request::url(null, 'user'),
				'navigation.user'
			),
			array(
				Request::url(null, 'manager'),
				'user.role.manager'
			)
		);
		if ($isSubclass) $pageCrumbs[] = array(
			Request::url(null, 'manager', 'plugins'),
			'manager.plugins'
		);

		$templateMgr->assign('pageHierarchy', $pageCrumbs);
	}

	/**
	 * Display verbs for the management interface.
	 */
	function getManagementVerbs() {
		$verbs = array();
		if ($this->getEnabled()) {
			$verbs[] = array('settings', __('plugins.generic.reviewerInterests.manager.settings'));
		}
		return parent::getManagementVerbs($verbs);
	}

	/**
	 * Insert Google Scholar account info into author submission step 3
	 */
	function insertInterests($hookName, $params) {

		if ($this->getEnabled()) {
			$smarty =& $params[0];
			$templateName =& $params[1];

			if ($templateName == 'user/profile.tpl' || $templateName == 'user/register.tpl' || $templateName == 'manager/people/userProfileForm.tpl' || $templateName == 'sectionEditor/selectReviewer.tpl' || $templateName == 'sectionEditor/createReviewerForm.tpl') {
				// fetch the original template.
				$contents = $smarty->fetch($templateName);
				if ($templateName == 'user/profile.tpl') {
				$contents = preg_replace('|<td class="label">\s*(<label for="interests"\s*>.*?</label>)\s*</td>\s*<td\s+.*?</td>|s',
						'<td class="label">$1</td><td>'. $this->getReviewerSelect() . '</td>', $contents);
				} else if ($templateName == 'sectionEditor/createReviewerForm.tpl' || $templateName == 'manager/people/userProfileForm.tpl') {
					$contents = preg_replace('|<td class="value">\s*<script\s.*?>.*?</script>\s*<div id="interests">.*?</div>\s*</td>|s',
						'<td class="value">'. $this->getReviewerSelect() . '</td>', $contents);
				} else if ($templateName == 'user/register.tpl') {
					$contents = preg_replace('|<div id="reviewerInterestsContainer".*?>\s*(<label class="desc">.*?</label>).*?</div>\s*</td>|s',
						'$1<br /><div style="margin: 5px;">' . $this->getReviewerSelect() . '</div></td>' , $contents);
				} else {

					// First, remove the option for interests if it is there.
					$contents = preg_replace('|<option\s+[^>]*\s+value="interests"[^>]*>.*?</option>|s', '', $contents);

					// Second, add the new field for reviewer interests.
					$formTag = '';
					$submitButton = '<input type="submit" value="' . __('common.search') . '" class="button" />';
					if (preg_match('|(<form.+?selectReviewer.*?>)|', $contents, $matches)) {
						$formTag = $matches[1];
					}

					// if they submitted a search on the interests field, fix up the text search field and set the select dropdown.
					if (Request::getUserVar('searchField') == 'interests') {
						$contents = preg_replace('|(<input type="text" size="10" name="search" class="textField" value=").*?(" />)|', '$1$2', $contents);
					}
					$contents = preg_replace('|(<form.+?selectReviewer.*?>.*?</form>)|s',
						'$1<br />' . __('search.operator.or') . $formTag .
						'<input type="hidden" name="searchField" value="interests"/>' .
						'<input type="hidden" name="searchMatch" value="is"/>' .
						'<p>' . __('user.interests') . ': &nbsp;' . $this->getReviewerSelect('search', false, Request::getUserVar('searchField') == 'interests' ? array(Request::getUserVar('search')) : null) . $submitButton . '</p></form>', $contents);
				}

				$params[4] = $contents;
				return true;
			}
		}
		return false;
	}

	/**
	 * Execute a management verb on this plugin
	 * @param $verb string
	 * @param $args array
	 * @param $message string Result status message
	 * @param $messageParams array Parameters for the message key
	 * @return boolean
	 */
	function manage($verb, $args, &$message, &$messageParams) {
		if (!parent::manage($verb, $args, $message, $messageParams)) return false;

		$templateMgr =& TemplateManager::getManager();
		$templateMgr->register_function('plugin_url', array(&$this, 'smartyPluginUrl'));
		$journal =& Request::getJournal();

		switch ($verb) {
			case 'syncInterests':
				// propagate existing reviewer interests to the new list for the plugin.
				$interestDao =& DAORegistry::getDAO('InterestDAO');
				$interestEntryDao =& DAORegistry::getDAO('InterestEntryDAO');
				$controlledVocab = $interestDao->build();
				$existingEntries = $interestDao->enumerate($controlledVocab->getId(), CONTROLLED_VOCAB_INTEREST);

				// new list.
				$reviewerInterestDao = DAORegistry::getDAO('ReviewerInterestsKeywordDAO');
				$interestEntryDao = DAORegistry::getDAO('ReviewerInterestsEntryKeywordDAO');
				$newControlledVocab = $reviewerInterestDao->build($journal->getId());

				$locales = AppLocale::getSupportedFormLocales();

				foreach ($existingEntries as $id => $entry) {
					$interestEntry = $interestEntryDao->getById($id);
					$newInterestEntry = $interestEntryDao->newDataObject();
					$newInterestEntry->setControlledVocabId($newControlledVocab->getId());

					foreach ($locales AS $locale => $string) {
						$interest = $interestEntry->getData('interest', $locale);
						$newInterestEntry->setKeyword($interest, $locale);
					}
					$interestEntryDao->insertObject($newInterestEntry);

				}

				Request::redirect(null, 'manager', 'plugin');
				return true;
			case 'deleteInterest':
				$reviewerInterestEntryId = (int) Request::getUserVar('reviewerInterestEntryId');
				$interestEntryDao =& DAORegistry::getDAO('ReviewerInterestsEntryKeywordDAO');
				$interestEntryDao->deleteObjectById($reviewerInterestEntryId);
				Request::redirect(null, 'manager', 'plugin');
				return false;
			case 'manageInterest':
				$reviewerInterestEntryId = (int)Request::getUserVar('reviewerInterestEntryId');
				$this->import('ReviewerInterestForm');
				$form = new ReviewerInterestForm($this, $journal->getId(), $reviewerInterestEntryId);
				if (Request::getUserVar('save')) {
					$form->readInputData();
					if ($form->validate()) {
						$form->execute();
						Request::redirect(null, 'manager', 'plugin');
						return false;
					} else {
						$this->setBreadCrumbs(true);
						$form->display();
					}
				} else {
					$this->setBreadCrumbs(true);
					$form->initData();
					$form->display();
				}
				return true;
			case 'updateInterest':
				$reviewerInterestEntryId = (int) Request::getUserVar('reviewerInterestEntryId');
				$this->import('ReviewerInterestForm');
				$form = new ReviewerInterestForm($this, $journal->getId(), $reviewerInterestEntryId);
				$form->readInputData();

				if ($form->validate()) {
					$form->execute();
				}
				return true;
			case 'settings':

				$templateMgr =& TemplateManager::getManager();

				$interestDao = DAORegistry::getDAO('ReviewerInterestsKeywordDAO');
				$interestEntryDao = DAORegistry::getDAO('ReviewerInterestsEntryKeywordDAO');

				$interests = $interestDao->build($journal->getId());
				$interestEntries = $interestEntryDao->getByControlledVocabId($interests->getId());
				$interestEntries = $interestEntries->toArray();
				usort($interestEntries, create_function('$s1, $s2', 'return strcmp($s1->getKeyword(\'en_US\'), $s2->getKeyword(\'en_US\'));'));
				$templateMgr->assign_by_ref('interestEntries', $interestEntries);
				$locales = AppLocale::getSupportedFormLocales();
				asort($locales);
				$templateMgr->assign_by_ref('formLocales', $locales);
				$templateMgr->display($this->getTemplatePath() . 'templates/listInterests.tpl');

				return true;
			default:
				// Unknown management verb
				assert(false);
				return false;
		}
	}

	/**
	 * Return a string containing the HTML for the selector for choosing
	 * reviewer interests.
	 * @param $name string the field name
	 * @param $isMultiple boolean is this a multi select field.
	 * @param $chosenInterests array of values to preselect.
	 * @return string
	 */
	function getReviewerSelect($name = "keywords[interests][]", $isMultiple = true, $chosenInterests = null) {

		$html = '<select name="' . $name . '" ';
		$html .= $isMultiple ? 'size="5" multiple="multiple">' : '>';

		$journal =& Request::getJournal();
		$user =& Request::getUser();
		$existingInterests = array();

		if ($user && !$chosenInterests) {
			import('lib.pkp.classes.user.InterestManager');
			$interestManager = new InterestManager();
			$existingInterests = $interestManager->getInterestsForUser($user);
		}

		if (is_array($chosenInterests)) {
			$existingInterests = $chosenInterests;
		}

		$interestDao = DAORegistry::getDAO('ReviewerInterestsKeywordDAO');
		$vocab = $interestDao->build($journal->getId());
		$interests = $interestDao->enumerate($vocab->getId(), CONTROLLED_VOCAB_PLUGIN_REVIEWER_INTEREST_KEYWORD);
		usort($interests, create_function('$s1, $s2', 'return strcmp($s1, $s2);'));

		foreach ($interests as $id => $entry) {
			$isSelected = in_array($entry, $existingInterests) ? 'selected="selected"' : '';
			$html .= '<option value="' . htmlentities($entry) . '" ' . $isSelected . '>' . htmlentities($entry) . '</option>';
		}

		$html .= '</select>';

		return $html;
	}
}
?>
