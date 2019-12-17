<?php

/**
 * @file classes/monograph/ChapterDAO.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ChapterDAO
 * @ingroup monograph
 * @see Chapter
 * @see AuthorDAO
 *
 * @brief Operations for retrieving and modifying Chapter objects.
 */

import('classes.monograph.Chapter');
import('classes.monograph.ChapterAuthor');

class ChapterDAO extends DAO {
	/**
	 * Constructor.
	 */
	function __construct() {
		parent::__construct();
	}

	/**
	 * Retrieve a chapter by ID.
	 * @param $chapterId int
	 * @param $assocType int optional
	 * @param $monographId int optional
	 * @return Chapter
	 */
	function getChapter($chapterId, $monographId = null) {
		$params = array((int) $chapterId);
		if ($monographId !== null) {
			$params[] = (int) $monographId;
		}

		$result = $this->retrieve(
			'SELECT sc.*, msc.doi, msc.pages, msc.citations '
                        . 'FROM submission_chapters sc LEFT JOIN munipress_submission_chapters msc ON sc.chapter_id = msc.chapter_id'
                        . ' WHERE sc.chapter_id = ?' . ($monographId !== null?' AND sc.submission_id = ? ':''),
			$params
		);

		$returner = null;
		if ($result->RecordCount() != 0) {
			$returner = $this->_returnFromRow($result->GetRowAssoc(false));
		}
		$result->Close();
		return $returner;
	}

	/**
	 * Get all chapters for a given monograph.
	 * @param $monographId int
	 * @param $rangeInfo object RangeInfo object (optional)
	 * @return DAOResultFactory
	 */
        function getChapters($monographId, $rangeInfo = null) {
		$result = $this->retrieveRange(
			'SELECT chapter_id, submission_id, chapter_seq FROM submission_chapters WHERE submission_id = ? ORDER BY chapter_seq',
			(int) $monographId,
			$rangeInfo
		);

		return new DAOResultFactory($result, $this, '_returnFromRow', array('id'));
	}

//	function getChapters($monographId, $rangeInfo = null) {
//		$result = $this->retrieveRange(
//			'SELECT sc.chapter_id, sc.submission_id, sc.chapter_seq, msc.doi, msc.pages, msc.citations '
//                        . 'FROM submission_chapters sc LEFT JOIN munipress_submission_chapter msc ON sc.chapter_id = msc.chapter_id'
//                        . 'WHERE sc.submission_id = ? ORDER BY sc.chapter_seq',
//			(int) $monographId,
//			$rangeInfo
//		);
//
//		return new DAOResultFactory($result, $this, '_returnFromRow', array('id'));
//	}

	/**
	 * Get the list of fields for which locale data is stored.
	 * @return array
	 */
	function getLocaleFieldNames() {
//		return array('title', 'subtitle');
            /*MUNIPRESS*/
            return array('title', 'subtitle','abstract');
	}

	/**
	 * Get a new data object
	 * @return Chapter
	 */
	function newDataObject() {
		return new Chapter();
	}

	/**
	 * Internal function to return a Chapter object from a row.
	 * @param $row array
	 * @return Chapter
	 */
	function _returnFromRow($row) {
		$chapter = $this->newDataObject();
		$chapter->setId($row['chapter_id']);
		$chapter->setMonographId($row['submission_id']);
		$chapter->setSequence($row['chapter_seq']);
                
                $chapter->setDoi($row['doi']);
                $chapter->setReferences($row['citations']);
                $chapter->setPages($row['pages']);
                
		$this->getDataObjectSettings('submission_chapter_settings', 'chapter_id', $row['chapter_id'], $chapter);

		HookRegistry::call('ChapterDAO::_returnFromRow', array(&$chapter, &$row));

		return $chapter;
	}

	/**
	 * Update the settings for this object
	 * @param $chapter object
	 */
	function updateLocaleFields($chapter) {
		$this->updateDataObjectSettings('submission_chapter_settings', $chapter, array(
			'chapter_id' => $chapter->getId()
		));
	}

	/**
	 * Insert a new board chapter.
	 * @param $chapter Chapter
	 */
	function insertChapter($chapter) {
		$this->update(
			'INSERT INTO submission_chapters
				(submission_id, chapter_seq)
				VALUES
				(?, ?)',
			array(
				(int) $chapter->getMonographId(),
				(int) $chapter->getSequence()
			)
		);
                
                $chapter->setId($this->getInsertId());
                $this->updateLocaleFields($chapter);
                
                $this->update(
			'INSERT INTO munipress_submission_chapters
				(chapter_id, doi, pages, citations)
				VALUES
				(?, ?, ?, ?)',
			array(
				(int) $chapter->getId(),
				$chapter->getDoi(),
                                $chapter->getPages(),
                                $chapter->getReferences()
			)
		);		
		
		return $chapter->getId();
	}

	/**
	 * Update an existing board chapter.
	 * @param $chapter Chapter
	 */
	function updateObject($chapter) {
		$this->update(
			'UPDATE submission_chapters
				SET	submission_id = ?,
					chapter_seq = ?
				WHERE
					chapter_id = ?',
			array(
				(int) $chapter->getMonographId(),
				(int) $chapter->getSequence(),
				(int) $chapter->getId()
			)
		);
                
                $this->update(
			'UPDATE munipress_submission_chapters
                                SET	doi = ?,
					pages = ?,
                                        citations = ?
				WHERE
					chapter_id = ?',
			array(			
				$chapter->getDoi(),
                                $chapter->getPages(),
                                $chapter->getReferences(),
                                (int) $chapter->getId(),
			)
		);
		$this->updateLocaleFields($chapter);
	}

	/**
	 * Delete a board chapter, including membership info
	 * @param $chapter Chapter
	 */
	function deleteObject($chapter) {
		$this->deleteById($chapter->getId());
	}

	/**
	 * Delete a board chapter, including membership info
	 * @param $chapterId int
	 */
	function deleteById($chapterId) {
		$this->update('DELETE FROM submission_chapter_authors WHERE chapter_id = ?', (int) $chapterId);
		$this->update('DELETE FROM submission_chapter_settings WHERE chapter_id = ?', (int) $chapterId);
		$this->update('DELETE FROM submission_chapters WHERE chapter_id = ?', (int) $chapterId);
                $this->update('DELETE FROM munipress_submission_chapters WHERE chapter_id = ?', (int) $chapterId);
	}

	/**
	 * Delete board chapters by assoc ID, including membership info
	 * @param $assocType int
	 * @param $monographId int
	 */
	function deleteByMonographId($monographId) {
		$chapters = $this->getChapters($monographId);
		while ($chapter = $chapters->next()) {
			$this->deleteObject($chapter);
		}
	}

	/**
	 * Sequentially renumber  chapters in their sequence order, optionally by monographId
	 * @param $monographId int
	 */
	function resequenceChapters($monographId = null) {
		$result = $this->retrieve(
			'SELECT chapter_id FROM submission_chapters' .
			($monographId !== null?' WHERE submission_id = ?':'') .
			' ORDER BY seq',
			($monographId !== null)?(int) $monographId:null
		);

		for ($i=1; !$result->EOF; $i++) {
			list($chapterId) = $result->fields;
			$this->update(
				'UPDATE submission_chapters SET chapter_seq = ? WHERE chapter_id = ?',
				array(
					(int) $i,
					(int) $chapterId
				)
			);

			$result->MoveNext();
		}

		$result->Close();
	}

	/**
	 * Get the ID of the last inserted board chapter.
	 * @return int
	 */
	function getInsertId() {
		return $this->_getInsertId('submission_chapters', 'chapter_id');
	}
}

?>
