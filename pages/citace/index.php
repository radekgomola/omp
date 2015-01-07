<?php

/**
 * @defgroup pages_rt
 */
 
/**
 * @file pages/citace/index.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_citace
 * @brief Handle citace requests. 
 *
 */

switch ($op) {
	case 'captureCite':
		define('HANDLER_CLASS', 'CitaceHandler');
		import('pages.citace.CitaceHandler');
		break;
}

?>
