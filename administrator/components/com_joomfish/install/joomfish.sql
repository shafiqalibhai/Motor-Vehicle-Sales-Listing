DROP TABLE IF EXISTS `#__jf_content`;
CREATE TABLE `#__jf_content` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `language_id` int(11) NOT NULL default '0',
  `reference_id` int(11) NOT NULL default '0',
  `reference_table` varchar(100) NOT NULL default '',
  `reference_field` varchar(100) NOT NULL default '',
  `value` mediumtext NOT NULL default '',
  `original_value` varchar(255) default NULL,
  `modified` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` int(11) unsigned NOT NULL default '0',
  `published` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `#__languages`;
CREATE TABLE `#__languages` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `active` tinyint(1) NOT NULL default '0',
  `iso` varchar(10) default NULL,
  `code` varchar(20) NOT NULL default '',
  `image` varchar(100) default NULL,
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 ;


INSERT INTO `#__languages` VALUES (1, 'English', 1, 'en', 'english', '', 0);

DROP TABLE IF EXISTS `#__jf_tableinfo`;
CREATE TABLE `#__jf_tableinfo` (
  `id` int(11) NOT NULL auto_increment,
  `joomlatablename` varchar(100) collate latin1_general_ci NOT NULL default '',
  `tablepkID` varchar(100) collate latin1_general_ci NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;


/** These commands only for absolute manual installation on clean install!

INSERT INTO `#__components` (`id`, `name`, `link`, `menuid`, `parent`, `admin_menu_link`, `admin_menu_alt`, `option`, `ordering`, `admin_menu_img`, `iscore`, `params`)
 VALUES (20, 'Joom!Fish', 'com_joomfish', 0, 0, 'option=com_joomfish', 'Joom!Fish', 'com_joomfish', 0, 'js/ThemeOffice/joomfish.png', 0, ''),
(21, '<b>Translation</b>', '', 0, 20, 'option=com_joomfish&act=translate', 'Translation', 'com_joomfish', 1, 'js/ThemeOffice/content.png', 0, ''),
(22, '<b>Configuration</b>', '', 0, 20, 'option=com_joomfish&act=config_component&&hidemainmenu=1', 'Configuration', 'com_joomfish', 2, 'js/ThemeOffice/config.png', 0, ''),
(23, '> Languages', '', 0, 20, 'option=com_joomfish&act=config_language', 'Language configuration', 'com_joomfish', 3, 'js/ThemeOffice/language.png', 0, ''),
(24, '> Content elements', '', 0, 20, 'option=com_joomfish&act=config_elements', 'Content configuration', 'com_joomfish', 4, 'js/ThemeOffice/controlpanel.png', 0, ''),
(25, 'About', '', 0, 20, 'option=com_joomfish&act=credits', 'About', 'com_joomfish', 5, 'js/ThemeOffice/credits.png', 0, '');

INSERT INTO `#__modules` (`title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES ('JoomFish language selection', '', 2, 'user3', 0, '0000-00-00 00:00:00', 1, 'mod_jflanguageselection', 0, 0, 0, 'inc_jf_css=1\nmoduleclass_sfx=\ncache=0\ntype=images\nspacer=\nshow_acitve=1', 0, 0);

INSERT INTO `#__mambots` (`name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) 
  VALUES ('multi lingual content searchbot', 'jfcontent.searchbot', 'search', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
			('Multi lingual abstraction layer bot', 'jfdatabase.systembot', 'system', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', '');

INSERT INTO `#__mambots` VALUES (20, 'multi lingual content searchbot', 'jfcontent.searchbot', 'search', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', '');
INSERT INTO `#__mambots` VALUES (21, 'Multi lingual abstraction layer bot', 'jfdatabase.systembot', 'system', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', '');


*/