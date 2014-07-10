<?php

/**
 * @file plugins/blocks/distribuce/DistribuceBlockPlugin.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class DistribuceBlockPlugin
 * @ingroup plugins_blocks_distribuce
 *
 * @brief Class for distribuce block plugin
 */

import('lib.pkp.classes.plugins.BlockPlugin');

class DistribuceBlockPlugin extends BlockPlugin {
	/**
	 * Install default settings on journal creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('plugins.block.distribuce.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.distribuce.description');
	}
        
        
	/**
	 * Get the HTML contents for this block.
	 * @param $templateMgr object
	 * @return $string
	 */
//	function getContents(&$templateMgr, $request = null) {
//		$press = $request->getPress();
//		if (!$press) return '';
//
//		$templateMgr->assign('forReaders', $press->getLocalizedSetting('readerInformation'));
//		$templateMgr->assign('forAuthors', $press->getLocalizedSetting('authorInformation'));
//		$templateMgr->assign('forLibrarians', $press->getLocalizedSetting('informaceDistributori'));
//                $templateMgr->assign('proDistributory', $press->getLocalizedSetting('informaceDistributori'));
//		return parent::getContents($templateMgr);
//	}
}

?>
