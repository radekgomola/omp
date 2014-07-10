<?php

/**
 * @defgroup plugins_blocks_bannerySite Bannery block plugin
 */
 
/**
 * @file plugins/blocks/bannerySite/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_bannerySite
 * @brief Wrapper for bannerySite block plugin.
 *
 */

require_once('BannerySiteBlockPlugin.inc.php');

return new BannerySiteBlockPlugin();

?> 
