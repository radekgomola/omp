<?php

/**
 * @file controllers/tab/catalogEntry/form/CatalogEntryFormatMetadataForm.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CatalogEntryFormatMetadataForm
 * @ingroup controllers_tab_catalogEntry_form
 *
 * @brief Parent class for forms used by the various publication formats.
 */

import('lib.pkp.classes.form.Form');
import('classes.plugins.PubIdPluginHelper');

class CatalogEntryFormatMetadataForm extends Form {

	/** The monograph used to show metadata information **/
	var $_monograph;

	/** The current stage id **/
	var $_stageId;

	/** The publication format id **/
	var $_publicationFormatId;

	/** is this a physical, non-digital format? **/
	var $_isPhysicalFormat;

	/**
	 * Parameters to configure the form template.
	 */
	var $_formParams;

	/**
	 * Constructor.
	 * @param $monograph Monograph
	 * @param $publicationFormat integer
	 * @param $isPhysicalFormat integer
	 * @param $stageId integer
	 * @param $formParams array
	 */
	function CatalogEntryFormatMetadataForm($monographId, $publicationFormatId, $isPhysicalFormat = true, $stageId = null, $formParams = null) {
		parent::Form('controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl');
		$monographDao = DAORegistry::getDAO('MonographDAO');
		$this->_monograph = $monographDao->getById($monographId);

		$this->_pubIdPluginHelper = new PubIdPluginHelper();

		$this->_stageId = $stageId;
		$this->_publicationFormatId = $publicationFormatId;
		$this->_isPhysicalFormat = $isPhysicalFormat;
		$this->_formParams = $formParams;

		$this->addCheck(new FormValidator($this, 'productAvailabilityCode', 'required', 'grid.catalogEntry.productAvailabilityRequired'));
		$this->addCheck(new FormValidatorRegExp($this, 'directSalesPrice', 'optional', 'grid.catalogEntry.validPriceRequired', '/^[0-9]*(\.[0-9]+)?$/'));
		//$this->addCheck(new FormValidator($this, 'productCompositionCode', 'required', 'grid.catalogEntry.productCompositionRequired'));
		$this->addCheck(new FormValidatorPost($this));
	}

	/**
	 * Fetch the HTML contents of the form.
	 * @param $request PKPRequest
	 * return string
	 */
	function fetch($request) {
		$monograph = $this->getMonograph();
		$press = $request->getPress();

		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('submissionId', $monograph->getId());
		$templateMgr->assign('publicationFormatId', (int) $this->getPublicationFormatId());
		$templateMgr->assign('isPhysicalFormat', (bool) $this->getPhysicalFormat()); // included to load format-specific template
		$templateMgr->assign('stageId', $this->getStageId());
		$templateMgr->assign('formParams', $this->getFormParams());
		$templateMgr->assign('submissionApproved', $monograph->getDatePublished());

		$onixCodelistItemDao = DAORegistry::getDAO('ONIXCodelistItemDAO');

		// Check if e-commerce is available
		import('classes.payment.omp.OMPPaymentManager');
		$ompPaymentManager = new OMPPaymentManager($request);
		if ($ompPaymentManager->isConfigured()) {
			$templateMgr->assign('paymentConfigured', true);
			$templateMgr->assign('currency', $press->getSetting('currency'));
		}

		// get the lists associated with the select elements on these publication format forms.
		$codes = array(
			'productCompositionCodes' => 'List2', // single item, multiple item, trade-only, etc
			'measurementUnitCodes' => 'List50', // grams, inches, millimeters
			'weightUnitCodes' => 'List95', // pounds, grams, ounces
			'measurementTypeCodes' => 'List48', // height, width, depth
			'productFormDetailCodes' => 'List175', // refinement of product form (SACD, Mass market (rack) paperback, etc)
			'productAvailabilityCodes' => 'List65', // Available, In Stock, Print On Demand, Not Yet Available, etc
			'technicalProtectionCodes' => 'List144', // None, DRM, Apple DRM, etc
			'returnableIndicatorCodes' => 'List66', // No, not returnable, Yes, full copies only, (required for physical items only)
			'countriesIncludedCodes' => 'List91', // country region codes
		);

		foreach ($codes as $templateVarName => $list) {
			$templateMgr->assign_by_ref($templateVarName, $onixCodelistItemDao->getCodes($list));
		}

		// consider public identifiers
		$pubIdPlugins = PluginRegistry::loadCategory('pubIds', true);
		$templateMgr->assign('pubIdPlugins', $pubIdPlugins);

		// Notification options.
		$notificationRequestOptions = array(
			NOTIFICATION_LEVEL_NORMAL => array(
				NOTIFICATION_TYPE_CONFIGURE_PAYMENT_METHOD => array(ASSOC_TYPE_PRESS, $press->getId()),
				NOTIFICATION_TYPE_FORMAT_NEEDS_APPROVED_SUBMISSION => array(ASSOC_TYPE_MONOGRAPH, $monograph->getId())),
			NOTIFICATION_LEVEL_TRIVIAL => array()
		);

		$templateMgr->assign('notificationRequestOptions', $notificationRequestOptions);

		return parent::fetch($request);
	}

