<?php

/**
 * @file EducarThemePlugin.inc.php
 *
 * Copyright (c) 2013 Projecte Ictineo
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class EducarThemePlugin
 * @ingroup plugins_themes_educar
 *
 * @brief "Educar" theme plugin
 */

// $Id$


import('classes.plugins.ThemePlugin');

class EducarThemePlugin extends ThemePlugin {
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
    return '/css/educar.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}

    function activate(&$templateMgr) {
      if (($stylesheetFilename = $this->getStylesheetFilename()) != null) {
        //ICT: Normalize styles
        $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/css/normalize.css';
        $templateMgr->addStyleSheet($path);
        $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/css/ictReset.css';
        $templateMgr->addStyleSheet($path);

        //ICT: Load fonts
        $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/css/fonts/stylesheet.css';
         $templateMgr->addStyleSheet($path);


        //ICT: Load general css
        $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/css/sidebar.css';
         $templateMgr->addStyleSheet($path);
        $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/css/footer.css';
         $templateMgr->addStyleSheet($path);
        $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/css/header.css';
         $templateMgr->addStyleSheet($path);
        $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/css/educar.css';
         $templateMgr->addStyleSheet($path);


          $context = Request::getCompleteUrl();
           if (strpos($context,'/article') !== FALSE) {
              $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/articulo.css';
              $templateMgr->addStyleSheet($path);
              if (strpos($context,'article/view') !== FALSE) {
                $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/articulo_view.css';
                $templateMgr->addStyleSheet($path);
              }
            }
            if (strpos($context,'archive') !== FALSE) {
              $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/archivo.css';
               $templateMgr->addStyleSheet($path);
               }
           if (strpos($context,'help') !== FALSE) {
              $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/help.css';
               $templateMgr->addStyleSheet($path);
               }
            if( (strpos($context, 'user') !== FALSE) ||
              (strpos($context, 'counter') !== FALSE) ||
              (strpos($context, 'manager') !== FALSE) ||
              (strpos($context, 'Manager') !== FALSE) ||
              (strpos($context, 'author') !== FALSE) ||
              (strpos($context, 'editor') !== FALSE) ||
              (strpos($context, 'Editor') !== FALSE) ||
              (strpos($context, 'reviewer') !== FALSE) ||
              (strpos($context, 'Reviewer') !== FALSE) ||
              (strpos($context, 'submit') !== FALSE) ||
              (strpos($context, 'notification') !== FALSE) ) {
                $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/backend.css';
                $templateMgr->addStyleSheet($path);
             }   
           if (strpos($context, 'notification') !== FALSE) {
                $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/noti.css';
                $templateMgr->addStyleSheet($path);
             }   
           if (strpos($context, 'announcement/view') !== FALSE) {
                $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/announ_correction.css';
                $templateMgr->addStyleSheet($path);
             }   
 
           if (strpos($context, 'admin') !== FALSE) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/admin.css';
              $templateMgr->addStyleSheet($path);
           }
           if (strpos($context, 'about') !== FALSE) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/about.css';
              $templateMgr->addStyleSheet($path);
           }     

           if (strpos($context, 'announcement') !== FALSE) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/anuncios.css';
             $templateMgr->addStyleSheet($path);
           }  

           if ( (strpos($context, 'search') !== FALSE) ||
                (strpos($context, 'user') !== FALSE)   ||
                (strpos($context, 'login') !== FALSE) ) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/search.css';
             $templateMgr->addStyleSheet($path);
           }   


           if( (strpos($context, 'showToc') !== FALSE) ||
               (strpos($context, 'issue/view') !== FALSE) ){
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/showToc.css';
             $templateMgr->addStyleSheet($path);
           }   

           if (strpos($context, 'search/titles') !== FALSE) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/searchTitle.css';
             $templateMgr->addStyleSheet($path);
           }   

           if (strpos($context, 'search/authors') !== FALSE) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/searchAuthors.css';
             $templateMgr->addStyleSheet($path);
           }  

           if (strpos($context, 'about/submissions') !== FALSE) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/submissions.css';
             $templateMgr->addStyleSheet($path);
           }  


           /*if (strpos($context, 'issue') !== FALSE) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/issue.css';
             $templateMgr->addStyleSheet($path);
           }   */
           if (strpos($context, 'user/register') !== FALSE) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/registro.css';
             $templateMgr->addStyleSheet($path);
           }   
           if( (strpos($context, 'editor') !== FALSE) ||
               (strpos($context, 'manager') !== FALSE) ||
               (strpos($context, 'author') !== FALSE) ) {
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/backend_forms.css';
             $templateMgr->addStyleSheet($path);
           }   
           if((strpos($context, 'editor') !== FALSE) ||
             (substr($context, -4) == 'user') ) { // per Area personal
             $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/css/hide_sidebar.css';
             $templateMgr->addStyleSheet($path);
           } 




     }

     //$path = $this->getPluginPath() . '/js/age.js';
     //$templateMgr->addJavaScript($path);
     /*$path = $this->getPluginPath() . '/js/SimpleDropDownEffects/js/modernizr.custom.63321.js';
     $templateMgr->addJavaScript($path);
      */
     $path = Request::getBaseUrl() . '/' . $this->getPluginPath() . '/' . '/js/chosen09/chosen/chosen.css';
     $templateMgr->addStyleSheet($path);
     $path = $this->getPluginPath() . '/js/chosen09/chosen/chosen.proto.min.js';
     $templateMgr->addJavaScript($path);
     $path = $this->getPluginPath() . '/js/chosen09/chosen/chosen.jquery.min.js';
     $templateMgr->addJavaScript($path);
     $path = $this->getPluginPath() . '/js/select.js';
     $templateMgr->addJavaScript($path);
     $path = $this->getPluginPath() . '/js/ann.js';
     $templateMgr->addJavaScript($path);
     //$path = $this->getPluginPath() . '/js/showtoc.js';
     //$templateMgr->addJavaScript($path);
  }
}

?>
