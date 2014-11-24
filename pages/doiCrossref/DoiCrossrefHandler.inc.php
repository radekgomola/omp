<?php

/**
 * @file pages/doiCrossref/DoiCrossrefHandler.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ForAuthorsHandler
 * @ingroup pages_forAuthors
 *
 * @brief Handle requests for forAuthors functions.
 */

import('classes.handler.Handler');

class DoiCrossrefHandler extends Handler{
	/**
	 * Constructor
	 */
	function DoiCrossrefHandler() {
		parent::Handler();
	}
        
        function index($args, $request) {
		$this->setupTemplate($request);

		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->display('doiCrossref/doi_crossref.tpl');
	}
}

?>
