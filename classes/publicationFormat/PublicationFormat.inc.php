<?php

/**
 * @file classes/publicationFormat/PublicationFormat.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PublicationFormat
 * @ingroup publicationFormat
 * @see PublicationFormatDAO
 *
 * @brief A publication format for a monograph.
 */

import('lib.pkp.classes.submission.Representation');

class PublicationFormat extends Representation {
	/**
	 * Constructor.
	 */
	function PublicationFormat() {
		parent::Representation();
	}

	/**
	 * get approved flag
	 * @return int
	 */
	function getIsApproved() {
		return $this->getData('approved');
	}

	/**
	 * set approved flag
	 * @param $approved int
	 */
	function setIsApproved($approved) {
		return $this->setData('approved', $approved);
	}

	/**
	 * get physical format flag
	 * @return bool
	 */
	function getPhysicalFormat() {
		return $this->getData('physicalFormat');
	}

	/**
	 * set physical format flag
	 * @param $physicalFormat bool
	 */
	function setPhysicalFormat($physicalFormat) {
		return $this->setData('physicalFormat', $physicalFormat);
	}

	/**
	 * Get the ONIX code for this publication format
	 * @return string
	 */
	function getEntryKey() {
		return $this->getData('entryKey');
	}

	/**
	 * Sets the ONIX code for the publication format
	 * @param string $code
	 */
	function setEntryKey($entryKey) {
		$this->setData('entryKey', $entryKey);
	}

	/**
	 * Get the human readable name for this ONIX code
	 * @return string
	 */
	function getNameForONIXCode() {
		$onixCodelistItemDao = DAORegistry::getDAO('ONIXCodelistItemDAO');
		$codes = $onixCodelistItemDao->getCodes('List7'); // List7 is for object formats
		return $codes[$this->getEntryKey()];
	}

	/**
	 * Set monograph id.
	 * @param $monographId int
	 */
	function setMonographId($monographId) {
		return parent::setSubmissionId($monographId);
	}

	/**
	 * Get monograph id
	 * @return int
	 */
	function getMonographId() {
		return parent::getSubmissionId();
	}

	/**
	 * Get the country of manufacture code that this format was manufactured in.
	 * @return string
	 */
	function getCountryManufactureCode() {
		return $this->getData('countryManufactureCode');
	}

	/**
	 * Set the country of manufacture code for a publication format.
	 * @param string $countryManufactureCode
	 */
	function setCountryManufactureCode($countryManufactureCode) {
		return $this->setData('countryManufactureCode', $countryManufactureCode);
	}

	/**
	 * Get the product availability code (ONIX value) for this format (List65).
	 * @return string
	 */
	function getProductAvailabilityCode() {
		return $this->getData('productAvailabilityCode');
	}

	/**
	 * Set the product availability code (ONIX value) for a publication format.
	 * @param string $productAvailabilityCode
	 */
	function setProductAvailabilityCode($productAvailabilityCode) {
		return $this->setData('productAvailabilityCode', $productAvailabilityCode);
	}

	/**
	 * Get the height of the monograph format.
	 * @return string
	 */
	function getHeight() {
		return $this->getData('height');
	}

	/**
	 * Set the height of a publication format.
	 * @param string $height
	 */
	function setHeight($height) {
		return $this->setData('height', $height);
	}

	/**
	 * Get the height unit (ONIX value) of the monograph format (List50).
	 * @return string
	 */
	function getHeightUnitCode() {
		return $this->getData('heightUnitCode');
	}

	/**
	 * Set the height unit (ONIX value) for a publication format.
	 * @param string $heightUnitCode
	 */
	function setHeightUnitCode($heightUnitCode) {
		return $this->setData('heightUnitCode', $heightUnitCode);
	}

	/**
	 * Get the width of the monograph format.
	 * @return string
	 */
	function getWidth() {
		return $this->getData('width');
	}

	/**
	 * Set the width of a publication format.
	 * @param string $width
	 */
	function setWidth($width) {
		return $this->setData('width', $width);
	}

