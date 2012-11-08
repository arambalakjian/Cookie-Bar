<?php

//Decorators
Object::add_extension('SiteConfig', 'CookieSiteConfig');
Object::add_extension('Page_Controller', 'CookiePageExtension');

//cookie controller
//add profile controller
Director::addRules(100, array(
	CookieBarController::URLSegment => 'CookieBarController'
));

define('MOD_CB_PATH',rtrim(dirname(__FILE__), DIRECTORY_SEPARATOR));
$folders = explode(DIRECTORY_SEPARATOR,MOD_CB_PATH);
define('MOD_CB_DIR',rtrim(array_pop($folders),DIRECTORY_SEPARATOR));
unset($folders);