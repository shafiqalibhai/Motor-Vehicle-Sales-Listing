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

/* default styling */
include(PATH_ROOT . 'styles/default/style.css');

include(PATH_ROOT . 'styles/default/black/style.css');

/* basic styling */
include(PATH_ROOT . 'styles/basic/style.css');

include(PATH_ROOT . 'styles/basic/black/style.css');

if ($is_ie6 && !$is_ie7) include(PATH_ROOT . 'styles/basic/ie6hacks.css');

/* plain styling */
include(PATH_ROOT . 'styles/plain/style.css');

include(PATH_ROOT . 'styles/plain/black/style.css');

/* list styling */
include(PATH_ROOT . 'styles/list/style.css');

include(PATH_ROOT . 'styles/list/black/style.css');

if ($is_ie6 && !$is_ie7) include(PATH_ROOT . 'styles/list/ie6hacks.css');

/* slideshow styling */
include(PATH_ROOT . 'styles/slideshow/style.css');

include(PATH_ROOT . 'styles/slideshow/black/style.css');

/* basic list styling */
include(PATH_ROOT . 'styles/basiclist/style.css');

include(PATH_ROOT . 'styles/basiclist/black/style.css');

if ($is_ie6 && !$is_ie7) include(PATH_ROOT . 'styles/basiclist/ie6hacks.css');

/* plain list styling */
include(PATH_ROOT . 'styles/plainlist/style.css');

include(PATH_ROOT . 'styles/plainlist/black/style.css');

?>