	/**
	 * Get the width unit code (ONIX value) of the monograph format (List50).
	 * @return string
	 */
	function getWidthUnitCode() {
		return $this->getData('widthUnitCode');
	}

	/**
	 * Set the width unit code (ONIX value) for a publication format.
	 * @param string $widthUnitCode
	 */
	function setWidthUnitCode($widthUnitCode) {
		return $this->setData('widthUnitCode', $widthUnitCode);
	}

	/**
	 * Get the thickness of the monograph format.
	 * @return string
	 */
	function getThickness() {
		return $this->getData('thickness');
	}

	/**
	 * Set the thickness of a publication format.
	 * @param string $thinkness
	 */
	function setThickness($thickness) {
		return $this->setData('thickness', $thickness);
	}

	/**
	 * Get the thickness unit code (ONIX value) of the monograph format (List50).
	 * @return string
	 */
	function getThicknessUnitCode() {
		return $this->getData('thicknessUnitCode');
	}

	/**
	 * Set the thickness unit code (ONIX value) for a publication format.
	 * @param string $thicknessUnitCode
	 */
	function setThicknessUnitCode($thicknessUnitCode) {
		return $this->setData('thicknessUnitCode', $thicknessUnitCode);
	}

	/**
	 * Get the weight of the monograph format.
	 * @return string
	 */
	function getWeight() {
		return $this->getData('weight');
	}

	/**
	 * Set the weight for a publication format.
	 * @param string $weight
	 */
	function setWeight($weight) {
		return $this->setData('weight', $weight);
	}

	/**
	 * Get the weight unit code (ONIX value) of the monograph format (List95).
	 * @return string
	 */
	function getWeightUnitCode() {
		return $this->getData('weightUnitCode');
	}

	/**
	 * Set the weight unit code (ONIX value) for a publication format.
	 * @param string $weightUnitCode
	 */
	function setWeightUnitCode($weightUnitCode) {
		return $this->setData('weightUnitCode', $weightUnitCode);
	}

	/**
	 * Get the file size of the monograph format.
	 * @return string
	 */
	function getFileSize() {
		return $this->getData('fileSize');
	}

	/**
	 * Get the file size of the monograph format based on calculated sizes
	 * for approved proof files.
	 * @return string
	 */
	function getCalculatedFileSize() {
		$fileSize = 0;
		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO');
		import('classes.monograph.MonographFile'); // File constants
		$stageMonographFiles = $submissionFileDao->getLatestRevisionsByAssocId(
			ASSOC_TYPE_PUBLICATION_FORMAT, $this->getId(),
			$this->getMonographId(), SUBMISSION_FILE_PROOF
		);

		foreach ($stageMonographFiles as $monographFile) {
			if ($monographFile->getViewable()) {
				$fileSize += (int) $monographFile->getFileSize();
			}
		}

		return sprintf('%d.3', $fileSize/(1024*1024)); // bytes to Mb
	}

	/**
	 * Set the file size of the publication format.
	 * @param string $fileSize
	 */
	function setFileSize($fileSize) {
		return $this->setData('fileSize', $fileSize);
	}

	/**
	 * Get the SalesRights objects for this format.
	 * @return DAOResultFactory SalesRights
	 */
	function getSalesRights() {
		$salesRightsDao = DAORegistry::getDAO('SalesRightsDAO');
		return $salesRightsDao->getByPublicationFormatId($this->getId());
	}

	/**
	 * Get the IdentificationCode objects for this format.
	 * @return DAOResultFactory IdentificationCode
	 */
	function getIdentificationCodes() {
		$identificationCodeDao = DAORegistry::getDAO('IdentificationCodeDAO');
		return $identificationCodeDao->getByPublicationFormatId($this->getId());
	}

	/**
	 * Get the PublicationDate objects for this format.
	 * @return Array PublicationDate
	 */
	function getPublicationDates() {
		$publicationDateDao = DAORegistry::getDAO('PublicationDateDAO');
		return $publicationDateDao->getByPublicationFormatId($this->getId());
	}

