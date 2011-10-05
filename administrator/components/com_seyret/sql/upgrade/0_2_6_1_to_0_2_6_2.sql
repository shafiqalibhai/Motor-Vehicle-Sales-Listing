UPDATE `#__seyret_check` SET dbversion='0.2.6.2' WHERE id='1';
ALTER TABLE `#__seyret_permissions` ADD `uservideoaccesslevel` int(3) default NULL;
ALTER TABLE `#__seyret_items` ADD `accesslevel` int(3) default '0';
ALTER TABLE `#__seyret_items` ADD `hasbackup` tinyint(1) default NULL;
ALTER TABLE `#__seyret_items` ADD `isdownloadable` tinyint(1) default '1';
ALTER TABLE `#__seyret_items` ADD `backupid` int(11) default '0';
ALTER TABLE `#__seyret_categories` ADD COLUMN `categoryfilesdirectory` TEXT;

CREATE TABLE `#__seyret_imageads` (
  `id` int(11) NOT NULL auto_increment,
  `catid` text,
  `imageadlink` text,
  `published` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
);

UPDATE `#__seyret_permissions` SET jaclname='public frontend' WHERE jaclname='guest';