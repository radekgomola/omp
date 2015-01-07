<?php

/**
 * @file pages/munispaceSignpost/MunispaceSignpostHandler.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class MunispaceSignpost
 * @ingroup pages_MunispaceSignpost
 *
 * @brief Handle requests for context-level about functions.
 */

import('classes.handler.Handler');

class MunispaceSignpostHandler extends Handler{
	/**
	 * Constructor
	 */
	function UnderConstructionHandler() {
		parent::Handler();
	}
        
        function index($args, $request) {
		$this->setupTemplate($request);

		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->display('munispaceSignpost/munispaceRozcestnik.tpl');
	}
}

?>
