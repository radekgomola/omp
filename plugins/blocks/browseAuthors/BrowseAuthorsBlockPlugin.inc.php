<?php

/**
 * @file plugins/blocks/browseAuthors/BrowseAuthorsBlockPlugin.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class BrowseAuthorsBlockPlugin
 * @ingroup plugins_blocks_browseAuthors
 *
 * @brief Class for browse block plugin - part authors
 */

import('lib.pkp.classes.plugins.BlockPlugin');

class BrowseAuthorsBlockPlugin extends BlockPlugin {
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
		return __('plugins.block.browseAuthors.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.browseAuthors.description');
	}
}

?>
