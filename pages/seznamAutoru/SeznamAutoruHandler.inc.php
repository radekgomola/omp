<?php

/**
 * @file pages/seznamAutoru/SeznamAutoruHandler.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class SeznamAutoruHandler
 *
 * @brief Handle requests for vypisAutoru functions. 
 */

import('classes.handler.Handler');
import('lib.pkp.classes.security.PKPRoleDAO');
import('classes.monograph.AuthorDAO');
import('classes.monograph.MonographDAO');
import('classes.monograph.PublishedMonographDAO');


class SeznamAutoruHandler extends Handler {
	/**
	 * Constructor
	 **/
	function SeznamAutoruHandler() {
		parent::Handler();
	}

	/**
	 * Display authors page.
	 */
	function index() {
		$this->addCheck(new HandlerValidatorPress($this));
		$this->validate();
		$this->setupTemplate($request);
//
		$press =& Request::getPress();
		$templateMgr =& TemplateManager::getManager();
		
                // Don't use the Editorial Team feature. Generate
                // Editorial Team information using Role info.
                $roleDao =& DAORegistry::getDAO('RoleDAO');
                
                $autori =& $roleDao->getUsersByRoleId(ROLE_ID_AUTHOR, $press->getId());
                $autori =& $autori->toArray();
                
                $templateMgr->assign('abeceda', array('A', 'B', 'C', 'Č', 'D', 'Ď', 'E',  
                                    'F', 'G', 'H', 'Ch', 'I', 'J', 'K', 'L', 
                                    'M', 'N', 'Ň', 'O', 'P', 'Q', 'R', 'Ř', 'S', 
                                    'Š', 'T', 'Ť', 'U', 'V', 'W', 'X', 'Y', 'Z', 'Ž', 'ostatni'));
                
                               
                $templateMgr->assign_by_ref('autori', $autori);
                $templateMgr->display('seznamAutoru/vypisAutoru.tpl');
	}
        
        function sloupce() {
		$this->addCheck(new HandlerValidatorPress($this));
		$this->validate();
		$this->setupTemplate($request);
//
		$press =& Request::getPress();
		$templateMgr =& TemplateManager::getManager();
		
                // Don't use the Editorial Team feature. Generate
                // Editorial Team information using Role info.
                $roleDao =& DAORegistry::getDAO('RoleDAO');
                
                $autori =& $roleDao->getUsersByRoleId(ROLE_ID_AUTHOR, $press->getId());
                $autori =& $autori->toArray();
                
                $templateMgr->assign('abeceda', array('A', 'B', 'C', 'Č', 'D', 'Ď', 'E',  
                                    'F', 'G', 'H', 'Ch', 'I', 'J', 'K', 'L', 
                                    'M', 'N', 'Ň', 'O', 'P', 'Q', 'R', 'Ř', 'S', 
                                    'Š', 'T', 'Ť', 'U', 'V', 'W', 'X', 'Y', 'Z', 'Ž', 'ostatni'));
                
                               
                $templateMgr->assign_by_ref('autori', $autori);
                $templateMgr->display('seznamAutoru/vypisAutoru2.tpl');
	}

	/**
	 * Display a biography for an editorial team member.
	 * @param $args array
	 */
	function vypisAutoruBio($args) {
		$this->addCheck(new HandlerValidatorPress($this));
		$this->validate();
		$this->setupTemplate($request);

		$roleDao =& DAORegistry::getDAO('RoleDAO');
		$press =& Request::getPress();

		$templateMgr =& TemplateManager::getManager();

		$userId = isset($args[0])?(int)$args[0]:0;

		// Make sure we're fetching a biography for
		// a user who should appear on the listing;
		// otherwise we'll be exposing user information
		// that might not necessarily be public.

		$user = null;
                $roles =& $roleDao->getByUserId($userId, $press->getId());
                $acceptableRoles = array(
                        ROLE_ID_AUTHOR,
                        ROLE_ID_EDITOR,
                        ROLE_ID_SECTION_EDITOR,
                        ROLE_ID_LAYOUT_EDITOR,
                        ROLE_ID_COPYEDITOR,
                        ROLE_ID_PROOFREADER
                );
                foreach ($roles as $role) {
                        $roleId = $role->getRoleId();
                        if (in_array($roleId, $acceptableRoles)) {
                                $userDao =& DAORegistry::getDAO('UserDAO');
                                $user =& $userDao->getById($userId);
                                break;
                        }
                }
                
                $authorDao =& DAORegistry::getDAO('AuthorDAO');
                $monographDao =& DAORegistry::getDAO('MonographDAO');
                $publishedMonographDao =& DAORegistry::getDAO('PublishedMonographDAO');


                
                $autoriPrispevku =& $authorDao->getAuthorsAlphabetizedByPress($press->getId(),null, null);
                $autoriPrispevku =& $autoriPrispevku->toArray();
                foreach ($autoriPrispevku as $autor) {                
                    $prispevkyMonograph[$autor->getSubmissionId()] = $publishedMonographDao->getById($autor->getSubmissionId(),$press->getId());      }
                //$prispevkyMonograph =& $prispevkyMonograph->toArray();
                
                // Currently we always publish emails in this mode.
                $publishEmail = false;
                

		if (!$user) Request::redirect(null, 'seznamAutoru', 'vypisAutoru');

		$countryDao =& DAORegistry::getDAO('CountryDAO');
		if ($user && $user->getCountry() != '') {
			$country = $countryDao->getCountry($user->getCountry());
			$templateMgr->assign('country', $country);
		}

                $templateMgr->assign_by_ref('autoriPrispevku', $autoriPrispevku);
                $templateMgr->assign_by_ref('prispevkyMonograph', $prispevkyMonograph);
		$templateMgr->assign_by_ref('user', $user);
		$templateMgr->assign_by_ref('publishEmail', $publishEmail);
		$templateMgr->display('seznamAutoru/vypisAutoruBio.tpl');
	}
}

?>
