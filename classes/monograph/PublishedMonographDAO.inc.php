<?php

/**
 * @file classes/monograph/PublishedMonographDAO.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PublishedMonographDAO
 * @ingroup monograph
 * @see PublishedMonograph
 *
 * @brief Operations for retrieving and modifying PublishedMonograph objects.
 */

import('classes.monograph.PublishedMonograph');
import('classes.monograph.MonographDAO');

class PublishedMonographDAO extends MonographDAO {
 	/**
	 * Constructor.
	 */
	function PublishedMonographDAO() {
		parent::MonographDAO();
	}

        /**
	 * Retrieve all published monographs in a press.
	 * @param $pressId int
	 * @param $rangeInfo object optional
	 * @return DAOResultFactory
	 */
	function getByPressIdFiltered($pressId, $searchText = null, $rangeInfo = null, $trideni = null, $obor = null, $rok_vydani = null, $jazyk = null, $fakulta = null, $speckat = null) {
		$primaryLocale = AppLocale::getPrimaryLocale();
		$locale = AppLocale::getLocale();

		$params = array_merge(
			array(REALLY_BIG_NUMBER),
			$this->_getFetchParameters(),
			array(
				ASSOC_TYPE_PRESS,
				(int) $pressId
			)
		);

		if ($searchText !== null) {
			$params[] = $params[] = $params[] = "%$searchText%";
		}
                
                $setrid = '';
                switch($trideni) {                    
                    case "lex_desc":
                        $setrid .='st.setting_value DESC';
                        break;
                    case "pub_asc":                         
                        $setrid .= 'munis.datum_vydani ASC';
                        break;
                    case "pub_desc":
                        $setrid .='munis.datum_vydani DESC';
                        break;
                    case "change_asc":
                        $setrid .= 'ps.date_published ASC';
                        break;
                    case "change_desc":
                        $setrid .= 'ps.date_published DESC';
                        break;
                    default:                       
                        $setrid .= 'st.setting_value ASC';
                }
                
                if($speckat == "ke_kontrole_pro_munipress"){
                    $help = 1;
                    $ke_kontrole = 1;
                    $params[] = $speckat;
                } elseif ($speckat == "nezarazeno"){ 
                    $nezarazeno = 1;
                }else{
                    $help = 0;
                    $speckat = '';
                }
                
                $categoryDao = DAORegistry::getDAO('CategoryDAO');
                $oboryIterator = $categoryDao->getByParentId(1,$pressId);
                $oboryPole = array();
                while ($result = $oboryIterator->next()) {
                    $oboryPole[] = $result->getPath();
                }

                if ($obor && in_array($obor, $oboryPole) && !$help) {
                    $params[] = $obor;
                } else {
                    $obor = '';
                }
                               
                $rok_vydani = (int) $rok_vydani;
                if ($rok_vydani && $rok_vydani<10000 && $rok_vydani>1900 && !$help){
                    $params[] = $rok_vydani."-01-01";
                    $params[] = $rok_vydani."-12-31";
                } else {
                    $rok_vydani = '';
                }
                
                $monographDao = DAORegistry::getDAO('MonographDAO');
                $jazykyPole = $monographDao -> getLanguagesForDao();
                if ($jazyk && array_key_exists($jazyk, $jazykyPole) && !$help) {
                    $params[] = $jazykyPole[$jazyk];
                } else {
                    $jazyk = '';
                }
                
                $fakultyIterator = $categoryDao->getByParentId(32,$pressId);
                $fakultyPole = array();
                while ($result = $fakultyIterator->next()) {
                    $fakultyPole[] = $result->getPath();
                }

                if ($fakulta && in_array($fakulta, $fakultyPole) && !$help) {
                    $params[] = $fakulta;
                } else {
                    $fakulta = '';
                }                
                
                $result = $this->retrieveRange(
			'SELECT	DISTINCT
                              ps.*,
				s.*,
                                munis.datum_vydani,
				COALESCE(f.seq, ?) AS order_by,
				' . $this->_getFetchColumns() . '
			FROM	published_submissions ps
				JOIN submissions s ON ps.submission_id = s.submission_id
                                LEFT JOIN munipress_metadata munis ON (s.submission_id = munis.submission_id)
				' . $this->_getFetchJoins() . '
                                LEFT JOIN authors a ON s.submission_id = a.submission_id
				LEFT JOIN submission_settings st ON (st.submission_id = s.submission_id AND st.setting_name = \'title\')
				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = s.context_id)
			WHERE	ps.date_published IS NOT NULL AND s.context_id = ?
                                ' . ($searchText !== null?' AND (st.setting_value LIKE ? OR a.first_name LIKE ? OR a.last_name LIKE ?)':'') . '
                                ' . ($obor ?' AND s.submission_id IN (SELECT sn.submission_id FROM submission_categories sn JOIN categories cn ON (cn.category_id = sn.category_id AND cn.path = ?))':'' ) . '  
                                ' . ($rok_vydani ?' AND ? <= munis.datum_vydani AND munis.datum_vydani <= ?': '' ) . '
                                ' . ($jazyk ?' AND s.submission_id IN (SELECT cv.assoc_id FROM controlled_vocabs cv 
LEFT JOIN controlled_vocab_entries cve ON (cv.controlled_vocab_id = cve.controlled_vocab_id)
JOIN controlled_vocab_entry_settings cves ON (cve.controlled_vocab_entry_id = cves.controlled_vocab_entry_id AND cves.setting_name = \'submissionLanguage\' AND LOWER(cves.setting_value) = ?))':'' ) . '
                                ' . ($fakulta ?' AND s.submission_id IN (SELECT sn.submission_id FROM submission_categories sn JOIN categories cn ON (cn.category_id = sn.category_id AND cn.path = ?))':'' ) . '  
                                ' . ($nezarazeno ?' AND s.submission_id NOT IN (SELECT sn.submission_id FROM submission_categories sn)':'' ) . ' 
                                ' . ($ke_kontrole ?' AND s.submission_id IN (SELECT sn.submission_id FROM submission_categories sn JOIN categories cn ON (cn.category_id = sn.category_id AND cn.path = ?))':'' ) . '  
			ORDER BY ' .$setrid,
			$params,
			$rangeInfo
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}
        
	/**
	 * Retrieve all published monographs in a press.
	 * @param $pressId int
	 * @param $rangeInfo object optional
	 * @return DAOResultFactory
	 */
	function getByPressId($pressId, $searchText = null, $rangeInfo = null) {
		$primaryLocale = AppLocale::getPrimaryLocale();
		$locale = AppLocale::getLocale();

		$params = array_merge(
			array(REALLY_BIG_NUMBER),
			$this->_getFetchParameters(),
			array(
				ASSOC_TYPE_PRESS,
				(int) $pressId
			)
		);

		if ($searchText !== null) {
			$params[] = $params[] = $params[] = "%$searchText%";
		}
                
                $setrid = '';
                switch($trideni) {                    
                    case "lex_desc":
                        $setrid .='st.setting_value DESC';
                        break;
                    case "pub_asc":                         
                        $setrid .= 'munis.datum_vydani ASC';
                        break;
                    case "pub_desc":
                        $setrid .='munis.datum_vydani DESC';
                        break;
                    case "change_asc":
                        $setrid .= 's.last_modified ASC';
                        break;
                    case "change_desc":
                        $setrid .= 's.last_modified DESC';
                        break;
                    default:                       
                        $setrid .= 'st.setting_value ASC';
                }
//		$result = $this->retrieveRange(
//			'SELECT	' . ($searchText !== null?'DISTINCT ':'') . '
//				ps.*,
//				s.*,
//				COALESCE(f.seq, ?) AS order_by,
//				' . $this->_getFetchColumns() . '
//			FROM	published_submissions ps
//				JOIN submissions s ON ps.submission_id = s.submission_id
//				' . $this->_getFetchJoins() . '
//				' . ($searchText !== null?'
//					LEFT JOIN authors a ON s.submission_id = a.submission_id
//					LEFT JOIN submission_settings st ON (st.submission_id = s.submission_id AND st.setting_name = \'title\')
//				':'') . '
//				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = s.context_id)
//			WHERE	ps.date_published IS NOT NULL AND s.context_id = ?
//				' . ($searchText !== null?' AND (st.setting_value LIKE ? OR a.first_name LIKE ? OR a.last_name LIKE ?)':'') . '
//			ORDER BY order_by, ps.date_published',
//			$params,
//			$rangeInfo
//		);
                
                $result = $this->retrieveRange(
			'SELECT	DISTINCT
                              ps.*,
				s.*,
                                munis.*,
				COALESCE(f.seq, ?) AS order_by,
				' . $this->_getFetchColumns() . '
			FROM	published_submissions ps
				JOIN submissions s ON ps.submission_id = s.submission_id
                                LEFT JOIN munipress_metadata munis ON (s.submission_id = munis.submission_id)
				' . $this->_getFetchJoins() . '
                                LEFT JOIN authors a ON s.submission_id = a.submission_id
				LEFT JOIN submission_settings st ON (st.submission_id = s.submission_id AND st.setting_name = \'title\')
				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = s.context_id)
			WHERE	ps.date_published IS NOT NULL AND s.context_id = ?
                                ' . ($searchText !== null?' AND (st.setting_value LIKE ? OR a.first_name LIKE ? OR a.last_name LIKE ?)':'') . '
			ORDER BY ' .$setrid,
			$params,
			$rangeInfo
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}

        
        /**
	 * Retrieve all published monographs for author.
	 * @param $authorId int
	 * @return DAOResultFactory
	 */
	function getByAuthorId($authorId) {
		$primaryLocale = AppLocale::getPrimaryLocale();
		$locale = AppLocale::getLocale();

		$params = array_merge(
			array(REALLY_BIG_NUMBER),
			$this->_getFetchParameters(),
			array(
				ASSOC_TYPE_PRESS
			)
		);
                
                $params[] = $params[] = $params[] = $authorId;
                
                $result = $this->retrieveRange(
			'SELECT	DISTINCT
                                ps.*,
				s.*,
                                munis.*,
				COALESCE(f.seq, ?) AS order_by,
				' . $this->_getFetchColumns() . '
			FROM	published_submissions ps
				JOIN submissions s ON ps.submission_id = s.submission_id
                                LEFT JOIN munipress_metadata munis ON (s.submission_id = munis.submission_id)
				' . $this->_getFetchJoins() . '
                                LEFT JOIN authors a ON s.submission_id = a.submission_id
				LEFT JOIN submission_settings st ON (st.submission_id = s.submission_id AND st.setting_name = \'title\')
				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = s.context_id)
			WHERE	ps.date_published IS NOT NULL 
                                    AND a.first_name = (SELECT aa.first_name FROM authors AS aa WHERE aa.author_id = ?)  
                                    AND a.last_name = (SELECT aa.last_name FROM authors AS aa WHERE aa.author_id = ?)  
                                    AND a.email = (SELECT aa.email FROM authors AS aa WHERE aa.author_id = ?)  
			ORDER BY st.setting_value',
			$params
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}
        
          /**
	 * Retrieve all published monographs for author.
	 * @param $authorId int
	 * @return DAOResultFactory
	 */
	function getByAuthor($user) {
		$primaryLocale = AppLocale::getPrimaryLocale();
		$locale = AppLocale::getLocale();

		$params = array_merge(
			array(REALLY_BIG_NUMBER),
			$this->_getFetchParameters(),
			array(
				ASSOC_TYPE_PRESS
			)
		);
                
                $params[] = $user->getFirstName();
                $params[] = $user->getLastName();
                $params[] = $user->getEmail();
                $params[] = $tituly_pred = $user->getTitulyPred();
                $params[] = $tituly_za =$user->getTitulyZa();

                $result = $this->retrieveRange(
			'SELECT	DISTINCT
                                ps.*,
				s.*,
                                munis.*,
                                
				COALESCE(f.seq, ?) AS order_by,
				' . $this->_getFetchColumns() . '
			FROM	published_submissions ps
				JOIN submissions s ON ps.submission_id = s.submission_id
                                LEFT JOIN munipress_metadata munis ON (s.submission_id = munis.submission_id)
				' . $this->_getFetchJoins() . '
                                LEFT JOIN authors a ON s.submission_id = a.submission_id
				LEFT JOIN submission_settings st ON (st.submission_id = s.submission_id AND st.setting_name = \'title\')
				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = s.context_id)
                                LEFT JOIN munipress_author_metadata ma ON (a.author_id = ma.author_id)
			WHERE	ps.date_published IS NOT NULL 
                                    AND a.first_name = ?
                                    AND a.last_name = ?  
                                    AND a.email = ?
                                    ' . ($tituly_pred ?' AND ma.tituly_pred = ? ': '').'
                                    ' . ($tituly_za ?' AND ma.tituly_za = ? ': '').'
			ORDER BY st.setting_value',
			$params
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}
        
        /**
	 * Retrieve all published monographs for author.
	 * @param $authorId int
	 * @return DAOResultFactory
	 */
	function getByUserAuthorId($userId) {
		$primaryLocale = AppLocale::getPrimaryLocale();
		$locale = AppLocale::getLocale();

		$params = array_merge(
			array(REALLY_BIG_NUMBER),
			$this->_getFetchParameters(),
			array(
				ASSOC_TYPE_PRESS
			)
		);
                
                $params[] = $params[] = $params[] = $userId;
                
                $result = $this->retrieveRange(
			'SELECT	DISTINCT
                                ps.*,
				s.*,
                                munis.*,
				COALESCE(f.seq, ?) AS order_by,
				' . $this->_getFetchColumns() . '
			FROM	published_submissions ps
				JOIN submissions s ON ps.submission_id = s.submission_id
                                LEFT JOIN munipress_metadata munis ON (s.submission_id = munis.submission_id)
				' . $this->_getFetchJoins() . '
                                LEFT JOIN authors a ON s.submission_id = a.submission_id
				LEFT JOIN submission_settings st ON (st.submission_id = s.submission_id AND st.setting_name = \'title\')
				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = s.context_id)
			WHERE	ps.date_published IS NOT NULL 
                                    AND a.first_name = (SELECT u.first_name FROM users AS u WHERE u.user_id = ?)  
                                    AND a.last_name = (SELECT u.last_name FROM users AS u WHERE u.user_id = ?)  
                                    AND a.email = (SELECT u.email FROM users AS u WHERE u.user_id = ?)  
			ORDER BY st.setting_value',
			$params
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}
        
        
        /**
	 * Retrieve all published monographs for author.
	 * @param $authorId int
	 * @return DAOResultFactory
	 */
//	function getByAuthor($authorName, $authorSurname, $authorEmail) {
//		$primaryLocale = AppLocale::getPrimaryLocale();
//		$locale = AppLocale::getLocale();
//
//		$params = array_merge(
//			array(REALLY_BIG_NUMBER),
//			$this->_getFetchParameters(),
//			array(
//				ASSOC_TYPE_PRESS,
//                                $authorName,
//                                $authorSurname,
//                                $authorEmail
//			)
//		);
//                
//                $result = $this->retrieveRange(
//			'SELECT	DISTINCT
//                                ps.*,
//				s.*,
//				COALESCE(f.seq, ?) AS order_by,
//				' . $this->_getFetchColumns() . '
//			FROM	published_submissions ps
//				JOIN submissions s ON ps.submission_id = s.submission_id
//				' . $this->_getFetchJoins() . '
//                                LEFT JOIN authors a ON s.submission_id = a.submission_id
//				LEFT JOIN submission_settings st ON (st.submission_id = s.submission_id AND st.setting_name = \'title\')
//				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = s.context_id)
//			WHERE	ps.date_published IS NOT NULL 
//                                    AND a.first_name = ? 
//                                    AND a.last_name = ?
//                                    AND a.email = ?
//			ORDER BY st.setting_value',
//			$params
//		);
//
//		return new DAOResultFactory($result, $this, '_fromRow');
//	}
        
	/**
	 * Retrieve featured monographs for the press homepage.
	 * @param $pressId int
	 * @param $rangeInfo object optional
	 * @return DAOResultFactory
	 */
	function getPressFeatures($pressId, $rangeInfo = null) {
		$params = array_merge(
			$this->_getFetchColumns(),
			array(ASSOC_TYPE_PRESS, (int) $pressId)
		);
		$result = $this->retrieveRange(
			'SELECT	ps.*,
				s.*,
                                munis.*,
				' . $this->_getFetchColumns() . '
			FROM	published_submissions ps
				JOIN submissions s ON ps.submission_id = s.submission_id
				' . $this->_getFetchJoins() . '
				JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = s.context_id)
			WHERE	ps.date_published IS NOT NULL AND s.context_id = ?
			ORDER BY f.seq, ps.date_published',
			$params,
			$rangeInfo
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}

	/**
	 * Retrieve all published monographs in a series.
	 * @param $seriesId int
	 * @param $pressId int
	 * @param $rangeInfo object optional
	 * @return DAOResultFactory
	 */
	function getBySeriesId($seriesId, $pressId = null, $rangeInfo = null) {
		$params = array_merge(
			$this->_getFetchParameters(),
			array(ASSOC_TYPE_SERIES, (int) $seriesId)
		);

		if ($pressId) $params[] = (int) $pressId;

		$params[] = REALLY_BIG_NUMBER; // For feature sorting
                
                $setrid = '';
                switch($trideni) {                    
                    case "lex_desc":
                        $setrid .='st.setting_value DESC';
                        break;
                    case "pub_asc":                         
                        $setrid .= 'munis.datum_vydani ASC';
                        break;
                    case "pub_desc":
                        $setrid .='munis.datum_vydani DESC';
                        break;
                    default:                       
                        $setrid .= 'st.setting_value ASC';
                }

//		$result = $this->retrieveRange(
//			'SELECT	ps.*,
//				s.*,
//				' . $this->_getFetchColumns() . '
//			FROM	published_submissions ps
//				JOIN submissions s ON ps.submission_id = s.submission_id
//				' . $this->_getFetchJoins() . '
//				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = se.series_id)
//			WHERE	ps.date_published IS NOT NULL AND se.series_id = ?
//				' . ($pressId?' AND s.context_id = ?':'' ) . '
//			ORDER BY COALESCE(f.seq, ?) ASC, ps.date_published',
//			$params,
//			$rangeInfo
//		);
                
                $result = $this->retrieveRange(
			'SELECT	ps.*,
				s.*,
                                munis.*,
				' . $this->_getFetchColumns() . '
			FROM	published_submissions ps
				JOIN submissions s ON ps.submission_id = s.submission_id
                                LEFT JOIN munipress_metadata munis ON (s.submission_id = munis.submission_id)
				' . $this->_getFetchJoins() . '
				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = se.series_id)
                                LEFT JOIN submission_settings st ON (st.submission_id = s.submission_id AND st.setting_name = \'title\')
			WHERE	ps.date_published IS NOT NULL AND se.series_id = ?
				' . ($pressId?' AND s.context_id = ?':'' ) . '
			ORDER BY ' .$setrid,
			$params,
			$rangeInfo
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}

        /**
	 * Retrieve all published monographs in a category tříděné a filtrované.
	 * @param $categoryId int
	 * @param $pressId int
	 * @param $rangeInfo object optional
	 * @return DAOResultFactory
	 */
	function getByCategoryIdFiltry($categoryId, $pressId = null, $rangeInfo = null, $trideni = null, $obor = null, $rok_vydani = null, $jazyk = null, $fakulta = null) {
		$params = array_merge(
			array(REALLY_BIG_NUMBER),
			$this->_getFetchParameters(),
			array(
				(int) $categoryId, (int) $categoryId, (int) $categoryId,
				ASSOC_TYPE_SERIES
			)
		);
                $setrid = '';
                switch($trideni) {                    
                    case "lex_desc":
                        $setrid .='st.setting_value DESC';
                        break;
                    case "pub_asc":                         
                        $setrid .= 'munis.datum_vydani ASC';
                        break;
                    case "pub_desc":
                        $setrid .='munis.datum_vydani DESC';
                        break;
                    case "change_asc":
                        $setrid .= 's.last_modified ASC';
                        break;
                    case "change_desc":
                        $setrid .= 's.last_modified DESC';
                        break;
                    default:                       
                        $setrid .= 'st.setting_value ASC';
                }
                
                $categoryDao = DAORegistry::getDAO('CategoryDAO');
                $oboryIterator = $categoryDao->getByParentId(1,$pressId);
                $oboryPole = array();
                while ($result = $oboryIterator->next()) {
                    $oboryPole[] = $result->getPath();
                }
                                
		if ($pressId) $params[] = (int) $pressId;
                if ($obor && in_array($obor, $oboryPole)) {
                    $params[] = $obor;
                } else {
                    $obor = '';
                }

                
                $rok_vydani = (int) $rok_vydani;
                if ($rok_vydani && $rok_vydani<10000 && $rok_vydani>1900){
                    $params[] = $rok_vydani."-01-01";
                    $params[] = $rok_vydani."-12-31";
                } else {
                    $rok_vydani = '';
                }
                
                $monographDao = DAORegistry::getDAO('MonographDAO');
                $jazykyPole = $monographDao -> getLanguagesForDao();
                if ($jazyk && array_key_exists($jazyk, $jazykyPole)) {
                    $params[] = $jazykyPole[$jazyk];
                } else {
                    $jazyk = '';
                }
                
                $fakultyIterator = $categoryDao->getByParentId(32,$pressId);
                $fakultyPole = array();
                while ($result = $fakultyIterator->next()) {
                    $fakultyPole[] = $result->getPath();
                }

                if ($fakulta && in_array($fakulta, $fakultyPole)) {
                    $params[] = $fakulta;
                } else {
                    $fakulta = '';
                }
                
                $result = $this->retrieveRange(
			'SELECT	DISTINCT ps.*,
				s.*,
                                munis.*,
				COALESCE(f.seq, ?) AS order_by,
				' . $this->_getFetchColumns() . '
			FROM	published_submissions ps
				JOIN submissions s ON ps.submission_id = s.submission_id
                                LEFT JOIN munipress_metadata munis ON (s.submission_id = munis.submission_id)
				' . $this->_getFetchJoins() . '
				LEFT JOIN submission_categories sc ON (sc.submission_id = s.submission_id AND sc.category_id = ?)
				LEFT JOIN series_categories sca ON (sca.series_id = se.series_id)
				LEFT JOIN categories c ON (c.category_id = sca.category_id AND c.category_id = ?)
				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = ?)
                                LEFT JOIN submission_settings st ON (st.submission_id = s.submission_id AND st.setting_name = \'title\')
			WHERE	ps.date_published IS NOT NULL AND (c.category_id IS NOT NULL OR sc.category_id IS NOT NULL)
				' . ($pressId ?' AND s.context_id = ?':'' ) . '
                                ' . ($obor ?' AND s.submission_id IN (SELECT sn.submission_id FROM submission_categories sn JOIN categories cn ON (cn.category_id = sn.category_id AND cn.path = ?))':'' ) . '  
                                ' . ($rok_vydani ?' AND ? <= munis.datum_vydani AND munis.datum_vydani <= ?': '' ) . '
                                ' . ($jazyk ?' AND s.submission_id IN (SELECT cv.assoc_id FROM controlled_vocabs cv 
LEFT JOIN controlled_vocab_entries cve ON (cv.controlled_vocab_id = cve.controlled_vocab_id)
JOIN controlled_vocab_entry_settings cves ON (cve.controlled_vocab_entry_id = cves.controlled_vocab_entry_id AND cves.setting_name = \'submissionLanguage\' AND LOWER(cves.setting_value) = ?))':'' ) . '
                                ' . ($fakulta ?' AND s.submission_id IN (SELECT sn.submission_id FROM submission_categories sn JOIN categories cn ON (cn.category_id = sn.category_id AND cn.path = ?))':'' ) . '
			ORDER BY ' .$setrid,
			$params,
			$rangeInfo
		);
		return new DAOResultFactory($result, $this, '_fromRow');
	}
        
	/**
	 * Retrieve all published monographs in a category.
	 * @param $categoryId int
	 * @param $pressId int
	 * @param $rangeInfo object optional
	 * @return DAOResultFactory
	 */
	function getByCategoryId($categoryId, $pressId = null, $rangeInfo = null, $trideni = null) {
		$params = array_merge(
			array(REALLY_BIG_NUMBER),
			$this->_getFetchParameters(),
			array(
				(int) $categoryId, (int) $categoryId, (int) $categoryId,
				ASSOC_TYPE_CATEGORY
			)
		);
                $setrid = '';
                switch($trideni) {                    
                    case "lex_desc":
                        $setrid .='st.setting_value DESC';
                        break;
                    case "pub_asc":                         
                        $setrid .= 'munis.datum_vydani ASC';
                        break;
                    case "pub_desc":
                        $setrid .='munis.datum_vydani DESC';
                        break;
                    default:                       
                        $setrid .= 'st.setting_value ASC';
                }
                
		if ($pressId) $params[] = (int) $pressId;

//		$result = $this->retrieveRange(
//			'SELECT	DISTINCT ps.*,
//				s.*,
//				COALESCE(f.seq, ?) AS order_by,
//				' . $this->_getFetchColumns() . '
//			FROM	published_submissions ps
//				JOIN submissions s ON ps.submission_id = s.submission_id
//				' . $this->_getFetchJoins() . '
//				LEFT JOIN submission_categories sc ON (sc.submission_id = s.submission_id AND sc.category_id = ?)
//				LEFT JOIN series_categories sca ON (sca.series_id = se.series_id)
//				LEFT JOIN categories c ON (c.category_id = sca.category_id AND c.category_id = ?)
//				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = ?)
//			WHERE	ps.date_published IS NOT NULL AND (c.category_id IS NOT NULL OR sc.category_id IS NOT NULL)
//				' . ($pressId?' AND s.context_id = ?':'' ) . '
//			ORDER BY order_by, ps.date_published',
//			$params,
//			$rangeInfo
//		);
                
                $result = $this->retrieveRange(
			'SELECT	DISTINCT ps.*,
				s.*,
                                munis.*,
				COALESCE(f.seq, ?) AS order_by,
				' . $this->_getFetchColumns() . '
			FROM	published_submissions ps
				JOIN submissions s ON ps.submission_id = s.submission_id
                                LEFT JOIN munipress_metadata munis ON (s.submission_id = munis.submission_id)
				' . $this->_getFetchJoins() . '
				LEFT JOIN submission_categories sc ON (sc.submission_id = s.submission_id AND sc.category_id = ?)
				LEFT JOIN series_categories sca ON (sca.series_id = se.series_id)
				LEFT JOIN categories c ON (c.category_id = sca.category_id AND c.category_id = ?)
				LEFT JOIN features f ON (f.submission_id = s.submission_id AND f.assoc_type = ? AND f.assoc_id = ?)
                                LEFT JOIN submission_settings st ON (st.submission_id = s.submission_id AND st.setting_name = \'title\')
			WHERE	ps.date_published IS NOT NULL AND (c.category_id IS NOT NULL OR sc.category_id IS NOT NULL)
				' . ($pressId?' AND s.context_id = ?':'' ) . '
			ORDER BY ' .$setrid,
			$params,
			$rangeInfo
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}

	/**
	 * Retrieve Published Monograph by monograph id
	 * @param $monographId int
	 * @param $pressId int
	 * @return PublishedMonograph object
	 */
	function getById($monographId, $pressId = null, $metadataApprovedOnly = true) {
		$params = $this->_getFetchParameters();
		$params[] = (int) $monographId;
		if ($pressId) $params[] = (int) $pressId;

		$result = $this->retrieve(
			'SELECT	s.*,
				ps.*,
                                munis.*,
				' . $this->_getFetchColumns() . '
			FROM	submissions s
				JOIN published_submissions ps ON (ps.submission_id = s.submission_id)
                                LEFT JOIN munipress_metadata munis ON (s.submission_id = munis.submission_id)
				' . $this->_getFetchJoins() . '
			WHERE	s.submission_id = ?
				' . ($pressId?' AND s.context_id = ?':'')
				. ($metadataApprovedOnly?' AND ps.date_published IS NOT NULL':''),
			$params
		);

		$returner = null;
		if ($result->RecordCount() != 0) {
			$returner = $this->_fromRow($result->GetRowAssoc(false));
		}

		$result->Close();
		return $returner;
	}
        
	/**
	 * Generate and return a new data object.
	 * @return PublishedMonograph
	 */
	function newDataObject() {
		return new PublishedMonograph();
	}

	/**
	 * Creates and returns a published monograph object from a row
	 * @param $row array
	 * @return PublishedMonograph object
	 */
	function _fromRow($row) {
		// Get the PublishedMonograph object, populated with Monograph data
		$publishedMonograph = parent::_fromRow($row);

		// Add the additional PublishedMonograph data
		$publishedMonograph->setDatePublished($this->datetimeFromDB($row['date_published']));
		$publishedMonograph->setAudience($row['audience']);
		$publishedMonograph->setAudienceRangeQualifier($row['audience_range_qualifier']);
		$publishedMonograph->setAudienceRangeFrom($row['audience_range_from']);
		$publishedMonograph->setAudienceRangeTo($row['audience_range_to']);
		$publishedMonograph->setAudienceRangeExact($row['audience_range_exact']);
		$publishedMonograph->setCoverImage(unserialize($row['cover_image']));

		HookRegistry::call('PublishedMonographDAO::_fromRow', array(&$publishedMonograph, &$row));
		return $publishedMonograph;
	}


	/**
	 * Inserts a new published monograph into published_submissions table
	 * @param PublishedMonograph object
	 */
	function insertObject($publishedMonograph) {

		$this->update(
			sprintf('INSERT INTO published_submissions
				(submission_id, date_published, audience, audience_range_qualifier, audience_range_from, audience_range_to, audience_range_exact, cover_image)
				VALUES
				(?, %s, ?, ?, ?, ?, ?, ?)',
				$this->datetimeToDB($publishedMonograph->getDatePublished())),
			array(
				(int) $publishedMonograph->getId(),
				$publishedMonograph->getAudience(),
				$publishedMonograph->getAudienceRangeQualifier(),
				$publishedMonograph->getAudienceRangeFrom(),
				$publishedMonograph->getAudienceRangeTo(),
				$publishedMonograph->getAudienceRangeExact(),
				serialize($publishedMonograph->getCoverImage() ? $publishedMonograph->getCoverImage() : array()),
			)
		);
	}

	/**
	 * Removes an published monograph by monograph id
	 * @param monographId int
	 */
	function deleteById($monographId) {
		$this->update(
			'DELETE FROM published_submissions WHERE submission_id = ?',
			(int) $monographId
		);
	}

	/**
	 * Update a published monograph
	 * @param PublishedMonograph object
	 */
	function updateObject($publishedMonograph) {
		$this->update(
			sprintf('UPDATE	published_submissions
				SET	date_published = %s,
					audience = ?,
					audience_range_qualifier = ?,
					audience_range_from = ?,
					audience_range_to = ?,
					audience_range_exact = ?,
					cover_image = ?
				WHERE	submission_id = ?',
				$this->datetimeToDB($publishedMonograph->getDatePublished())),
			array(
				$publishedMonograph->getAudience(),
				$publishedMonograph->getAudienceRangeQualifier(),
				$publishedMonograph->getAudienceRangeFrom(),
				$publishedMonograph->getAudienceRangeTo(),
				$publishedMonograph->getAudienceRangeExact(),
				serialize($publishedMonograph->getCoverImage() ? $publishedMonograph->getCoverImage() : array()),
				(int) $publishedMonograph->getId()
			)
		);
	}
        
        /**
	 * Retrieve all published monographs in a category.
	 * @param $categoryId int
	 * @param $pressId int
	 * @param $rangeInfo object optional
	 * @return DAOResultFactory
	 */
	function getBySameCategories($monographyId, $rangeInfo = null) {
                $subjects = array();

		$result = $this->retrieve(
			'SELECT submission_id FROM 
                        (SELECT sc.submission_id, group_concat(sc.category_id) AS kategorie FROM submission_categories sc WHERE submission_id != ? AND category_id != 45 GROUP BY sc.submission_id ORDER BY sc.category_id) AS select1 
                        INNER JOIN 
                        (SELECT group_concat(sc2.category_id) AS kategorie FROM submission_categories sc2 WHERE submission_id = ? AND category_id != 45 ORDER BY sc2.category_id) AS select2
                        ON select1.kategorie = select2.kategorie', array($monographyId, $monographyId)
		);
                
		while (!$result->EOF) {
                        
			$subjects[] = $result->fields[0];
			$result->MoveNext();
		}

		$result->Close();
		return $subjects;
	}
}

?>
