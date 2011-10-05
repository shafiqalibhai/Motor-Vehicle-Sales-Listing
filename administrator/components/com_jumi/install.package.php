<?php
defined("_JEXEC") or die("Restricted access");

// installing module
$module_installer = new JInstaller;
if($module_installer->install(dirname(__FILE__).DS.'module'))
    echo 'Module install success', '<br />';
else
    echo 'Module install failed', '<br />';

// installing plugin
$plugin_installer = new JInstaller;
if($plugin_installer->install(dirname(__FILE__).DS.'plugin'))
    echo 'Plugin install success', '<br />';
else
    echo 'Plugin install failed', '<br />';