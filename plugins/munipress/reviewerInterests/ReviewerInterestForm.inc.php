<?php

/**
 * @file plugins/generic/reviewerInterests/ReviewerInterestForm.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ReviewerInterestForm
 * @ingroup plugins_generic_reviewerInterests
 *
 * @brief Form for journal managers to modify Reviewer Interests plugin reviewer interests.
 */


import('lib.pkp.classes.form.Form');

class ReviewerInterestForm extends Form {

	/** @var $journalId int */
	var $journalId;

	/** @var $plugin object */
	var $plugin;

	/** @var $reviewerInterestEntry object */
	var $reviewerInterestEntry;

	/**
	 * Constructor
	 * @param $plugin object
	 * @param $journalId int
	 * @param $reviewerInterestEntryId int
	 */
	function ReviewerInterestForm(&$plugin, $journalId, $reviewerInterestEntryId = 0) {
		$this->journalId = $journalId;
		$this->plugin =& $plugin;

		parent::Form($plugin->getTemplatePath() . 'templates/interestForm.tpl');

		if ($reviewerInterestEntryId) {
			$interestEntryDao = DAORegistry::getDAO('ReviewerInterestsEntryKeywordDAO');
			$this->reviewerInterestEntry = $interestEntryDao->getById($reviewerInterestEntryId);
		}
	}

	/**
	 * Initialize form data.
	 */
	function initData() {
		$journalId = $this->journalId;
		$plugin =& $this->plugin;

		$this->_data = array(
			'reviewerInterestEntry' => $this->reviewerInterestEntry,
			'formLocales' => AppLocale::getSupportedFormLocales(),
		);
	}

	/**
	 * Assign form data to user-submitted data.
	 */
	function readInputData() {
		$this->readUserVars(array('interest', 'reviewerInterestEntryId'));
	}

	/**
	 * Save settings.
	 */
	function execute() {
		$plugin =& $this->plugin;
		$journalId = $this->journalId;
		$interest = $this->getData('interest');
		$reviewerInterestEntryId = $this->getData('reviewerInterestEntryId');

		$interestDao = DAORegistry::getDAO('ReviewerInterestsKeywordDAO');
		$currentInterests = $interestDao->build($journalId);
		$interestEntryDao = DAORegistry::getDAO('ReviewerInterestsEntryKeywordDAO');

		if ($reviewerInterestEntryId > 0) { // Updating existing interest.
			$keywordEntry = $interestEntryDao->getById($reviewerInterestEntryId);
		} else {
			$keywordEntry = $interestEntryDao->newDataObject();
		}

		$keywordEntry->setControlledVocabId($currentInterests->getId());
		foreach ($interest as $locale => $value) {
			$keywordEntry->setKeyword(urldecode($value), $locale);
		}
		if ($reviewerInterestEntryId > 0) {
			$interestEntryDao->updateObject($keywordEntry);
		} else {
			$interestEntryDao->insertObject($keywordEntry);
		}
	}
}

?>
