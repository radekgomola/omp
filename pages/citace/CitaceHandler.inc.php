<?php

/**
 * @file pages/citace/CitaceHandler.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CitaceHandler
 * @ingroup pages_citace
 *
 * @brief Handle citace requests.
 */
import('pages.submission.SubmissionHandler')

class CitaceHandler extends SubmissionHandler {
	/**
	 * Constructor
	 * @param $request Request
	 */
	function CitaceHandler(&$request) {
		parent::SubmissionHandler($request);
	}

	/**
	 * Display citation information
	 * @param $args array
	 * @param $request Request
	 */
	function captureCite($args, &$request) {
		$router =& $request->getRouter();
		$this->setupTemplate($request);
		$submissionId = isset($args[0]) ? $args[0] : 0;
		$galleyId = isset($args[1]) ? (int) $args[1] : 0;
		$citeType = isset($args[2]) ? $args[2] : null;

		$this->validate($request, $submissionId, $galleyId);
		$press = $router->getContext($request);
		$submission = $this->submission;

//		$rtDao =& DAORegistry::getDAO('RTDAO');
//		$journalRt =& $rtDao->getJournalRTByJournal($journal);
//
//		if (!$journalRt || !$journalRt->getCaptureCite()) {
//			$request->redirect(null, $router->getRequestedPage($request));
//		}

		$templateMgr =& TemplateManager::getManager();
		$templateMgr->assign('submissionId', $submissionId);
		$templateMgr->assign('galleyId', $galleyId);

		$citationPlugins =& PluginRegistry::loadCategory('citationFormats');
		uasort($citationPlugins, create_function('$a, $b', 'return strcmp($a->getDisplayName(), $b->getDisplayName());'));
		$templateMgr->assign_by_ref('citationPlugins', $citationPlugins);
		if (isset($citationPlugins[$citeType])) {
			// A citation type has been selected; display citation.
			$citationPlugin =& $citationPlugins[$citeType];
		} else {
			// No citation type chosen; choose a default off the top of the list.
			$citationPlugin = $citationPlugins[array_shift(array_keys($citationPlugins))];
		}
		$citationPlugin->displayCitation($article, $issue, $journal);
	}

}

?>
