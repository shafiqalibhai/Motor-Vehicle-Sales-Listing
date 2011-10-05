UPDATE `#__seyret_check` SET dbversion='0.2.4' WHERE id='1';
UPDATE `#__seyret_check` SET joomlaalemtrack='1' WHERE id='1';

CREATE TABLE `#__seyret_ads` (
  `id` int(11) NOT NULL auto_increment,
  `catid` text,
  `adlink` text,
  `published` int(11) default NULL,
  PRIMARY KEY  (`id`)
);