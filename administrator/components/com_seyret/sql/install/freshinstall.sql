DROP TABLE IF EXISTS `#__seyret_categories`;
CREATE TABLE `#__seyret_categories` (
  `id` int(11) NOT NULL auto_increment,
  `categoryname` varchar(50) NOT NULL,
  `parentcat` text NOT NULL,
  `categoryinfo` text NOT NULL,
  `catid` text NOT NULL,
  PRIMARY KEY  (`id`)
);


DROP TABLE IF EXISTS `#__seyret_check`;
CREATE TABLE `#__seyret_check` (
  `id` int(11) NOT NULL auto_increment,
  `dbversion` char(5) default NULL,
  `joomlaalemtrack` int(1) default '0',
  `joomlaalemuserid` varchar(15) default NULL,
  `jalemdonated` int(1) default '0',
  PRIMARY KEY  (`id`)
);


DROP TABLE IF EXISTS `#__seyret_items`;
CREATE TABLE `#__seyret_items` (
  `id` int(11) NOT NULL auto_increment,
  `catid` text NOT NULL,
  `title` text,
  `itemcomment` text,
  `videoservertype` varchar(20) default NULL,
  `videoservercode` text,
  `picturelink` text,
  `ordering` int(11) default NULL,
  `hit` int(11) NOT NULL,
  `votetotal` int(11) NOT NULL,
  `voteclick` int(11) NOT NULL,
  `addedby` int(11) NOT NULL,
  `addeddate` datetime NOT NULL default '0000-00-00 00:00:00',  
  `published` int(1) default '0',
  PRIMARY KEY  (`id`)
);


INSERT INTO `#__seyret_check` VALUES ('1','0.2.1','','','');
