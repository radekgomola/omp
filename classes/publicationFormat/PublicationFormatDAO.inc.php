<?php
/**
 * @file classes/publicationFormat/PublicationFormatDAO.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PublicationFormatDAO
 * @ingroup publicationFormat
 * @see PublicationFormat
 *
 * @brief Operations for retrieving and modifying PublicationFormat objects.
 */

import('classes.publicationFormat.PublicationFormat');
import('lib.pkp.classes.submission.RepresentationDAO');

class PublicationFormatDAO extends RepresentationDAO {
	/**
	 * Constructor
	 */
	function PublicationFormatDAO() {
		parent::RepresentationDAO();
	}

	/**
	 * Retrieve a publication format by type id.
	 * @param $publicationFormatId int
	 * @param $monographId optional int
	 * @param $pressId optional int
	 * @return PublicationFormat
	 */
	function getById($publicationFormatId, $monographId = null, $pressId = null) {
		$params = array((int) $publicationFormatId);
		if ($monographId) $params[] = (int) $monographId;
		if ($pressId) $params[] = (int) $pressId;

		$result = $this->retrieve(
			'SELECT pf.*, munipf.*
			FROM	publication_formats pf
                        LEFT JOIN munipress_publication_formats munipf ON (pf.publication_format_id = munipf.publication_format_id)
			' . ($pressId?' JOIN submissions s ON (s.submission_id = pf.submission_id)':'') . '
			WHERE	pf.publication_format_id = ?' .
			($monographId?' AND pf.submission_id = ?':'') .
			($pressId?' AND s.context_id = ?':''),
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
	 * Retrieves a list of publication formats for a submission
	 * @param int $submissionId int
	 * @return DAOResultFactory (PublicationFormat)
	 */
	function getBySubmissionId($submissionId) {
		$result = $this->retrieve(
			'SELECT pf.*, munipf.*
			FROM	publication_formats pf                        
                        LEFT JOIN publication_format_settings pfs ON (pf.publication_format_id = pfs.publication_format_id AND pfs.setting_name=\'name\' AND pfs.locale=\'cs_CZ\')   
                        LEFT JOIN munipress_publication_formats munipf ON (pf.publication_format_id = munipf.publication_format_id)
			WHERE	submission_id = ?
                        ORDER BY pfs.setting_value',
			(int) $submissionId
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}

	/**
	 * Retrieves a list of publication formats for a press
	 * @param int pressId
	 * @return DAOResultFactory (PublicationFormat)
	 */
	function getByPressId($pressId) {
		$params = array((int) $pressId);
		$result = $this->retrieve(
			'SELECT pf.*, munipf.*
			FROM	publication_formats pf                    
                        LEFT JOIN munipress_publication_formats munipf ON (pf.publication_format_id = munipf.publication_format_id)
			JOIN	submissions s ON (s.submission_id = pf.submission_id)
			WHERE	s.context_id = ?',
			$params
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}

	/**
	 * Retrieves a list of approved publication formats for a published submission
	 * @param int $submissionId
	 * @return DAOResultFactory (PublicationFormat)
	 */
	function getApprovedBySubmissionId($submissionId) {
		$result = $this->retrieve(
			'SELECT pf.*, munipf.*
			FROM	publication_formats  pf
                        LEFT JOIN publication_format_settings pfs ON (pf.publication_format_id = pfs.publication_format_id AND pfs.setting_name=\'name\' AND pfs.locale=\'cs_CZ\')   
                        LEFT JOIN munipress_publication_formats munipf ON (pf.publication_format_id = munipf.publication_format_id)
			WHERE	submission_id = ? AND is_approved = 1
                        ORDER BY pfs.setting_value',
			(int) $submissionId
		);

		return new DAOResultFactory($result, $this, '_fromRow');
	}

	/**
	 * Delete an publication format by ID.
	 * @param $publicationFormatId int
	 */
	function deleteById($publicationFormatId) {
		// remove settings, then the association itself.
		$this->update('DELETE FROM publication_format_settings WHERE publication_format_id = ?', (int) $publicationFormatId);
		return $this->update('DELETE FROM publication_formats WHERE publication_format_id = ?', (int) $publicationFormatId);
	}

	/**
	 * Update the settings for this object
	 * @param $publicationFormat object
	 */
	function updateLocaleFields(&$publicationFormat) {
		$this->updateDataObjectSettings(
			'publication_format_settings',
			$publicationFormat,
			array('publication_format_id' => $publicationFormat->getId())
		);
	}

	/**
	 * Construct a new data object corresponding to this DAO.
	 * @return PublicationFormat
	 */
	function newDataObject() {
		return new PublicationFormat();
	}

	/**
	 * Internal function to return an PublicationFormat object from a row.
	 * @param $row array
	 * @param $callHooks boolean
	 * @return PublicationFormat
	 */
	function _fromRow($row, $callHooks = true) {
		$publicationFormat = $this->newDataObject();

		// Add the additional Publication Format data
		$publicationFormat->setIsApproved($row['is_approved']);
		$publicationFormat->setEntryKey($row['entry_key']);
		$publicationFormat->setPhysicalFormat($row['physical_format']);
		$publicationFormat->setSeq($row['seq']);
		$publicationFormat->setId($row['publication_format_id']);
		$publicationFormat->setSubmissionId($row['submission_id']);
		$publicationFormat->setFileSize($row['file_size']);
		$publicationFormat->setFrontMatter($row['front_matter']);
		$publicationFormat->setBackMatter($row['back_matter']);
		$publicationFormat->setHeight($row['height']);
		$publicationFormat->setHeightUnitCode($row['height_unit_code']);
		$publicationFormat->setWidth($row['width']);
		$publicationFormat->setWidthUnitCode($row['width_unit_code']);
		$publicationFormat->setThickness($row['thickness']);
		$publicationFormat->setThicknessUnitCode($row['thickness_unit_code']);
		$publicationFormat->setWeight($row['weight']);
		$publicationFormat->setWeightUnitCode($row['weight_unit_code']);
		$publicationFormat->setProductCompositionCode($row['product_composition_code']);
		$publicationFormat->setProductFormDetailCode($row['product_form_detail_code']);
		$publicationFormat->setCountryManufactureCode($row['country_manufacture_code']);
		$publicationFormat->setImprint($row['imprint']);
		$publicationFormat->setProductAvailabilityCode($row['product_availability_code']);
		$publicationFormat->setTechnicalProtectionCode($row['technical_protection_code']);
		$publicationFormat->setReturnableIndicatorCode($row['returnable_indicator_code']);
		$publicationFormat->setIsAvailable($row['is_available']);
                
                /**********
                 * MUNIPRESS
                 ***********/
                
                $publicationFormat->setTypLicencePrepinac($row['licence_typ_prepinac']);
                $publicationFormat->setLicenceTyp($row['licence_typ']);
                $publicationFormat->setLicenceDrzitel($row['licence_drzitel']);
                $publicationFormat->setLicenceExpirace($this->dateFromDB($row['licence_expirace']));
                $publicationFormat->setLicenceVznik($this->dateFromDB($row['licence_vznik']));
                $publicationFormat->setDatumVydani($this->dateFromDB($row['datum_vydani']));
                $publicationFormat->setNaklad($row['naklad_db']);
		$publicationFormat->setPocetStran($row['pocet_stran']);
                $publicationFormat->setPoradiVydani($row['poradi_vydani']);
                $publicationFormat->setTiskarna($row['tiskarna_db']);
                $publicationFormat->setPovVytiskyDosly($this->dateFromDB($row['pov_vytisky_dosly']));
                $publicationFormat->setPovVytiskyOdesly($this->dateFromDB($row['pov_vytisky_odesly']));

		$this->getDataObjectSettings('publication_format_settings', 'publication_format_id', $row['publication_format_id'], $publicationFormat);

		if ($callHooks) HookRegistry::call('PublicationFormatDAO::_fromRow', array(&$publicationFormat, &$row));
		return $publicationFormat;
	}

	/**
	 * Insert a publication format.
	 * @param $publicationFormat PublicationFormat
	 * @return int the publication format id.
	 */
	function insertObject(&$publicationFormat) {
		$this->update(
			'INSERT INTO publication_formats
				(is_approved, entry_key, physical_format, submission_id, seq, file_size, front_matter, back_matter, height, height_unit_code, width, width_unit_code, thickness, thickness_unit_code, weight, weight_unit_code, product_composition_code, product_form_detail_code, country_manufacture_code, imprint, product_availability_code, technical_protection_code, returnable_indicator_code, is_available)
			VALUES
				(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
			array(
				(int) $publicationFormat->getIsApproved(),
				$publicationFormat->getEntryKey(),
				(int) $publicationFormat->getPhysicalFormat(),
				(int) $publicationFormat->getMonographId(),
				(int) $publicationFormat->getSeq(),
				$publicationFormat->getFileSize(),
				$publicationFormat->getFrontMatter(),
				$publicationFormat->getBackMatter(),
				$publicationFormat->getHeight(),
				$publicationFormat->getHeightUnitCode(),
				$publicationFormat->getWidth(),
				$publicationFormat->getWidthUnitCode(),
				$publicationFormat->getThickness(),
				$publicationFormat->getThicknessUnitCode(),
				$publicationFormat->getWeight(),
				$publicationFormat->getWeightUnitCode(),
				$publicationFormat->getProductCompositionCode(),
				$publicationFormat->getProductFormDetailCode(),
				$publicationFormat->getCountryManufactureCode(),
				$publicationFormat->getImprint(),
				$publicationFormat->getProductAvailabilityCode(),
				$publicationFormat->getTechnicalProtectionCode(),
				$publicationFormat->getReturnableIndicatorCode(),
				(int) $publicationFormat->getIsAvailable(),
			)
		);

		$publicationFormat->setId($this->_getInsertId('publication_formats', 'publication_format_id'));
                
                $this->updateLocaleFields($publicationFormat);
                
                $this->update(
			sprintf('INSERT INTO munipress_publication_formats
				(publication_format_id, pocet_stran, licence_typ_prepinac, licence_typ, licence_drzitel, licence_expirace, licence_vznik, naklad_db, datum_vydani, poradi_vydani, pov_vytisky_dosly, pov_vytisky_odesly, tiskarna_db)
			VALUES
				(?, ?, ?, ?, ?, %s, %s, ?, %s, ?, %s, %s, ?)',
                                $this->datetimeToDB($publicationFormat->getLicenceExpirace()), $this->datetimeToDB($publicationFormat->getLicenceVznik()), $this->datetimeToDB($publicationFormat->getDatumVydani()),$this->datetimeToDB($publicationFormat->getPovVytiskyDosly()),$this->datetimeToDB($publicationFormat->getPovVytiskyOdesly())),
			array(
				(int) $publicationFormat->getId(),
				(int) $publicationFormat->getPocetStran(),
                                $publicationFormat->getTypLicencePrepinac(),
                                $publicationFormat->getLicenceTyp(),
                                $publicationFormat->getLicenceDrzitel(),
                                (int) $publicationFormat->getNaklad(),
                                $publicationFormat->getPoradiVydani(),
                                $publicationFormat->getTiskarna()
                                
			)
		);
                
		

		return $publicationFormat->getId();
	}

	/**
	 * Update an existing publication format.
	 * @param $publicationFormat PublicationFormat
	 */
	function updateObject(&$publicationFormat) {
		$this->update(
			'UPDATE publication_formats
			SET	is_approved = ?,
				entry_key = ?,
				physical_format = ?,
				seq = ?,
				file_size = ?,
				front_matter = ?,
				back_matter = ?,
				height = ?,
				height_unit_code = ?,
				width = ?,
				width_unit_code = ?,
				thickness = ?,
				thickness_unit_code = ?,
				weight = ?,
				weight_unit_code = ?,
				product_composition_code = ?,
				product_form_detail_code = ?,
				country_manufacture_code = ?,
				imprint = ?,
				product_availability_code = ?,
				technical_protection_code = ?,
				returnable_indicator_code = ?,
				is_available = ?
			WHERE	publication_format_id = ?',
			array(
				(int) $publicationFormat->getIsApproved(),
				$publicationFormat->getEntryKey(),
				(int) $publicationFormat->getPhysicalFormat(),
				(int) $publicationFormat->getSeq(),
				$publicationFormat->getFileSize(),
				$publicationFormat->getFrontMatter(),
				$publicationFormat->getBackMatter(),
				$publicationFormat->getHeight(),
				$publicationFormat->getHeightUnitCode(),
				$publicationFormat->getWidth(),
				$publicationFormat->getWidthUnitCode(),
				$publicationFormat->getThickness(),
				$publicationFormat->getThicknessUnitCode(),
				$publicationFormat->getWeight(),
				$publicationFormat->getWeightUnitCode(),
				$publicationFormat->getProductCompositionCode(),
				$publicationFormat->getProductFormDetailCode(),
				$publicationFormat->getCountryManufactureCode(),
				$publicationFormat->getImprint(),
				$publicationFormat->getProductAvailabilityCode(),
				$publicationFormat->getTechnicalProtectionCode(),
				$publicationFormat->getReturnableIndicatorCode(),
				(int) $publicationFormat->getIsAvailable(),
				(int) $publicationFormat->getId()
			)
		);
                
                
                $this->update(
			sprintf('UPDATE munipress_publication_formats
			SET	pocet_stran = ?,
                                licence_typ_prepinac = ?,
                                licence_typ = ?,
                                licence_drzitel = ?,
                                licence_expirace = %s,
                                licence_vznik = %s,
                                naklad_db = ?,
                                datum_vydani = %s,
                                poradi_vydani = ?,
                                pov_vytisky_dosly = %s,
                                pov_vytisky_odesly = %s,
                                tiskarna_db = ?
			WHERE	publication_format_id = ?',
                        $this->datetimeToDB($publicationFormat->getLicenceExpirace()), $this->datetimeToDB($publicationFormat->getLicenceVznik()), $this->datetimeToDB($publicationFormat->getDatumVydani()),$this->datetimeToDB($publicationFormat->getPovVytiskyDosly()),$this->datetimeToDB($publicationFormat->getPovVytiskyOdesly())),
                        array(
				(int) $publicationFormat->getPocetStran(),
                                $publicationFormat->getTypLicencePrepinac(),
                                $publicationFormat->getLicenceTyp(),
                                $publicationFormat->getLicenceDrzitel(),
                                (int) $publicationFormat->getNaklad(),
                                $publicationFormat->getPoradiVydani(),
                                $publicationFormat->getTiskarna(),
                                (int) $publicationFormat->getId(),
			)
                               
		);

		$this->updateLocaleFields($publicationFormat);
	}

	/**
	 * Get a list of fields for which we store localized data
	 * @return array
	 */
	function getLocaleFieldNames() {
		return array('name', 'calameoHash', 'bibliografickaCitace', 'urlStazeni');
	}

	/**
	 * @see DAO::getAdditionalFieldNames()
	 */
	function getAdditionalFieldNames() {
		$additionalFields = parent::getAdditionalFieldNames();
		$additionalFields[] = 'pub-id::doi';
		$additionalFields[] = 'doiSuffix';
		return $additionalFields;
	}

	/**
	 * Delete the public IDs of all publication formats in a press.
	 * @param $pressId int
	 * @param $pubIdType string One of the NLM pub-id-type values or
	 * 'other::something' if not part of the official NLM list
	 * (see <http://dtd.nlm.nih.gov/publishing/tag-library/n-4zh0.html>).
	 */
	function deleteAllPubIds($pressId, $pubIdType) {
		$pressId = (int) $pressId;
		$settingName = 'pub-id::'.$pubIdType;

		$formats = $this->getByPressId($pressId);
		while ($format = $formats->next()) {
			$this->update(
				'DELETE FROM publication_format_settings WHERE setting_name = ? AND publication_format_id = ?',
				array(
					$settingName,
					(int)$format->getId()
				)
			);
		}
		$this->flushCache();
	}

	/**
	 * Change the public ID of a format.
	 * @param $formatId int
	 * @param $pubIdType string One of the NLM pub-id-type values or
	 * 'other::something' if not part of the official NLM list
	 * (see <http://dtd.nlm.nih.gov/publishing/tag-library/n-4zh0.html>).
	 * @param $pubId string
	 */
	function changePubId($formatId, $pubIdType, $pubId) {
		$publicationFormat = $this->getById($formatId);
		$publicationFormat->setData('pub-id::'.$pubIdType, $pubId);
		$this->updateObject($publicationFormat);
	}

	/**
	 * Checks if public identifier exists (other than for the specified
	 * publication format ID, which is treated as an exception).
	 * @param $pubIdType string One of the NLM pub-id-type values or
	 * 'other::something' if not part of the official NLM list
	 * (see <http://dtd.nlm.nih.gov/publishing/tag-library/n-4zh0.html>).
	 * @param $pubId string
	 * @param $formatId int An ID to be excluded from the search.
	 * @param $pressId int
	 * @return boolean
	 */
	function pubIdExists($pubIdType, $pubId, $formatId, $pressId) {
		$result = $this->retrieve(
			'SELECT COUNT(*)
			FROM publication_format_settings pft
			INNER JOIN publication_formats p ON pft.publication_format_id = p.publication_format_id
			INNER JOIN submissions s ON p.submission_id = s.submission_id
			WHERE pft.setting_name = ? and pft.setting_value = ? and p.submission_id <> ? AND s.context_id = ?',
			array(
				'pub-id::'.$pubIdType,
				$pubId,
				(int) $formatId,
				(int) $pressId
			)
		);
		$returner = $result->fields[0] ? true : false;
		$result->Close();
		return $returner;
	}
}

?>
