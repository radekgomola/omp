<?php

/**
 * @defgroup plugins_blocks_browse Browse Authors block plugin
 */

/**
 * @file plugins/blocks/browseAuthors/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_browseAuthors
 * @brief Wrapper for browse block plugin - part Authors.
 *
 */


require_once('BrowseAuthorsBlockPlugin.inc.php');

return new BrowseAuthorsBlockPlugin();

?>
