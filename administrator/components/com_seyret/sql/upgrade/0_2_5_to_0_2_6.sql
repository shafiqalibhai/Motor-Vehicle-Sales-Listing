UPDATE `#__seyret_check` SET dbversion='0.2.6' WHERE id='1';
UPDATE `#__seyret_check` SET joomlaalemtrack='1' WHERE id='1';

CREATE TABLE `#__seyret_permissions` (
  `id` int(11) NOT NULL auto_increment,
  `jaclname` tinytext,
  `canseeadmintoolbar` int(1) default NULL,
  `canseereportedvideosbutton` int(1) default NULL,
  `canseependingvideosbutton` int(1) default NULL,
  `canseeaddvideobutton` int(1) default NULL,
  `canaddvideos` int(1) default NULL,
  `canseeuploadvideobutton` int(1) default NULL,
  `canuploadvideos` int(1) default NULL,
  `canseemyvideosbutton` int(1) default NULL,
  `canseefeaturedvideosbutton` int(1) default NULL,
  `canseesearchvideosbutton` int(1) default NULL,
  `canseehelpbutton` int(1) default NULL,
  `canseedeletevideobutton` int(1) default NULL,
  `candeletevideo` int(1) default NULL,
  `canseeeditvideobutton` int(1) default NULL,
  `caneditvideo` int(1) default NULL,
  `canseefullscreenbutton` int(1) default NULL,
  `canseedownloadbutton` int(1) default NULL,
  `candownloadvideo` int(1) default NULL,
  `canseereportbutton` int(1) default NULL,
  `canreportvideos` int(1) default NULL,
  `canseedirectlinkbox` int(1) default NULL,
  `canseeembedbox` int(1) default NULL,
  `canseevotestars` int(1) default NULL,
  `canvote` int(1) default NULL,
  `canseecomments` int(1) default NULL,
  `canpublishvideo` int(1) default NULL,
  `canseevideoservercodes` int(1) default NULL,
  PRIMARY KEY  (`id`)
);




ALTER TABLE #__seyret_items ADD COLUMN downloadcount INT(11);
INSERT INTO `#__seyret_permissions` VALUES ('1', 'guest', '0', '0', '0', '1', '1', '1', '0', '0', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '0');