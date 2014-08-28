<?php

/**
 * @defgroup pages_about
 */
 
/**
 * @file pages/seznamAutoru/index.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_seznamAutoru
 * @brief Handle requests for vypisAutoru functions. 
 *
 */

switch($op) {
	case 'vypisAutoruBio':
	case 'index':
		define('HANDLER_CLASS', 'SeznamAutoruHandler');
		import('pages.seznamAutoru.SeznamAutoruHandler');
		break;
}

?>
