<?php

/**
 * @file plugins/blocks/browse/BrowseBlockPlugin.inc.php
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

class BrowseVypsaneBlockPlugin extends BlockPlugin {
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
		return __('plugins.block.browseVypsane.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.browseVypsane.description');
	}

	/**
	 * Get the HTML contents of the browse block.
	 * @param $templateMgr PKPTemplateManager
	 * @return string
	 */
	function getContents(&$templateMgr, $request = null) {
		$press = $request->getPress();
                $locale = AppLocale::getLocale();
		// Provide a list of series to browse
		$seriesDao = DAORegistry::getDAO('SeriesDAO');
		$series = $seriesDao->getByPressId($press->getId());
		$templateMgr->assign('browseSeries', $series);

		// Provide a list of categories to browse
		$categoryDao = DAORegistry::getDAO('CategoryDAO');
		$categories = $categoryDao->getByPressIdOrdered($press->getId(), null, $locale);
                
                $kategoriePole = array();
                while ($result = $categories->next()) {
                    $pocet = $categoryDao->getPublicationCoutByCategoryId($result->getId(), $press->getId());
//                    echo $result->getPath()." ".$pocet." <br/>";
                    if(!$result->getParentId() || $pocet > 0){
                        $kategoriePole[] = $result;
                    }
                }
		$templateMgr->assign('browseCategories', $kategoriePole);

		// If we're currently viewing a series or catalog, detect it
		// so that we can highlight the current selection in the
		// dropdown.

		switch ($request->getUserVar('type') ) {
			case 'category':
				$templateMgr->assign('browseBlockSelectedCategory', $request->getUserVar('path'));
				break;
			case 'series':
				$templateMgr->assign('browseBlockSelectedSeries', $request->getUserVar('path'));
				break;
		}

		return parent::getContents($templateMgr);
	}
}

?>
