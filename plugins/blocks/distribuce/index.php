<?php

/**
 * @defgroup plugins_blocks_distribuce Distribuce block plugin
 */
 
/**
 * @file plugins/blocks/distribuce/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_distribuce
 * @brief Wrapper for distribuce block plugin.
 *
 */

require_once('DistribuceBlockPlugin.inc.php');

return new DistribuceBlockPlugin();

?> 
