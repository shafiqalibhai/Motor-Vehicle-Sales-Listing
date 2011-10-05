UPDATE `#__seyret_check` SET dbversion='0.2.6.7' WHERE id='1';
ALTER TABLE `#__seyret_check` ADD `seyretpro` int(1) default '0';
ALTER TABLE `#__seyret_check` ADD `prophpdate` datetime NOT NULL default '0000-00-00 00:00:00';

ALTER TABLE `#__seyret_items` ADD `videourl` text;
ALTER TABLE `#__seyret_items` ADD `featured` int(1) default '0';
ALTER TABLE `#__seyret_items` ADD `fbthread` int(11) default '0';


ALTER TABLE `#__seyret_imageads` ADD `clicklink` text;