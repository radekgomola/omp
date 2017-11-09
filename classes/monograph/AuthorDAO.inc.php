<?php

/**
 * @file classes/monograph/AuthorDAO.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AuthorDAO
 * @ingroup monograph
 * @see Author
 * @see ChapterDAO (uses AuthorDAO)
 *
 * @brief Operations for retrieving and modifying Author objects.
 */



import('classes.monograph.Author');
import('classes.monograph.Monograph');
import('lib.pkp.classes.submission.PKPAuthorDAO');

class AuthorDAO extends PKPAuthorDAO {
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}

	/**
	 * Retrieve all published authors for a press in an associative array by
	 * the first letter of the last name, for example:
	 * $returnedArray['S'] gives array($misterSmithObject, $misterSmytheObject, ...)
	 * Keys will appear in sorted order. Note that if pressId is null,
	 * alphabetized authors for all presses are returned.
	 * @param $pressId int
	 * @param $initial An initial the last names must begin with
	 * @return array Authors ordered by sequence
	 */
	function getAuthorsAlphabetizedByPress($pressId = null, $initial = null, $rangeInfo = null) {
		$params = array(
			'affiliation', AppLocale::getPrimaryLocale(),
			'affiliation', AppLocale::getLocale()
		);

		if (isset($pressId)) $params[] = $pressId;
		if (isset($initial)) {
			$params[] = PKPString::strtolower($initial) . '%';
			$initialSql = ' AND LOWER(a.last_name) LIKE LOWER(?)';
		} else {
			$initialSql = '';
		}

		$result = $this->retrieveRange(
			'SELECT DISTINCT
				CAST(\'\' AS CHAR) AS url,
				a.author_id AS author_id,
				a.submission_id AS submission_id,
				CAST(\'\' AS CHAR) AS email,
				0 AS primary_contact,
				0 AS seq,
				a.first_name AS first_name,
				a.middle_name AS middle_name,
				a.last_name AS last_name,
				asl.setting_value AS affiliation_l,
				asl.locale,
				aspl.setting_value AS affiliation_pl,
				aspl.locale AS primary_locale,
				a.suffix AS suffix,
				a.user_group_id AS user_group_id,
				a.include_in_browse AS include_in_browse,
				0 AS show_title,
				a.country
			FROM	authors a
				LEFT JOIN author_settings aspl ON (a.author_id = aspl.author_id AND aspl.setting_name = ? AND aspl.locale = ?)
				LEFT JOIN author_settings asl ON (a.author_id = asl.author_id AND asl.setting_name = ? AND asl.locale = ?)
				JOIN submissions s ON (a.submission_id = s.submission_id)
			WHERE	s.status = ' . STATUS_PUBLISHED . ' ' .
				(isset($pressId)?'AND s.context_id = ? ':'') . '
				AND (a.last_name IS NOT NULL AND a.last_name <> \'\')' .
				$initialSql . '
			ORDER BY a.last_name, a.first_name',
			$params,
			$rangeInfo
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}

        /**
     * Retrieve all published authors for a press in an associative array by
     * the first letter of the last name, for example:
     * $returnedArray['S'] gives array($misterSmithObject, $misterSmytheObject, ...)
     * Keys will appear in sorted order. Note that if pressId is null,
     * alphabetized authors for all presses are returned.
     * @param $pressId int
     * @param $initial An initial the last names must begin with
     * @return array Authors ordered by sequence
     */
    function getAuthorsAlphabetizedByPressGroupedInit($pressId = null, $initial = null, $rangeInfo = null, $notInit) {
        $authors = array();
        $params = array(
            'affiliation', AppLocale::getPrimaryLocale(),
            'affiliation', AppLocale::getLocale()
        );

        $initialSql = '';
        if (isset($pressId)) {
            $params[] = $pressId;
        }
        if (isset($initial)) {
            $initialSql .= ' AND (';
            $initHelp = "";
            foreach ($initial as $firstLetter) {
                if ($initHelp != "") {
                    $initHelp .= " OR ";
                }
                $params[] = $firstLetter . '%';
                $initHelp .= 'LOWER(a.last_name) LIKE LOWER(?)';
            }
            $initialSql .= $initHelp . ')';
            if (isset($notInit)) {
                $initialSql .= ' AND (';
                $initNotHelp = "";
                foreach ($notInit as $firstLetterNot) {
                    if ($initNotHelp != "") {
                        $initNotHelp .= " OR ";
                    }
                    $params[] = strtolower($firstLetterNot) . '%';
                    $initNotHelp .= 'LOWER(a.last_name) NOT LIKE LOWER(?)';
                }
                $initialSql .= $initNotHelp . ')';
            }
        }
        $result = $this->retrieveRange(
                'SELECT DISTINCT
				CAST(\'\' AS CHAR) AS url,
				a.author_id AS author_id,
				a.submission_id AS submission_id,
                                a.email AS email,
				0 AS primary_contact,
				0 AS seq,
				a.first_name AS first_name,
				a.middle_name AS middle_name,
				a.last_name AS last_name,
				asl.setting_value AS affiliation_l,
				asl.locale,
				aspl.setting_value AS affiliation_pl,
				aspl.locale AS primary_locale,
				a.suffix AS suffix,
				a.user_group_id AS user_group_id,
                                a.include_in_browse AS include_in_browse,
				0 AS show_title,
				a.country,
                                munia.munipress_author_id,
                                munia.author_id,
                                munia.uco,
                                munia.poznamka, 
                                munia.druhe_prijmeni, 
                                munia.zobraz_hlavicka, 
                                munia.zobraz_autori, 
                                munia.zobraz_ostatni,
                                IFNULL(munia.tituly_pred,\'\') As Tituly_pred, 
                                IFNULL(munia.tituly_za,\'\') As Tituly_za
			FROM	authors a
				LEFT JOIN author_settings aspl ON (a.author_id = aspl.author_id AND aspl.setting_name = ? AND aspl.locale = ?)
				LEFT JOIN author_settings asl ON (a.author_id = asl.author_id AND asl.setting_name = ? AND asl.locale = ?)
                                LEFT JOIN munipress_author_metadata munia ON (a.author_id = munia.author_id)
				JOIN submissions s ON (a.submission_id = s.submission_id)
                        
			WHERE	s.status = ' . STATUS_PUBLISHED . ' ' .
                (isset($pressId) ? 'AND s.context_id = ? ' : '') . '
				AND (a.last_name IS NOT NULL AND a.last_name <> \'\')' .
                $initialSql . '
                        GROUP BY a.email,IFNULL(munia.tituly_pred,\'\'),IFNULL(munia.tituly_za,\'\')
			ORDER BY a.last_name, a.first_name', $params, $rangeInfo
        );

        return new DAOResultFactory($result, $this, '_fromRow');
    }
    
     /**
     * Retrieve all published monographs for author by name
     * @param $authorId int
     * @return DAOResultFactory
     */
    function getMonographsByAuthor($user) {
        $params[] = $user->getFirstName();
        $params[] = $user->getLastName();
        $params[] = $user->getEmail();
        $params[] = $tituly_pred = $user->getTitulyPred();
        $params[] = $tituly_za = $user->getTitulyZa();

        $result = $this->retrieveRange(
                'SELECT	DISTINCT
                                a.author_id
			FROM	authors a
                                LEFT JOIN munipress_author_metadata ma ON (a.author_id = ma.author_id)
			WHERE	a.first_name = ?
                                AND a.last_name = ?  
                                AND a.email = ?
                                ' . ($tituly_pred ? ' AND ma.tituly_pred = ? ' : ' AND (ma.tituly_pred = \'\' OR IsNull(ma.tituly_pred))') . '
                                ' . ($tituly_za ? ' AND ma.tituly_za = ? ' : ' AND (ma.tituly_za = \'\' OR IsNull(ma.tituly_za))'), $params
        );

        $returner = array();
        $publishedMonographDao = DAORegistry::getDAO('PublishedMonographDAO');
        while (!$result->EOF) {
            list($authorId) = $result->fields;
            $returner[] = $publishedMonographDao->getByAuthorId($authorId);
            $result->MoveNext();
        }
        $result->Close();

        return $returner;
    }
	/**
	 * Get a new data object
	 * @return DataObject
	 */
	function newDataObject() {
		return new Author();
	}
}

?>