	/**
	 * Get the Market objects for this format.
	 * @return Array Market
	 */
	function getMarkets() {
		$marketDao = DAORegistry::getDAO('MarketDAO');
		return $marketDao->getByPublicationFormatId($this->getId());
	}

	/**
	 * Get the product form detail code (ONIX value) for the format used for this format (List151).
	 * @return string
	 */
	function getProductFormDetailCode() {
		return $this->getData('productFormDetailCode');
	}

	/**
	 * Set the product form detail code (ONIX value) for a publication format.
	 * @param string $productFormDetailCode
	 */
	function setProductFormDetailCode($productFormDetailCode) {
		return $this->setData('productFormDetailCode', $productFormDetailCode);
	}

	/**
	 * Get the product composition code (ONIX value) used for this format (List2).
	 * @return string
	 */
	function getProductCompositionCode() {
		return $this->getData('productCompositionCode');
	}

	/**
	 * Set the product composition code (ONIX value) for a publication format.
	 * @param string $productCompositionCode
	 */
	function setProductCompositionCode($productCompositionCode) {
		return $this->setData('productCompositionCode', $productCompositionCode);
	}

	/**
	 * Get the page count for the front matter section of a publication format.
	 * @return string
	 */
	function getFrontMatter() {
		return $this->getData('frontMatter');
	}

	/**
	 * Set the front matter page count for a publication format.
	 * @param string $frontMatter
	 */
	function setFrontMatter($frontMatter) {
		return $this->setData('frontMatter', $frontMatter);
	}

	/**
	 * Get the page count for the back matter section of a publication format.
	 * @return string
	 */
	function getBackMatter() {
		return $this->getData('backMatter');
	}

	/**
	 * Set the back matter page count for a publication format.
	 * @param string $backMatter
	 */
	function setBackMatter($backMatter) {
		return $this->setData('backMatter', $backMatter);
	}

	/**
	 * Get the imprint brand name for a publication format.
	 * @return string
	 */
	function getImprint() {
		return $this->getData('imprint');
	}

	/**
	 * Set the imprint brand name for a publication format.
	 * @param string $imprint
	 */
	function setImprint($imprint) {
		return $this->setData('imprint', $imprint);
	}

	/**
	 * Get the technical protection code for a digital publication format (List144).
	 * @return string
	 */
	function getTechnicalProtectionCode() {
		return $this->getData('technicalProtectionCode');
	}

	/**
	 * Set the technical protection code for a publication format.
	 * @param string $technicalProtectionCode
	 */
	function setTechnicalProtectionCode($technicalProtectionCode) {
		return $this->setData('technicalProtectionCode', $technicalProtectionCode);
	}

	/**
	 * Get the return code for a physical publication format (List66).
	 * @return string
	 */
	function getReturnableIndicatorCode() {
		return $this->getData('returnableIndicatorCode');
	}

	/**
	 * Set the return code for a publication format.
	 * @param string $returnableIndicatorCode
	 */
	function setReturnableIndicatorCode($returnableIndicatorCode) {
		return $this->setData('returnableIndicatorCode', $returnableIndicatorCode);
	}

	/**
	 * Get whether or not this format is available in the catalog.
	 * @return int
	 */
	function getIsAvailable() {
		return $this->getData('isAvailable');
	}

	/**
	 * Set whether or not this format is available in the catalog.
	 * @param $isAvailable int
	 */
	function setIsAvailable($isAvailable) {
		return $this->setData('isAvailable', $isAvailable);
	}

	/**
	 * Check to see if this publication format has everything it needs for valid ONIX export
	 * Ideally, do this with a DOMDocument schema validation. We do it this way for now because
	 * of a potential issue with libxml2:  http://stackoverflow.com/questions/6284827
	 *
	 * @return String
	 */
	function hasNeededONIXFields() {
		// ONIX requires one identification code and a market region with a defined price.
		$assignedIdentificationCodes = $this->getIdentificationCodes();
		$assignedMarkets = $this->getMarkets();

		$errors = array();
		if ($assignedMarkets->wasEmpty()) {
			$errors[] = 'monograph.publicationFormat.noMarketsAssigned';
		}

		if ($assignedIdentificationCodes->wasEmpty()) {
			$errors[] = 'monograph.publicationFormat.noCodesAssigned';
		}

		return array_merge($errors, $this->_checkRequiredFieldsAssigned());
	}

