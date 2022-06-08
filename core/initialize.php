<?php
defined('DS')?null:define('DS',DIRECTORY_SEPARATOR);
defined('SITE_ROOT')?null:define('SITE_ROOT',DS.'xampp'.DS.'htdocs'.DS.'RestApi');
//file:///C:/xampp/htdocs/RestApi/includes/config.php
defined('INC_PATH')?null:define('INC_PATH',SITE_ROOT.DS.'includes');
defined('CORE_PATH')?null:define('CORE_PATH',SITE_ROOT.DS.'core');

//load the config file past
require_once(INC_PATH.DS."config.php");
//core path
require_once(CORE_PATH.DS."post.php");
//initialize to use cztegory obj
require_once(CORE_PATH.DS."category.php");



?>