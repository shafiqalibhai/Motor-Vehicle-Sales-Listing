CREATE TABLE IF NOT EXISTS `#__languages` (
	`id` int(11) NOT NULL auto_increment,
	`name` varchar(100) NOT NULL default '',
	`active` tinyint(1) NOT NULL default '0',
	`iso` varchar(20) default NULL,
	`code` varchar(20) NOT NULL default '',
	`shortcode` varchar(20) default NULL,
	`image` varchar(100) default NULL,
	`fallback_code` varchar(20) NOT NULL default '',
	`params` text NOT NULL default '',
	`ordering` int(11) NOT NULL default '0',
	PRIMARY KEY  (`id`)
	) TYPE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__jf_content` (
	`id` int(10) unsigned NOT NULL auto_increment,
	`language_id` int(11) NOT NULL default '0',
	`reference_id` int(11) NOT NULL default '0',
	`reference_table` varchar(100) NOT NULL default '',
	`reference_field` varchar(100) NOT NULL default '',
	`value` mediumtext  NOT NULL default '',
	`original_value` varchar(255) default NULL,
	`original_text` mediumtext default NULL,
	`modified` datetime NOT NULL default '0000-00-00 00:00:00',
	`modified_by` int(11) unsigned NOT NULL default '0',
	`published` tinyint(1) unsigned NOT NULL default '0',
	PRIMARY KEY  (`id`),
	INDEX `combo`  (`reference_id` , `reference_field` , `reference_table`)
	) TYPE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__jf_tableinfo` (
	`id` int(11) NOT NULL auto_increment,
	`joomlatablename` varchar(100) NOT NULL default '',
	`tablepkID` varchar(100) NOT NULL default '',
	PRIMARY KEY  (`id`)
	) TYPE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;