	/**
	 * Internal function to provide some validation for the ONIX export by
	 * checking the required ONIX fields associated with this format.
	 * @return array
	 */
	function _checkRequiredFieldsAssigned() {
		$requiredFields = array('productCompositionCode' => 'grid.catalogEntry.codeRequired', 'productAvailabilityCode' => 'grid.catalogEntry.productAvailabilityRequired');

		$errors = array();

		foreach ($requiredFields as $field => $errorCode) {
			if ($this->getData($field) == '') {
				$errors[] = $errorCode;
			}
		}

		if (!$this->getPhysicalFormat()) {
			if (!$this->getFileSize() && !$this->getCalculatedFileSize()) {
				$errors['fileSize'] = 'grid.catalogEntry.fileSizeRequired';
			}
		}

		return $errors;
	}

	/**
	 * Get the press id from the monograph assigned to this publication format.
	 * @return int
	 */
	function getPressId() {
		return $this->getContextId();
	}
        
        
        /***********
         * MUNIPRESS
         **************/
        
        /**
	 * Vrací číslo přepínače typu licence (0-Open acces, 1-Munipress, 2-jiné)
	 * @return int
	 */
	function getTypLicencePrepinac() {
		return $this->getData('licenceTypPrepinac');
        }

	/**
	 * Nastavuje číslo přepínače typu licence
	 * @param $licenceTypPrepinac int
	 */
	function setTypLicencePrepinac($licenceTypPrepinac) {
		return $this->setData('licenceTypPrepinac', $licenceTypPrepinac);
	}
        
	/**
	 * Get typ licence.
	 * @return string
	 */
	function getLicenceTyp() {
		return $this->getData('licenceTyp');
	}

	/**
	 * Set typ licence.
	 * @param $licenceTyp string
	 */
	function setLicenceTyp($licenceTyp) {
		return $this->setData('licenceTyp', $licenceTyp);
	}

	/**
	 * Get držitele licence.
	 * @return string
	 */
	function getLicenceDrzitel() {
		return $this->getData('licenceDrzitel');
	}

	/**
	 * Set držitele licence.
	 * @param $licenceDrzitel string
	 */
	function setLicenceDrzitel($licenceDrzitel) {
		return $this->setData('licenceDrzitel', $licenceDrzitel);
	}

	/**
	 * Get datum expirace.
	 * @return date
	 */
	function getLicenceExpirace() {
            return $this->getData('licenceExpirace');
	}

	/**
	 * Set datum expirace.
	 * @param $licenceExpirace date
	 */
	function setLicenceExpirace($licenceExpirace) {
		return $this->setData('licenceExpirace', $licenceExpirace);
	}
        
        /**
	 * Get datum vzniku licence.
	 * @return date
	 */
	function getLicenceVznik() {
		return $this->getData('licenceVznik');
	}

	/**
	 * Set datum vzniku licence.
	 * @param $licenceVznik date
	 */
	function setLicenceVznik($licenceVznik) {
		return $this->setData('licenceVznik', $licenceVznik);
	}
        
        /**
	 * Vrací naklad
	 * @return int
	 */
	function getNaklad() {
		return $this->getData('naklad');
        }

	/**
	 * Nastavuje naklad
	 * @param $naklad int
	 */
	function setNaklad($naklad) {
		return $this->setData('naklad', $naklad);
	}
        
        /**
	 * Vrací pocet stran 
	 * @return int
	 */
	function getPocetStran() {
		return $this->getData('pocetStran');
        }

	/**
	 * Nastavuje pocet stran
	 * @param $pocetStran int
	 */
	function setPocetStran($pocetStran) {
		return $this->setData('pocetStran', $pocetStran);
	}
        
