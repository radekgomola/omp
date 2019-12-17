<?php

/**
 * @file classes/monograph/Chapter.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Chapter
 * @ingroup monograph
 * @see ChapterDAO
 *
 * @brief Describes a monograph chapter (or section)
 */

class Chapter extends DataObject {
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}

	//
	// Get/set methods
	//
	/**
	 * Get the monographId this chapter belongs to
	 * @return int
	 */
	function getMonographId() {
		return $this->getData('monographId');
	}

	/**
	 * Set the monographId this chapter belongs to
	 * @param int $monographId
	 */
	function setMonographId($monographId) {
		return $this->setData('monographId', $monographId);
	}

	/**
	 * Get the chapter full title (with title and subtitle).
	 * @return string
	 */
	function getLocalizedFullTitle() {

		$fullTitle = $this->getLocalizedTitle();

		if ($subtitle = $this->getLocalizedSubtitle()) {
			$fullTitle = PKPString::concatTitleFields(array($fullTitle, $subtitle));
		}

		return $fullTitle;
	}

	/**
	 * Get localized title of a chapter.
	 */
	function getLocalizedTitle() {
		return $this->getLocalizedData('title');
	}

	/**
	 * Get title of chapter (primary locale)
	 * @param $locale string
	 * @return string
	 */
	function getTitle($locale = null) {
		return $this->getData('title', $locale);
	}

	/**
	 * Set title of chapter
	 * @param $title string
	 * @param $locale string
	 */
	function setTitle($title, $locale = null) {
		return $this->setData('title', $title, $locale);
	}

	/**
	 * Get localized sub title of a chapter.
	 */
	function getLocalizedSubtitle() {
		return $this->getLocalizedData('subtitle');
	}

	/**
	 * Get sub title of chapter (primary locale)
	 * @param $locale string
	 * @return string
	 */
	function getSubtitle($locale = null) {
		return $this->getData('subtitle', $locale);
	}

	/**
	 * Set sub title of chapter
	 * @param $subtitle string
	 * @param $locale string
	 */
	function setSubtitle($subtitle, $locale = null) {
		return $this->setData('subtitle', $subtitle, $locale);
	}

	/**
	 * Get sequence of chapter.
	 * @return float
	 */
	function getSequence() {
		return $this->getData('sequence');
	}

	/**
	 * Set sequence of chapter.
	 * @param $sequence float
	 */
	function setSequence($sequence) {
		return $this->setData('sequence', $sequence);
	}

	/**
	 * Get all authors of this chapter.
	 * @return DAOResultFactory Iterator of authors
	 */
	function getAuthors() {
		$chapterAuthorDao = DAORegistry::getDAO('ChapterAuthorDAO'); /* @var $chapterAuthorDao ChapterAuthorDAO */
		return $chapterAuthorDao->getAuthors($this->getMonographId(), $this->getId());
	}

	/**
	 * Get the author names for this chapter and return them as a string.
	 * @return string
	 */
	function getAuthorNamesAsString() {
		$authorNames = array();
		$authors = $this->getAuthors();
		while ($author = $authors->next()) {
			$authorNames[] = $author->getFullName();
		}
		return join(', ', $authorNames);
	}
        
        /*MUNIPRESS*/
        /**
	 * Get "localized" submission abstract (if applicable).
	 * @return string
	 */
	function getLocalizedAbstract() {
		return $this->getLocalizedData('abstract');
	}

	/**
	 * Get abstract.
	 * @param $locale
	 * @return string
	 */
	function getAbstract($locale) {
		return $this->getData('abstract', $locale);
	}

	/**
	 * Set abstract.
	 * @param $abstract string
	 * @param $locale
	 */
	function setAbstract($abstract, $locale) {
		$this->setData('abstract', $abstract, $locale);
	}

        /**
	 * Get doi of chapter
	 * @return string
	 */
	function getDoi() {
		return $this->getData('doi');
	}

	/**
	 * Set doi of chapter
	 * @param $doi string
	 */
	function setDoi($doi) {
		return $this->setData('doi', $doi);
	}
        
        /**
	 * Get doi of chapter
	 * @return string
	 */
	function getPages() {
		return $this->getData('pages');
	}

	/**
	 * Set doi of chapter
	 * @param $doi string
	 */
	function setPages($pages) {
		return $this->setData('pages', $pages);
	}
        
        /**
	 * Get doi of chapter
	 * @return string
	 */
	function getReferences() {
		return $this->getData('references');
	}

	/**
	 * Set doi of chapter
	 * @param $doi string
	 */
	function setReferences($references) {
		return $this->setData('references', $references);
	}
        /**
	 * Get "localized" submission abstract (if applicable).
	 * @return string
	 */
//	function getLocalizedReferences() {
//		return $this->getLocalizedData('references');
//	}
}

?>
