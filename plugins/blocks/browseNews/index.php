<?php

/**
 * @defgroup plugins_blocks_browse Browse News block plugin
 */

/**
 * @file plugins/blocks/browseNews/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_browseNews
 * @brief Wrapper for browse block plugin - part news.
 *
 */


require_once('BrowseNewsBlockPlugin.inc.php');

return new BrowseNewsBlockPlugin();

?>
