<?php

/**
 * @file plugins/blocks/browseMunispace/BrowseMunispaceBlockPlugin.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class BrowseBlockPlugin
 * @ingroup plugins_blocks_browse
 *
 * @brief Class for browse block plugin
 */

import('lib.pkp.classes.plugins.BlockPlugin');

class BrowseMunispaceBlockPlugin extends BlockPlugin {
	/**
	 * Install default settings on press creation.
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
		return __('plugins.block.browseMunispace.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.browseMunispace.description');
	}

	/**
	 * Get the HTML contents of the browse block.
	 * @param $templateMgr PKPTemplateManager
	 * @return string
	 */
	function getContents($templateMgr, $request = null) {
		$press = $request->getPress();
                
                $categoryDao = DAORegistry::getDAO('CategoryDAO');
		$categories = $categoryDao->getByParentId(26, $press->getId());
                
                $templateMgr->assign('categoriesMunispace', $categories);

		if($request->getUserVar('type') == 'category') {
                    $templateMgr->assign('browseBlockSelectedCategoryMunispace', $request->getUserVar('path'));
		}

		return parent::getContents($templateMgr);
	}
}

?>
