<?php

/**
 * @file tests/data/60-content/JlockehartSubmissionTest.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2000-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class JlockehartSubmissionTest
 * @ingroup tests_data
 *
 * @brief Data build suite: Create submission
 */

import('tests.data.ContentBaseTestCase');

class JlockehartSubmissionTest extends ContentBaseTestCase {
	/**
	 * Create a submission.
	 */
	function testSubmission() {
		$this->register(array(
			'username' => 'jlockehart',
			'firstName' => 'Jonathan',
			'lastName' => 'Locke Hart',
			// 'affiliation' => '',
			'country' => 'Canada',
			'roles' => array('Author'),
		));

		$title = 'Dreamwork';
		$this->createSubmission(array(
			'type' => 'monograph',
			'title' => $title,
			'abstract' => 'Dreamwork is a poetic exploration of the then and there, here and now, of landscapes and inscapes over time. It is part of a poetry series on dream and its relation to actuality. The poems explore past, present, and future in different places from Canada through New Jersey, New York and New England to England and Europe, part of the speaker’s journey. A typology of home and displacement, of natural beauty and industrial scars unfolds in the movement of the book.',
		));
		$this->logOut();

		$this->findSubmissionAsEditor('dbarnes', null, $title);
		$this->sendToReview('Internal');
		$this->assignReviewer('amccrae', 'Aisla McCrae');
		$this->sendToReview('External', 'Internal');
		$this->assignReviewer('agallego', 'Adela Gallego');
		$this->assignReviewer('gfavio', 'Gonzalo Favio');
		$this->waitJQuery();
		$this->logOut();

		$this->performReview('agallego', null, $title, null, 'I recommend that the author revise this submission.');
		$this->performReview('gfavio', null, $title, null, 'I recommend that the author resubmit this submission.');

		$this->findSubmissionAsEditor('dbarnes', null, $title);
		$this->recordEditorialDecision('Accept Submission');
		$this->logOut();
	}
}
