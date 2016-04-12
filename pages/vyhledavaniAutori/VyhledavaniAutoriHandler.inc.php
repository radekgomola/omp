<?php

/**
 * @file pages/vyhledavaniAutori/VyhledavaniAutoriHandler.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class VyhledavaniAutoriHandler
 * @ingroup pages_vyhledavaniAutori
 *
 * 
 */

import('classes.handler.Handler');
import('lib.pkp.classes.security.PKPRoleDAO');
import('classes.monograph.AuthorDAO');
import('classes.monograph.PublishedMonographDAO');

class VyhledavaniAutoriHandler extends Handler {
    /**
	 * Constructor
	 **/
	function VyhledavaniAutoriHandler() {
		parent::Handler();
	}

	/**
	 * Show index of published articles by author.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function index($args, $request) {
		
		$this->setupTemplate($request, true);
                
		$press =& $request->getPress();

                $pismeno = isset($args[0])?$args[0]:null;
                
		$authorDao =& DAORegistry::getDAO('AuthorDAO');
                $templateMgr =& TemplateManager::getManager($request);
                $this->validate();
                // Show the author index
                
               
                $rangeInfo = $this->getRangeInfo($request, 'authors');
                
                $abeceda = array('A', 'B', 'C', 'D','E',  
                                 'F', 'G', 'H', 'Ch', 'I', 'J', 'K', 'L', 
                                 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 
                                 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
                $authors = $autoriPole = null;

                if($pismeno){
                    $autori = $authorDao->getAuthorsAlphabetizedByPressGrouped(
                            isset($press)?$press->getId():null,
                            null
                    );              
                    $autori =& $autori->toArray();
                    $abecedaPole = array('A' => array('A', 'Á', 'Ä', 'Å', 'À', 'Â', 'Ā', 'Ą', 'Ă'), 'B' => array('B'), 'C' => array('C', 'Č', 'Ć', 'Ç'), 
                                     'D' => array('D', 'Ď', 'Đ'), 'E' => array('E', 'É', 'Ě', 'È', 'Ê', 'Ë', 'Ē', 'Ę'),  
                                     'F' => array('F'), 'G' => array('G', 'Ģ', 'Ğ'), 'H' => array('H'), 'Ch' => array('Ch'), 
                                     'I' => array('I', 'Î', 'Ï', 'Ī', 'Í'), 'J' => array('J'), 'K' => array('K', 'Ķ'), 'L' => array('L', 'Ļ', 'Ł'), 
                                     'M' => array('M'), 'N' => array('N', 'Ň', 'Ņ', 'Ń', 'Ñ'), 'O' => array('O', 'Ó', 'Õ', 'Ö', 'Ô', 'Ő'), 
                                     'P' => array('P'), 'Q' => array('Q'), 'R' => array('R', 'Ř', 'Ŕ'), 'S' => array('S', 'Š', 'Ś', 'Ș'), 
                                     'T' => array('T', 'Ť', 'Ț'), 'U' => array('U', 'Ú', 'Ů', 'Ü', 'Ù', 'Û', 'Ū', 'Ű'), 'V' => array('V'),
                                     'W' => array('W'), 'X' => array('X'), 'Y' => array('Y', 'Ý', 'Ÿ'), 'Z' => array('Z', 'Ž', 'Ź', 'Ż'));
                    $autoriPole = array();                

                    if ($abecedaPole[$pismeno] != NULL || $abecedaPole[$pismeno] != ''){
                        $klicSeznamu = $abecedaPole[$pismeno];
                    }
                    foreach($autori as $autor){
                        $firstletter=substr($autor->getLastName(),0,1);
                        $first2letters=substr($autor->getLastName(),0,2);
                        if (in_array($first2letters, $klicSeznamu)){
                            array_push($autoriPole, $autor);                            
                        } elseif (in_array($firstletter,$klicSeznamu) && !in_array($first2letters, $klicSeznamu)){
                            array_push($autoriPole, $autor);  
                        }                    
                    } 
                } else {
                    $authors =& $authorDao->getAuthorsAlphabetizedByPressGrouped(
                            isset($press)?$press->getId():null,
                            null,
                            $rangeInfo
                    );
                    $templateMgr->assign('itemsPerPageAuthors', 30);  
                }

                $templateMgr->assign('cestaPismeno', $pismeno);    
                $templateMgr->assign('searchInitial', $request->getUserVar('searchInitial'));
                $templateMgr->assign('alphaList', explode(' ', __('common.alphaList')));     
                $templateMgr->assign_by_ref('authors', $authors);
                $templateMgr->assign_by_ref('autori', $autoriPole);
                $templateMgr->assign('abeceda',$abeceda);
                $templateMgr->display('vyhledavaniAutori/authorIndex.tpl');
                
	}
        

        function seznam_publikaci($args, $request){
            $this->validate();
            $this->setupTemplate($request, true);
                
            $authorId = $request -> getUserVar('authorId');
            
            $templateMgr =& TemplateManager::getManager();
            
            $authorDao =& DAORegistry::getDAO('AuthorDAO');
            
            $author = $authorDao->getById($authorId);
            
            $publishedMonographDao =& DAORegistry::getDAO('PublishedMonographDAO');
//            $publishedMonographs =& $publishedMonographDao->getByAuthorId($authorId);
            $publishedMonographs =& $publishedMonographDao->getByAuthor($author);
            $templateMgr->assign('author', $author);
            $templateMgr->assign('publishedMonographs', $publishedMonographs);
            $templateMgr->display('vyhledavaniAutori/authorDetails.tpl');
            
//            if (isset($args[0]) && $args[0] == 'view') {
//			// View a specific author
//			$firstName = $request->getUserVar('firstName');
//			$middleName = $request->getUserVar('middleName');
//			$lastName = $request->getUserVar('lastName');
//			$affiliation = $request->getUserVar('affiliation');
//			$country = $request->getUserVar('country');
//                        $submissionId = $request->getUserVar('submissionId');
//
//			//$publishedArticles = $authorDao->getAuthorsAlphabetizedByPress($press?$press->getId():null, null, null);
//                                
//                        $publishedMonographs =&  $publishedMonographDao->getById($submissionId, $press?$press->getId():  NULL);           
//
////			foreach ($publishedMonographs as $monograph) {
////				$monographId = $monograph->getId();
////			}
//
//			if (empty($publishedMonographs)) {
//				$request->redirect(null, $request->getRequestedPage());
//			}
//
//			$templateMgr =& TemplateManager::getManager();
//			$templateMgr->assign_by_ref('publishedMonographs', $publishedMonographs);
			
            
        }

}

?>
