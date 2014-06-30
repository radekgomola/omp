<?php

/**
 * @file plugins/generic/tinymce/TinyMCEPlugin.inc.php
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class TinyMCEPlugin
 * @ingroup plugins_generic_tinymce
 *
 * @brief TinyMCE WYSIWYG plugin for textareas - to allow cross-browser HTML editing
 */



import('lib.pkp.classes.plugins.GenericPlugin');

define('TINYMCE_INSTALL_PATH', 'lib/pkp/lib/tinymce');
define('TINYMCE_JS_PATH', TINYMCE_INSTALL_PATH . '/jscripts/tiny_mce');

class TinyMCEPlugin extends GenericPlugin {
	/**
	 * Register the plugin, if enabled; note that this plugin
	 * runs under both Press and Site contexts.
	 * @param $category string
	 * @param $path string
	 * @return boolean
	 */
	function register($category, $path) {
		if (parent::register($category, $path)) {
			if ($this->isMCEInstalled() && $this->getEnabled()) {
				HookRegistry::register('TemplateManager::display',array(&$this, 'callback'));
			}
			return true;
		}
		return false;
	}

	/**
	 * Get the name of the settings file to be installed on new press
	 * creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Get the name of the settings file to be installed site-wide when
	 * OMP is installed.
	 * @return string
	 */
	function getInstallSitePluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Hook callback function for TemplateManager::display
	 * @param $hookName string
	 * @param $args array
	 * @return boolean
	 */
	function callback($hookName, $args) {
		$request =& Registry::get('request');
		$templateManager =& $args[0];

		$baseUrl = $templateManager->get_template_vars('baseUrl');
		$additionalHeadData = $templateManager->get_template_vars('additionalHeadData');
		$allLocales = AppLocale::getAllLocales();
		$localeList = array();
		foreach ($allLocales as $key => $locale) {
			$localeList[] = String::substr($key, 0, 2);
		}

		$tinymceScript = '
		<script type="text/javascript" src="'.$baseUrl.'/'.TINYMCE_JS_PATH.'/tiny_mce_gzip.js"></script>
		<script type="text/javascript">
			<!--
			tinyMCE_GZ.init({
				relative_urls: "false",
				plugins: "paste,jbimages,fullscreen",
				themes: "advanced",
				languages: "' . join(',', $localeList) . '",
				disk_cache: true
			});
			// -->
		</script>
		<script type="text/javascript">
			<!--
			tinyMCE.init({
				width: "100%",
				entity_encoding: "raw",
				plugins: "paste,jbimages,fullscreen",
				mode: "specific_textareas",
				editor_selector: "richContent",
				language: "' . String::substr(AppLocale::getLocale(), 0, 2) . '",
				relative_urls: false,
				forced_root_block: "p",
				paste_auto_cleanup_on_paste: true,
				apply_source_formatting: false,
				theme : "advanced",
				theme_advanced_buttons1: "cut,copy,paste,|,bold,italic,underline,bullist,numlist,|,link,unlink,help,code,fullscreen,jbimages",
				theme_advanced_buttons2: "",
				theme_advanced_buttons3: "",
				init_instance_callback: $.pkp.controllers.SiteHandler.prototype.triggerTinyMCEInitialized,
				setup: $.pkp.controllers.SiteHandler.prototype.triggerTinyMCESetup
			});
			// -->
		</script>'
                        
                        
                        ;
                $banneryScript = '
                     
                <script type="text/javascript" src="'.$baseUrl.'/js/bannerSlider/jssor.core.js"></script>
                <script type="text/javascript" src="'.$baseUrl.'/js/bannerSlider/jssor.utils.js"></script>
                <script type="text/javascript" src="'.$baseUrl.'/js/bannerSlider/jssor.slider.js"></script>
		<script type="text/javascript">
                        <!--                  
                       jssor_slider1_starter = function (containerId) {
                           var options = {
                               $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                               $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                                   $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                                   $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                                   $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                                   $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                                   $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                                   $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                                   $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                                   $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                                   $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                               },
                               $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                                   $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                                   $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                                   $AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                                   $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                               }

                           };
                           var jssor_slider1 = new $JssorSlider$(containerId, options);
                       };
                       // -->
                   </script>';
		$templateManager->assign('additionalHeadData', $additionalHeadData."\n".$tinymceScript."\n".$banneryScript);
		return false;
	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return __('plugins.generic.tinymce.name');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		if ($this->isMCEInstalled()) return __('plugins.generic.tinymce.description');
		return __('plugins.generic.tinymce.descriptionDisabled', array('tinyMcePath' => TINYMCE_INSTALL_PATH));
	}

	/**
	 * Check whether or not the TinyMCE library is installed
	 * @return boolean
	 */
	function isMCEInstalled() {
		return file_exists(TINYMCE_JS_PATH . '/tiny_mce.js');
	}

	/**
	 * Get a list of available management verbs for this plugin
	 * @return array
	 */
	function getManagementVerbs() {
		$verbs = array();
		if ($this->isMCEInstalled()) $verbs = parent::getManagementVerbs();
		return $verbs;
	}
}

?>
