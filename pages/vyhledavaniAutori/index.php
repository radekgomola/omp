<?php

/**
 * @defgroup pages_vyhledavaniAutori stránka pro vyhledávání autorů
 */

/**
 * @file pages/about/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_about
 * @brief Handle requests for about the press functions.
 *
 */

switch ($op) {
	case 'index':
        case 'seznam_publikaci':
		define('HANDLER_CLASS', 'VyhledavaniAutoriHandler');
		import('pages.vyhledavaniAutori.VyhledavaniAutoriHandler');
		break;
}

?>
