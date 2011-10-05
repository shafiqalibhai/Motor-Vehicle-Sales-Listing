UPDATE `#__seyret_check` SET dbversion='0.2.5' WHERE id='1';
UPDATE `#__seyret_check` SET joomlaalemtrack='1' WHERE id='1';

ALTER TABLE #__seyret_check ADD COLUMN seyrethelp TEXT;
ALTER TABLE #__seyret_check ADD COLUMN seyretsnippet TEXT;

CREATE TABLE `#__seyret_reports` (
  `id` int(11) NOT NULL auto_increment,
  `videoid` int(11) default NULL,
  `reportedby` int(11) default NULL,
  `reporteddate` datetime default NULL,
  `reportreason` text,
  `reportread` int(1) default '0',
  `reportprocessed` int(1) default '0',
  `reportprocessedby` int(11) default NULL,
  `reportreply` text,
  `reportreplydate` datetime default NULL,
  PRIMARY KEY  (`id`)
);

UPDATE `#__seyret_check` SET seyrethelp='You can create your own help page. Just edit from Seyret administration panel.' WHERE id='1';