	/**
	 * Initialize form data for an instance of this form.
	 */
	function initData() {
		AppLocale::requireComponents(
			LOCALE_COMPONENT_APP_COMMON,
			LOCALE_COMPONENT_PKP_SUBMISSION,
			LOCALE_COMPONENT_APP_SUBMISSION
		);

		$publicationFormatDao = DAORegistry::getDAO('PublicationFormatDAO');
		$monograph = $this->getMonograph();
		$publicationFormat = $publicationFormatDao->getById($this->getPublicationFormatId(), $monograph->getId());
		assert($publicationFormat);

		$this->_data = array(
			'fileSize' => (boolean) $publicationFormat->getFileSize() ? $publicationFormat->getFileSize() : $publicationFormat->getCalculatedFileSize(),
			'override' => (boolean) $publicationFormat->getData('fileSize') ? true : false,
			'frontMatter' => $publicationFormat->getFrontMatter(),
			'backMatter' => $publicationFormat->getBackMatter(),
			'height' => $publicationFormat->getHeight(),
			'heightUnitCode' => $publicationFormat->getHeightUnitCode() != '' ? $publicationFormat->getHeightUnitCode() : 'mm',
			'width' => $publicationFormat->getWidth(),
			'widthUnitCode' => $publicationFormat->getWidthUnitCode() != '' ? $publicationFormat->getWidthUnitCode() : 'mm',
			'thickness' => $publicationFormat->getThickness(),
			'thicknessUnitCode' => $publicationFormat->getThicknessUnitCode() != '' ? $publicationFormat->getThicknessUnitCode() : 'mm',
			'weight' => $publicationFormat->getWeight(),
			'weightUnitCode' => $publicationFormat->getWeightUnitCode() != '' ? $publicationFormat->getWeightUnitCode() : 'gr',
			'productCompositionCode' => $publicationFormat->getProductCompositionCode(),
			'productFormDetailCode' => $publicationFormat->getProductFormDetailCode(),
			'countryManufactureCode' => $publicationFormat->getCountryManufactureCode() != '' ? $publicationFormat->getCountryManufactureCode() : 'CA',
			'imprint' => $publicationFormat->getImprint(),
			'productAvailabilityCode' => $publicationFormat->getProductAvailabilityCode() != '' ? $publicationFormat->getProductAvailabilityCode() : '20',
			'technicalProtectionCode' => $publicationFormat->getTechnicalProtectionCode() != '' ? $publicationFormat->getTechnicalProtectionCode() : '00',
			'returnableIndicatorCode' => $publicationFormat->getReturnableIndicatorCode() != '' ? $publicationFormat->getReturnableIndicatorCode() : 'Y',
			'isApproved' => (bool) $publicationFormat->getIsApproved(),
			// the pubId plugin needs the format object.
			'publicationFormat' => $publicationFormat,
                        
                    
                        /*************
                         * MUNIPRESS
                         *************/
                        'pocetStran' => $publicationFormat->getPocetStran(),
                        'poradiVydani' => $publicationFormat->getPoradiVydani(),
                        'licenceTypPrepinac' => $publicationFormat->getTypLicencePrepinac(),                         
                        'licenceTyp' => $publicationFormat->getLicenceTyp(), 
                        'licenceDrzitel' => $publicationFormat->getLicenceDrzitel(),
                        'licenceExpirace' => $publicationFormat->getLicenceExpirace(), 
                        'licenceVznik' => $publicationFormat->getLicenceVznik(),
                        'datumVydani' => $publicationFormat->getDatumVydani(),
                        'naklad' => $publicationFormat->getNaklad(),
                        'bibliografickaCitace' => $publicationFormat->getBibliografickaCitace(null), // Localized
                        'calameoHash' => $publicationFormat->getCalameoHash(null)// Localized
		);

		// initialize the pubId fields.
		$pubIdPluginHelper = $this->_getPubIdPluginHelper();
		$pubIdPluginHelper->init($this, $publicationFormat);
	}

