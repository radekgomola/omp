<?php

/**
 * @file plugins/blocks/kavarna/BannerySiteBlockPlugin.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class BanneryBlockPlugin
 * @ingroup plugins_blocks_bannerySite
 *
 * @brief Class for bannery
 */

import('lib.pkp.classes.plugins.BlockPlugin');

class KavarnaBlockPlugin extends BlockPlugin {
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
		return __('plugins.block.munispace.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.munispace.description');
	}
        
}

?>
