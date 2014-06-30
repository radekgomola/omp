<?php

/**
 * @file plugins/blocks/bannery/BanneryBlockPlugin.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class BanneryBlockPlugin
 * @ingroup plugins_blocks_bannery
 *
 * @brief Class for bannery
 */

import('lib.pkp.classes.plugins.BlockPlugin');

class BanneryBlockPlugin extends BlockPlugin {
        
    
//        function register($category, $path) {
//		if (parent::register($category, $path)) {
//                    if ($this->getEnabled()) {
//                        HookRegistry::register('TemplateManager::display', array($this, 'callback'));
//			return true;
//                    }
//		}
//		return false;
//	}

    /**
	 * Install default settings on journal creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('plugins.block.bannery.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.bannery.description');
	}
        /**
	 * Hook callback function for TemplateManager::display
	 * @param $hookName string
	 * @param $args array
	 * @return boolean
	 */
//	function callback($hookName, $args) {
//		$request =& Registry::get('request');
//		$templateManager =& $args[0];
//
//		$baseUrl = $templateManager->get_template_vars('baseUrl');
//		$additionalHeadData = $templateManager->get_template_vars('additionalHeadData');
//                
//                $banneryScript = '
//                  <script type="text/javascript" src="'.$baseUrl.'/js/bannerSlider/jssor.core.js"></script>
//                <script type="text/javascript" src="'.$baseUrl.'/js/bannerSlider/jssor.utils.js"></script>
//                <script type="text/javascript" src="'.$baseUrl.'/js/bannerSlider/jssor.slider.js"></script>
//		<script type="text/javascript"> 
//                <!--
//                       jssor_slider1_starter = function (containerId) {
//                           var options = {
//                               $DragOrientation: 3,                                
//
//                               $BulletNavigatorOptions: {                               
//                                   $ChanceToShow: 2,                               
//                                   $ActionMode: 1,                                 
//                                   $AutoCenter: 0,                                 
//                                   $Steps: 1,                                      
//                                   $Lanes: 1,                                      
//                                   $SpacingX: 0,                                   
//                                   $SpacingY: 0,                                   
//                                   $Orientation: 1                                 
//                               },
//                               $ArrowNavigatorOptions: {                       
//                                   $Class: $JssorArrowNavigator$,              
//                                   $ChanceToShow: 2,                              
//                                   $AutoCenter: 0,                                
//                                   $Steps: 1                                      
//                               }
//
//                           };
//                           var jssor_slider1 = new $JssorSlider$(containerId, options);
//                       };
//                       //-->
//                   </script>';
//                $additionalHeadData2 = $additionalHeadData."\n".$banneryScript;
//		$templateManager->assign('additionalHeadData', $additionalHeadData2);
//		return false;
//	}
}

?>
