<?php 

if (extension_loaded('zlib') && !ini_get('zlib.output_compression')) @ob_start('ob_gzhandler');
header('Content-type: text/css; charset: UTF-8');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');

define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', dirname(__FILE__) . DS);

/* ie browser */
$is_ie7 = strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'msie 7') !== false;	
$is_ie6 = strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'msie 6') !== false;

/* general styling */
include(PATH_ROOT . 'styles/style.css');

/* basic-h styling */
include(PATH_ROOT . 'styles/basic-h/style.css');

include(PATH_ROOT . 'styles/basic-h/black/style.css');

if ($is_ie6 && !$is_ie7) include(PATH_ROOT . 'styles/basic-h/ie6hacks.css');

/* basic-v styling */
include(PATH_ROOT . 'styles/basic-v/style.css');

include(PATH_ROOT . 'styles/basic-v/black/style.css');

/* blank-h styling */
include(PATH_ROOT . 'styles/blank-h/style.css');

include(PATH_ROOT . 'styles/blank-h/black/style.css');

/* blank-v styling */
include(PATH_ROOT . 'styles/blank-v/style.css');

include(PATH_ROOT . 'styles/blank-v/black/style.css');

if ($is_ie6 && !$is_ie7) include(PATH_ROOT . 'styles/blank-v/ie6hacks.css');

/* default-h styling */
include(PATH_ROOT . 'styles/default-h/style.css');

include(PATH_ROOT . 'styles/default-h/black/style.css');

/* default-v styling */
include(PATH_ROOT . 'styles/default-v/style.css');

include(PATH_ROOT . 'styles/default-v/black/style.css');

if ($is_ie6 && !$is_ie7) include(PATH_ROOT . 'styles/default-v/ie6hacks.css');

?>