         /**
	 * Vrací poradi vydani
	 * @return string
	 */
	function getPoradiVydani() {
		return $this->getData('poradiVydani');
        }

	/**
	 * Nastavuje poradi vydani
	 * @param $poradiVydani string
	 */
	function setPoradiVydani($poradiVydani) {
		return $this->setData('poradiVydani', $poradiVydani);
	}
        
        /**
	 * Vrací poradi vydani
	 * @return string
	 */
	function getDatumVydani() {
		return $this->getData('datumVydani');
        }

	/**
	 * Nastavuje poradi vydani
	 * @param $datumVydani string
	 */
	function setDatumVydani($datumVydani) {
		return $this->setData('datumVydani', $datumVydani);
	} 

        /**
	 * Vraci lokalizovanou bibliografickou citaci
	 * @return string
	 */
	function getLocalizedBibliografickaCitace() {
		return $this->getLocalizedData('bibliografickaCitace');
	}

	/**
	 * Vrací bibliografickou citaci
	 * @param $locale
	 * @return string
	 */
	function getBibliografickaCitace($locale) {
		return $this->getData('bibliografickaCitace', $locale);
	}

	/**
	 * Nastavuje bibliografickou citaci
	 * @param $bibliografickaCitace string
	 * @param $locale
	 */
	function setBibliografickaCitace($bibliografickaCitace, $locale) {
		return $this->setData('bibliografickaCitace', $bibliografickaCitace, $locale);
	}
        
        /**
	 * Vraci lokalizovaný odkaz ke stazeni publikace
	 * @return string
	 */
	function getLocalizedUrlStazeni() {
		return $this->getLocalizedData('urlStazeni');
	}

	/**
	 * Vrací odkaz ke stazeni publikace
	 * @param $locale
	 * @return string
	 */
	function getUrlStazeni($locale) {
		return $this->getData('urlStazeni', $locale);
	}

	/**
	 * Nastavuje odkaz ke staženi publikace
	 * @param $urlStazeni string
	 * @param $locale
	 */
	function setUrlStazeni($urlStazeni, $locale) {
		return $this->setData('urlStazeni', $urlStazeni, $locale);
	}
        
        /**
	 * Vraci lokalizovaný odkaz na youtube.com
	 * @return string
	 */
	function getLocalizedUrlYtb() {
		return $this->getLocalizedData('urlYtb');
	}

	/**
	 * Vrací odkaz ke stazeni publikace
	 * @param $locale
	 * @return string
	 */
	function getUrlYtb($locale) {
		return $this->getData('urlYtb', $locale);
	}

	/**
	 * Nastavuje odkaz na youtube.com
	 * @param urlYtb string
	 * @param $locale
	 */
	function setUrlYtb($urlYtb, $locale) {
		return $this->setData('urlYtb', $urlYtb, $locale);
	}
        
        /**
	 * Get tiskarnu
	 * @return text
	 */
	function getTiskarna() {
		return $this->getData('tiskarna');
	}

	/**
	 * Set tiskarnu.
	 * @param $tiskarna text
	 */
	function setTiskarna($tiskarna) {
		return $this->setData('tiskarna', $tiskarna);
	}

        /**
	 * Get datum kdy dosly povinne vytisky.
	 * @return date
	 */
	function getPovVytiskyDosly() {
		return $this->getData('povVytiskyDosly');
	}

	/**
	 * Set datum kdy dosly povinne vytisky.
	 * @param $povVytiskyDosly date
	 */
	function setPovVytiskyDosly($povVytiskyDosly) {
		return $this->setData('povVytiskyDosly', $povVytiskyDosly);
	}
        
        /**
	 * Get datum kdy odesly povinne vytisky..
	 * @return date
	 */
	function getPovVytiskyOdesly() {
		return $this->getData('povVytiskyOdesly');
	}

	/**
	 * Set datum kdy odesly povinne vytisky.
	 * @param $povVytiskyOdesly date
	 */
	function setPovVytiskyOdesly($povVytiskyOdesly) {
		return $this->setData('povVytiskyOdesly', $povVytiskyOdesly);
	}
        
}

?>
