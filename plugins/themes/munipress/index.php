<?php

/**
 * @defgroup plugins_themes_munipress Munipress theme plugin
 */

/**
 * @file plugins/themes/munipress/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_munipress
 * @brief Wrapper for munipress theme plugin.
 *
 */

require_once('MunipressThemePlugin.inc.php');

return new MunipressThemePlugin();

?>
