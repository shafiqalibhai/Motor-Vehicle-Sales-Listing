DROP TABLE IF EXISTS `#__rwcards`;

CREATE TABLE IF NOT EXISTS `#__rwcards` (
	`id` int(11) NOT NULL auto_increment,
	`autor` varchar(150) NOT NULL default '',
	`email` varchar(50) NOT NULL default '',
	`picture` varchar(50) NOT NULL default '',
	`description` text NOT NULL,
	`published` tinyint(1) NOT NULL default '0',
	`checked_out` int(11) NOT NULL default '0',
	`checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
	`ordering` int(11) NOT NULL default '9999',
	`category_id` tinyint UNSIGNED NOT NULL,
	PRIMARY KEY  (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `#__rwcardsdata`;

CREATE TABLE IF NOT EXISTS `#__rwcardsdata` (
	`id` int(10) NOT NULL auto_increment,
	`nameTo` varchar(25) NOT NULL default '',
	`nameFrom` varchar(25) NOT NULL default '',
	`emailTo` varchar(50) NOT NULL default '',
	`emailFrom` varchar(50) NOT NULL default '',
	`picture` varchar(50) NOT NULL default '',
	`sessionId` varchar(50) NOT NULL default '',
	`message` text NOT NULL,
	`writtenOn` DATE NOT NULL,
	`readOn` DATE NOT NULL,
	`cardSent` enum('0','1') NOT NULL default '0',
	`cardRead` enum('0','1') NOT NULL default '0',
	PRIMARY KEY  (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS `#__rwcardsconfig`;

CREATE TABLE IF NOT EXISTS `#__rwcardsconfig` (
	`id` int(10) NOT NULL auto_increment,
	`lifetime` TINYINT DEFAULT '7' NOT NULL ,
	`cardsperpage` TINYINT DEFAULT '4' NOT NULL,
	`rowssperpage` TINYINT DEFAULT '2' NOT NULL,
	`attachement` ENUM( '1', '0' ) DEFAULT '0' NOT NULL,
	`captcha` enum('0','1') NOT NULL default '1',
	PRIMARY KEY  (`id`)
) TYPE=MyISAM;

INSERT INTO `#__rwcardsconfig` ( `lifetime` , `cardsperpage`, `rowssperpage`, `attachement`, `captcha`) VALUES ( '7', '3', '2', '0', '1' );

DROP TABLE IF EXISTS `#__rwcards_category`;

CREATE TABLE IF NOT EXISTS `#__rwcards_category` (
	`id` int(99) unsigned NOT NULL auto_increment,
	`category_kategorien_name` varchar(50) NOT NULL default '',
	`category_description` text NOT NULL,
	`published` tinyint(1) NOT NULL default '0',
	`checked_out` int(11) NOT NULL default '0',
	`checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
	`ordering` int(11) NOT NULL default '9999',
	PRIMARY KEY  (`id`)
) TYPE=MyISAM;