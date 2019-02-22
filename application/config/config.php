<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASE_URL', 'https://tc.kck.co.th/');

define('default_controller','main');
define('error_controller','error_view');

define('db_host','');
define('db_name','');
define('db_username','');
define('db_password','');


define('THEME', 'lnwphpTheme');
define('DEBUGGING_BACK', false);
define('DEBUGGING', false);
define('CACHING', false);
define('COMPILECHECK', true);
define('CACHE_LIFETIME', 3600);
define('REMOVE_CAHE_OLD_SECONDS', CACHE_LIFETIME*2);
?>