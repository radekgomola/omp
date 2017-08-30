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
import('lib.pkp.classes.security.RoleDAO');
import('classes.monograph.AuthorDAO');
import('classes.monograph.PublishedMonographDAO');

class VyhledavaniAutoriHandler extends Handler {

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
    }

    /**
     * Show index of published articles by author.
     * @param $args array
     * @param $request PKPRequest
     */
    function index($args, $request) {

        $this->setupTemplate($request, true);

        $press = & $request->getPress();

        $pismeno = isset($args[0]) ? $args[0] : null;

        $authorDao = & DAORegistry::getDAO('AuthorDAO');
        $templateMgr = & TemplateManager::getManager($request);
        $this->validate();
        // Show the author index

        if (!$pismeno) {
            $pismeno = 'A';
        }

        $abeceda = array('A', 'B', 'C', 'D', 'E',
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
        $autoriPole = array();
        if ($abecedaPole[$pismeno] != NULL || $abecedaPole[$pismeno] != '') {
            $initialsArray = $abecedaPole[$pismeno];
            if ($pismeno == "C") {
                $notInitials = array("Ch");
            } else {
                $notInitials = null;
            }
        } else {
            $initialsArray = null;
        }

        $authors = & $authorDao->getAuthorsAlphabetizedByPressGroupedInit(
                        isset($press) ? $press->getId() : null, $initialsArray, null, $notInitials
        );

        $templateMgr->assign('cestaPismeno', $pismeno);
        $templateMgr->assign('searchInitial', $request->getUserVar('searchInitial'));
        $templateMgr->assign('alphaList', explode(' ', __('common.alphaList')));
        $templateMgr->assign_by_ref('authors', $authors);
        $templateMgr->assign('abeceda', $abeceda);
        $templateMgr->display('frontend/pages/authorIndex.tpl');
    }

    function seznam_publikaci($args, $request) {
        $templateMgr = TemplateManager::getManager($request);
        $this->setupTemplate($request);
        $press = $request->getPress();

        $authorId = $request->getUserVar('authorId');
        $authorDao = & DAORegistry::getDAO('AuthorDAO');
        $author = $authorDao->getById($authorId);

        // Provide a list of new releases to browse
        $authorDao = DAORegistry::getDAO('AuthorDAO');
        $authorsMonographs = $authorDao->getMonographsByAuthor($author);
        $templateMgr->assign('publishedMonographs', $authorsMonographs);
        $templateMgr->assign('author', $author);

        // Display
        $templateMgr->display('frontend/pages/authorDetails.tpl');
    }
    
    function authorPublications($args, $request) {
            $templateMgr = TemplateManager::getManager($request);
            $this->setupTemplate($request);
            $press = $request->getPress();
            $publishedMonographDao =& DAORegistry::getDAO('PublishedMonographDAO');
            $press = $request->getPress();
           
            $authorId = $request -> getUserVar('authorId');
            $authorDao =& DAORegistry::getDAO('AuthorDAO');
            $author = $authorDao->getById($authorId);

            $authorsMonographs = $publishedMonographDao->getByAuthor($author);
            $templateMgr->assign('publishedMonographs', $authorsMonographs);
            $templateMgr->assign('author', $author);
            
            // Display
            $templateMgr->display('frontend/objects/authorPublications.tpl');
        }

}

?>
