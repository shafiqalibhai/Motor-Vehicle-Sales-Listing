<?php
defined("_JEXEC") or die("Restricted access");

$uninstaller = new InstallerController;

// uninstalling jumi module
$db->setQuery("select id from #__modules where title = 'Jumi'");
$jumi_module = $db->loadObject();
$module_uninstaller = new JInstaller;
if($module_uninstaller->uninstall('module', $jumi_module->id))
    echo 'Module uninstall success', '<br />';
else
    echo 'Module uninstall failed', '<br />';

// uninstalling jumi plugin
$db->setQuery("select id from #__plugins where name = 'Jumi'");
$jumi_plugin = $db->loadObject();
$plugin_uninstaller = new JInstaller;
if($plugin_uninstaller->uninstall('plugin', $jumi_plugin->id))
    echo 'Plugin uninstall success', '<br />';
else
    echo 'Plugin uninstall failed', '<br />';