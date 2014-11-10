<?php

/**
 * @defgroup pages_catalog Catalog page
 */

/**
 * @file pages/photoGallery/index.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_photoGallery
 */

switch ($op) {
	case 'index':
	case 'gallery':
		define('HANDLER_CLASS', 'PhotoGalleryHandler');
		import('pages.photoGallery.PhotoGalleryHandler');
		break;
}

?>
