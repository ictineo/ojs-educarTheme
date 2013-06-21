<?php

/**
 * @file VanillaThemePlugin.inc.php
 *
 * Copyright (c) 2003-2011 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class VanillaThemePlugin
 * @ingroup plugins_themes_vanilla
 *
 * @brief "Vanilla" theme plugin
 */

// $Id$


import('classes.plugins.ThemePlugin');

class EducarThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'EducarThemePlugin';
	}

	function getDisplayName() {
		return 'Educar Theme';
	}

	function getDescription() {
		return 'Light, plain, spacious layout';
	}

	function getStylesheetFilename() {
    return 'css/educar.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}

    function activate(&$templateMgr) {
      if (($stylesheetFilename = $this->getStylesheetFilename()) != null) {
         $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/fonts/stylesheet.css';
         $templateMgr->addStyleSheet($path);
         $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/css/normalize.css';
         $templateMgr->addStyleSheet($path);
         $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/css/ictReset.css';
         $templateMgr->addStyleSheet($path);

          $context = Request::getCompleteUrl();
           if (strpos($context,'help') !== FALSE) {
              $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . 'help.css';
               $templateMgr->addStyleSheet($path);
               }
           if (strpos($context, 'editor') !== FALSE) {
              $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . 'backend.css';
               $templateMgr->addStyleSheet($path);
           }
           if (strpos($context, 'admin') !== FALSE) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . 'admin.css';
              $templateMgr->addStyleSheet($path);
           }
      }
      $path = $this->getPluginPath() . '/js/papers.js';
       $templateMgr->addJavaScript($path);
    }
}

?>
