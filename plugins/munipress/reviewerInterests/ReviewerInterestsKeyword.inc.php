<?php

/**
 * @file classes/submission/ReviewerInterestsKeyword.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2000-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ReviewerInterestsKeyword
 * @ingroup reviewerInterest
 * @see ReviewerInterestsKeywordEntryDAO
 *
 * @brief Basic class describing a reviewer interest keyword
 */

import('lib.pkp.classes.controlledVocab.ControlledVocabEntry');

class ReviewerInterestsKeyword extends ControlledVocabEntry {
	//
	// Get/set methods
	//

	/**
	 * Get the keyword
	 * @return string
	 */
	function getKeyword($locale = null) {
		return $this->getData('reviewerInterestKeyword', $locale);
	}

	/**
	 * Set the keyword text
	 * @param keyword string
	 * @param locale string
	 */
	function setKeyword($keyword, $locale) {
		$this->setData('reviewerInterestKeyword', $keyword, $locale);
	}

	function getLocaleMetadataFieldNames() {
		return array('reviewerInterestKeyword');
	}
}
?>