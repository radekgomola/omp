<?php

/**
 * @defgroup plugins_blocks_browse Browse Munispace block plugin
 */

/**
 * @file plugins/blocks/browseMunispace/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_browseMunispace
 * @brief Wrapper for browse block plugin.
 *
 */


require_once('BrowseMunispaceBlockPlugin.inc.php');

return new BrowseMunispaceBlockPlugin();

?>
