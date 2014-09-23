<?php

/**
 * @defgroup plugins_blocks_browse Browse Vypsane block plugin
 */

/**
 * @file plugins/blocks/browseVypsane/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_browseVypsane
 * @brief Wrapper for browse block plugin.
 *
 */


require_once('BrowseVypsaneBlockPlugin.inc.php');

return new BrowseVypsaneBlockPlugin();

?>
