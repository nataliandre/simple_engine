<?php
// HTTP
define('HTTP_SERVER', 'http://artndev.space/');
date_default_timezone_set('Europe/Kiev');
// HTTPS
define('HTTPS_SERVER', 'http://artndev.space/');
define('HTTPS_SERVER_CLEAR', '');



define('UILANG','common/main');
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);



// DIR

define('DIR_IMAGE', '/img/');
define('DIR_LANGUAGE','/language/');


//ROUTES , define TAB_ACTIVE_..(T_A_..) to see the tab changes in menu 
define('ROUTE_ARTICLES', '?url=articles');
define('T_A_ARTICLES', 'articles');
define('ROUTE_PROJECTS', '?url=projects');
define('T_A_PROJECTS', 'projects');
define('ROUTE_CONTACTS', '?url=contacts');
define('T_A_CONTACTS', 'contacts');
define('ROUTE_SOCIAL', '?url=feedback');
define('T_A_SOCIAL', 'feedback');
define('ROUTE_MAIN', HTTP_SERVER);




//ADMIN DIR

//varibles


/*LANGUAGE SETTINGS*/



define('LANG','language');
define('DEF_LANGUAGE','en/');
// define the languages^ wich would you use in your project, it must be seem to folder names in DIR_LANGUAGE
define('LANGUAGES','en,ua,ru,pl');



/* write this in .htaccess*/




//ACTIONS

// LOG



// DB



// SYSTEM CONST

define('SHOW_PAGES',5);




//coordinats



//
 //CAPTCHA remember 
 
 // templates elements
define('STAND','standart/');
define('CUST','custom/');





?>