	/**
	 * Assign form data to user-submitted data.
	 */
	function readInputData() {
		$this->readUserVars(array(
			'directSalesPrice',
			'fileSize',
			'override',
			'frontMatter',
			'backMatter',
			'height',
			'heightUnitCode',
			'width',
			'widthUnitCode',
			'thickness',
			'thicknessUnitCode',
			'weight',
			'weightUnitCode',
			'productCompositionCode',
			'productFormDetailCode',
			'countryManufactureCode',
			'imprint',
			'productAvailabilityCode',
			'technicalProtectionCode',
			'returnableIndicatorCode',
			'isApproved',
                        'pocetStran',
                        'poradiVydani',
                        'licenceTypPrepinac',                         
                        'licenceTyp', 
                        'licenceDrzitel',
                        'licenceExpirace', 
                        'licenceVznik',
                        'datumVydani',
                        'naklad',
                        'bibliografickaCitace',
                        'calameoHash'
		));

		// consider the additional field names from the public identifer plugins
		$pubIdPluginHelper = $this->_getPubIdPluginHelper();
		$pubIdPluginHelper->readInputData($this);
	}

	/**
	 * Save the metadata and store the catalog data for this specific publication format.
	 */
	function execute($request) {
		parent::execute();

		$monograph = $this->getMonograph();
		$publicationFormatDao = DAORegistry::getDAO('PublicationFormatDAO');
		$publicationFormat = $publicationFormatDao->getById($this->getPublicationFormatId(), $monograph->getId());
		assert($publicationFormat);

		// Manage tombstones for the publication format.
		if ($publicationFormat->getIsApproved() && !$this->getData('isApproved')) {
			// Publication format was approved and its being disabled. Create
			// a tombstone for it.
			$press = $request->getPress();
			import('classes.publicationFormat.PublicationFormatTombstoneManager');
			$publicationFormatTombstoneMgr = new PublicationFormatTombstoneManager();
			$publicationFormatTombstoneMgr->insertTombstoneByPublicationFormat($publicationFormat, $press);

			// Log unpublish event.
			import('lib.pkp.classes.log.SubmissionLog');
			SubmissionLog::logEvent($request, $monograph, SUBMISSION_LOG_PUBLICATION_FORMAT_UNPUBLISH, 'submission.event.publicationFormatUnpublished', array('publicationFormatName' => $publicationFormat->getLocalizedName()));
		} elseif (!$publicationFormat->getIsApproved() && $this->getData('isApproved')) {
			// Wasn't approved and now it is. Delete tombstone.
			$tombstoneDao = DAORegistry::getDAO('DataObjectTombstoneDAO');
			$tombstoneDao->deleteByDataObjectId($publicationFormat->getId());

			// Log publish event.
			import('lib.pkp.classes.log.SubmissionLog');
			SubmissionLog::logEvent($request, $monograph, SUBMISSION_LOG_PUBLICATION_FORMAT_PUBLISH, 'submission.event.publicationFormatPublished', array('publicationFormatName' => $publicationFormat->getLocalizedName()));
		}

		// populate the published monograph with the cataloging metadata
		$publicationFormat->setFileSize($this->getData('override') ? $this->getData('fileSize'):null);
		$publicationFormat->setFrontMatter($this->getData('frontMatter'));
		$publicationFormat->setBackMatter($this->getData('backMatter'));
		$publicationFormat->setHeight($this->getData('height'));
		$publicationFormat->setHeightUnitCode($this->getData('heightUnitCode'));
		$publicationFormat->setWidth($this->getData('width'));
		$publicationFormat->setWidthUnitCode($this->getData('widthUnitCode'));
		$publicationFormat->setThickness($this->getData('thickness'));
		$publicationFormat->setThicknessUnitCode($this->getData('thicknessUnitCode'));
		$publicationFormat->setWeight($this->getData('weight'));
		$publicationFormat->setWeightUnitCode($this->getData('weightUnitCode'));
		$publicationFormat->setProductCompositionCode($this->getData('productCompositionCode'));
		$publicationFormat->setProductFormDetailCode($this->getData('productFormDetailCode'));
		$publicationFormat->setCountryManufactureCode($this->getData('countryManufactureCode'));
		$publicationFormat->setImprint($this->getData('imprint'));
		$publicationFormat->setProductAvailabilityCode($this->getData('productAvailabilityCode'));
		$publicationFormat->setTechnicalProtectionCode($this->getData('technicalProtectionCode'));
		$publicationFormat->setReturnableIndicatorCode($this->getData('returnableIndicatorCode'));
		$publicationFormat->setIsApproved($this->getData('isApproved')?true:false);

                /************
                 * MUNIPRESS
                 ************/
                
                $publicationFormat->setPocetStran($this->getData('pocetStran'));
                $publicationFormat->setPoradiVydani($this->getData('poradiVydani'));
                $publicationFormat->setTypLicencePrepinac($this->getData('licenceTypPrepinac'));
                $publicationFormat->setLicenceTyp($this->getData('licenceTyp'));
                $publicationFormat->setLicenceDrzitel($this->getData('licenceDrzitel'));
                $publicationFormat->setLicenceExpirace($this->getData('licenceExpirace'));
                $publicationFormat->setLicenceVznik($this->getData('licenceVznik'));
                $publicationFormat->setDatumVydani($this->getData('datumVydani'));
                $publicationFormat->setNaklad($this->getData('naklad'));
                $publicationFormat->setBibliografickaCitace($this->getData('bibliografickaCitace'), NULL);
                $publicationFormat->setCalameoHash($this->getData('calameoHash'), null);
                
                
                

		// consider the additional field names from the public identifer plugins
		$pubIdPluginHelper = $this->_getPubIdPluginHelper();
		$pubIdPluginHelper->execute($this, $publicationFormat);

		$publicationFormatDao->updateObject($publicationFormat);
	}

	//
	// Getters and Setters
	//
	/**
	 * Get the Monograph
	 * @return Monograph
	 */
	function &getMonograph() {
		return $this->_monograph;
	}

	/**
	 * Get the stage id
	 * @return int
	 */
	function getStageId() {
		return $this->_stageId;
	}

	/**
	 * Get physical format setting
	 * @return bool
	 */
	function getPhysicalFormat() {
		return $this->_isPhysicalFormat;
	}

	/**
	 * Get the publication format id
	 * @return int
	 */
	function getPublicationFormatId() {
		return $this->_publicationFormatId;
	}

	/**
	 * Get the extra form parameters.
	 */
	function getFormParams() {
		return $this->_formParams;
	}

	/**
	 * returns the PubIdPluginHelper associated with this form.
	 * @return PubIdPluginHelper
	 */
	function _getPubIdPluginHelper() {
		return $this->_pubIdPluginHelper;
	}
}

?>
