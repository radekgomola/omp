<?php

/**
 * @defgroup pages_header Header page
 */

/**
 * @file pages/doiCrossref/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_forAuthors
 * @brief Handle site forAuthors page requests.
 *
 */


switch ($op) {
	case 'index':
		define('HANDLER_CLASS', 'DoiCrossrefHandler');
		import('pages.doiCrossref.DoiCrossrefHandler');
		break;
}

?>
