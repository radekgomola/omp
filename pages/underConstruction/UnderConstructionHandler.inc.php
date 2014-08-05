<?php

/**
 * @file pages/about/AboutContextHandler.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AboutContextHandler
 * @ingroup pages_about
 *
 * @brief Handle requests for context-level about functions.
 */

import('classes.handler.Handler');

class UnderConstructionHandler extends Handler{
	/**
	 * Constructor
	 */
	function UnderConstructionHandler() {
		parent::Handler();
	}
        
        function index($args, $request) {
		$this->setupTemplate($request);

		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->display('underConstruction/under_construction.tpl');
	}
}

?>
