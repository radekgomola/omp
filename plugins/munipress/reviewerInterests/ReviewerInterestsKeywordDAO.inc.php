<?php

/**
 * @file classes/submission/ReviewerInterestsKeywordDAO.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2000-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ReviewerInterestsKeywordDAO
 * @ingroup submission
 * @see Submission
 *
 * @brief Operations for retrieving and modifying a submission's assigned keywords
 */

import('lib.pkp.classes.controlledVocab.ControlledVocabDAO');

define('CONTROLLED_VOCAB_PLUGIN_REVIEWER_INTEREST_KEYWORD', 'reviewerInterestKeyword');

class ReviewerInterestsKeywordDAO extends ControlledVocabDAO {
	/**
	 * Constructor
	 */
	function ReviewerInterestsKeywordDAO() {
		parent::ControlledVocabDAO();
	}

	/**
	 * Build/fetch and return a controlled vocabulary for keywords.
	 * @param $journalId int
	 * @return ControlledVocab
	 */
	function build($journalId) {
		// may return an array of ControlledVocabs
		return parent::build(CONTROLLED_VOCAB_PLUGIN_REVIEWER_INTEREST_KEYWORD, ASSOC_TYPE_JOURNAL, $journalId);
	}

	/**
	 * Get the list of localized additional fields to store.
	 * @return array
	 */
	function getLocaleFieldNames() {
		return array('reviewerInterestKeyword');
	}

	/**
	 * Get keywords for a journal.
	 * @param $journalId int
	 * @param $locales array
	 * @return array
	 */
	function getKeywords($journalId, $locales) {

		$returner = array();
		foreach ($locales as $locale) {
			$returner[$locale] = array();
			$keywords = $this->build($journalId);
			$keywordEntryDao = DAORegistry::getDAO('ReviewerInterestsEntryKeywordDAO');
			$keywords = $keywordEntryDao->getByControlledVocabId($keywords->getId());

			while ($keyword = $keywords->next()) {
				$keyword = $keyword->getKeyword();
				if (array_key_exists($locale, $keyword)) { // quiets PHP when there are no keywords for a given locale
					$returner[$locale][] = $keyword[$locale];
				}
			}
		}
		return $returner;
	}

	/**
	 * Get an array of all of the journals keywords
	 * @return array
	 */
	function getAllUniqueKeywords() {
		$keywords = array();

		$result = $this->retrieve(
				'SELECT DISTINCT setting_value FROM controlled_vocab_entry_settings WHERE setting_name = ?', CONTROLLED_VOCAB_PLUGIN_REVIEWER_INTEREST_KEYWORD
		);

		while (!$result->EOF) {
			$keywords[] = $result->fields[0];
			$result->MoveNext();
		}

		$result->Close();
		return $keywords;
	}

	/**
	 * Add an array of keywords
	 * @param $keywords array
	 * @param $journalId int
	 * @param $deleteFirst boolean
	 * @return int
	 */
	function insertKeywords($keywords, $journalId, $deleteFirst = true) {
		$keywordDao = DAORegistry::getDAO('ReviewerInterestsKeywordDAO');
		$keywordEntryDao = DAORegistry::getDAO('ReviewerInterestsKeywordEntryDAO');
		$currentKeywords = $this->build($journalId);

		if ($deleteFirst) {
			$existingEntries = $keywordDao->enumerate($currentKeywords->getId(), CONTROLLED_VOCAB_PLUGIN_REVIEWER_INTEREST_KEYWORD);

			foreach ($existingEntries as $id => $entry) {
				$entry = trim($entry);
				$keywordEntryDao->deleteObjectById($id);
			}
		}
		if (is_array($keywords)) { // localized, array of arrays

			foreach ($keywords as $locale => $list) {
				if (is_array($list)) {
					$list = array_unique($list); // Remove any duplicate keywords
					$i = 1;
					foreach ($list as $keyword) {
						$keywordEntry = $keywordEntryDao->newDataObject();
						$keywordEntry->setControlledVocabId($currentKeywords->getID());
						$keywordEntry->setKeyword(urldecode($keyword), $locale);
						$keywordEntry->setSequence($i);
						$i++;
						$keywordEntryDao->insertObject($keywordEntry);
					}
				}
			}
		}
	}
}

?>