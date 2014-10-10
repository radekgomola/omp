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
	function index(&$args, $request) {
		$this->addCheck(new HandlerValidatorPress($this));
		$this->validate();
		$this->setupTemplate($request);
                
                $pismeno = isset($args[0])?$args[0]:'A';
//
		$press =& Request::getPress();
		$templateMgr =& TemplateManager::getManager();
		
                // Don't use the Editorial Team feature. Generate
                // Editorial Team information using Role info.
                $roleDao =& DAORegistry::getDAO('RoleDAO');
                
                $autori =& $roleDao->getUsersByRoleId(ROLE_ID_AUTHOR, $press->getId());
                $autori =& $autori->toArray();
                
                $abeceda = array('A', 'B', 'C', 'D','E',  
                                 'F', 'G', 'H', 'Ch', 'I', 'J', 'K', 'L', 
                                 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 
                                 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
                
                
                $abecedaPole = array('A' => array('A', 'Á', 'Ä', 'Å', 'À', 'Â', 'Ā', 'Ą', 'Ă'), 'B' => array('B'), 'C' => array('C', 'Č', 'Ć', 'Ç'), 
                                 'D' => array('D', 'Ď', 'Đ'), 'E' => array('E', 'É', 'Ě', 'È', 'Ê', 'Ë', 'Ē', 'Ę'),  
                                 'F' => array('F'), 'G' => array('G', 'Ģ', 'Ğ'), 'H' => array('H'), 'Ch' => array('Ch'), 
                                 'I' => array('I', 'Î', 'Ï', 'Ī', 'Í'), 'J' => array('J'), 'K' => array('K', 'Ķ'), 'L' => array('L', 'Ļ', 'Ł'), 
                                 'M' => array('M'), 'N' => array('N', 'Ň', 'Ņ', 'Ń', 'Ñ'), 'O' => array('O', 'Ó', 'Õ', 'Ö', 'Ô', 'Ő'), 
                                 'P' => array('P'), 'Q' => array('Q'), 'R' => array('R', 'Ř', 'Ŕ'), 'S' => array('S', 'Š', 'Ś', 'Ș'), 
                                 'T' => array('T', 'Ť', 'Ț'), 'U' => array('U', 'Ú', 'Ů', 'Ü', 'Ù', 'Û', 'Ū', 'Ű'), 'V' => array('V'),
                                 'W' => array('W'), 'X' => array('X'), 'Y' => array('Y', 'Ý', 'Ÿ'), 'Z' => array('Z', 'Ž', 'Ź', 'Ż'));
                $poleAutoru = array();                
                
                if ($abecedaPole[$pismeno] != NULL || $abecedaPole[$pismeno] != ''){
                    $klicSeznamu = $abecedaPole[$pismeno];
                }else{
                    $klicSeznamu = $abecedaPole['A'];
                }
                foreach($autori as $autor){
                    $firstletter=substr($autor->getLastName(),0,1);
                    $first2letters=substr($autor->getLastName(),0,2);
                    if (in_array($first2letters, $klicSeznamu) || in_array($firstletter,$klicSeznamu)){
                        array_push($poleAutoru, $autor);                            
                    }                     
                }           
                
                $authorDao =& DAORegistry::getDAO('AuthorDAO');
                $publishedMonographDao =& DAORegistry::getDAO('PublishedMonographDAO');


                
                $autoriPrispevku =& $authorDao->getAuthorsAlphabetizedByPress($press->getId(),null, null);
                $autoriPrispevku =& $autoriPrispevku->toArray();
                
                foreach ($autoriPrispevku as $autorPrispevek) {
                    $pLastName=$autorPrispevek->getLastName();
                    $pFirstName=$autorPrispevek->getFirstName();
                    $pEmail=$autorPrispevek->getEmail();
                    foreach($poleAutoru as $user){
                        $uLastName=$user->getLastName();
                        $uFirstName=$user->getFirstName();
                        $uEmail=$user->getEmail();
                        if ($pLastName == $uLastName && 
                            $pFirstName == $uFirstName &&
                            $pEmail == $uEmail){
//                                $prispevkyMonograph[$user->getId()] = $publishedMonographDao->getById($autorPrispevek->getSubmissionId(),$press->getId());                       
                                if(!$prispevkyMonograph[$user->getId()]){
                                $prispevkyMonograph[$user->getId()] = array();
                                }
                                array_push($prispevkyMonograph[$user->getId()], $publishedMonographDao->getById($autorPrispevek->getSubmissionId(),$press->getId()));
                            }
                             
                    }
                    
                }          
                
                $publishEmail = false;

		$countryDao =& DAORegistry::getDAO('CountryDAO');
		if ($user && $user->getCountry() != '') {
			$country = $countryDao->getCountry($user->getCountry());
			$templateMgr->assign('country', $country);
		}

                $templateMgr->assign_by_ref('prispevkyMonograph', $prispevkyMonograph);
		$templateMgr->assign_by_ref('publishEmail', $publishEmail);

                $templateMgr->assign_by_ref('abeceda', $abeceda);                
                $templateMgr->assign_by_ref('poleAutoru', $poleAutoru);                
                $templateMgr->assign('cestaPismeno', $pismeno);                

                $templateMgr->display('seznamAutoru/vypisAutoru.tpl');
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
                    $prispevkyMonograph[$autor->getSubmissionId()] = $publishedMonographDao->getById($autor->getSubmissionId(),$press->getId());                    }
                //$prispevkyMonograph =& $prispevkyMonograph->toArray();
                
                // Currently we always publish emails in this mode.
                $publishEmail = false;
                

		if (!$user) {
                    Request::redirect(null, 'seznamAutoru', 'vypisAutoru');
                }

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
