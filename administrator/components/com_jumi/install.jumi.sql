DROP TABLE IF EXISTS `#__jumi`;

CREATE TABLE `#__jumi` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `path` varchar(255) default NULL,
  `custom_script` text,
  `access` int(11) unsigned NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `published` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET `utf8`;

INSERT INTO `#__jumi` VALUES (1, 'Hello Jumi!', 'hello-jumi', '', '<!-- Jumi intro including some php code (sitename, username) - see below. -->\r\n\r\n<?php\r\nfunction sitename() { //gets sitename\r\n $config = new JConfig();\r\n return $config->sitename;\r\n}\r\n$user =& JFactory::getUser(); //gets user object\r\n?>\r\n\r\n<h3>Hello in the world of Jumi!</h3>\r\n<p>Jumi is a set of Joomla! extensions enabling to include custom codes (html, php, css, js, ...) into Joomla!</p>\r\n<ul>\r\n<li>Jumi <b>module</b> includes codes into Joomla! module positions,</li>\r\n<li>Jumi <b>plugin</b> includes codes into Joomla! articles,</li>\r\n<li>Jumi <b>component</b> creates separate Joomla! components from custom codes.</li>\r\n</ul>\r\n<p>We hope Jumi will be useful for your <strong><?php echo sitename(); ?></strong> site. As it is for more then 100.000 other webmasters and developers.<p>\r\n<h4>Jumi resources</h4>\r\n<p>You can also visit following resources for Jumi native extensions for Joomla! 1.0.x and 1.5.x:</p>\r\n<ul>\r\n<li><a href="http://jumi.vedeme.cz/index.php?option=com_remository&Itemid=53" title="Jumi downloads">Jumi downloads</a>,</li>\r\n<li><a href="http://jumi.vedeme.cz/index.php?option=com_content&view=article&id=39&Itemid=37" title="Concise guide">Jumi concise guide</a>,</li>\r\n<li><a href="http://edo.webmaster.am/jumi" title="Jumi Tips, tricks, snippet">Jumi tips, tricks and snippets</a>,</li>\r\n<li>Jumi support can be found at <a href="http://forum.joomla.org/viewforum.php?f=470" title="Jumi support">Joomla! extensions forum</a>,</li>\r\n<li><a href="http://extensions.joomla.org/component/option,com_mtree/task,viewlink/link_id,1023/Itemid,35/" title="Jumi feedbacks and opinions">Jumi feedbacks and opinions</a>.</li>\r\n</ul>\r\n<p>Dear \r\n<?php\r\nif ($user->name == '''')\r\n echo "unknown, not logged, friend";\r\nelse\r\n echo $user->name;\r\n?>\r\n!<br />Have a nice day, weeks, months and years with Jumi!\r\n<br />\r\nWhat next? Try <a href="index.php?option=com_jumi&fileid=2">Joomla!-Jumi blogspot component</a> in your pages now!\r\n</p>', 0, 0, 1);
INSERT INTO `#__jumi` VALUES (2, 'Blogspot', 'blogspot', 'components/com_jumi/files/blogger.php', '<?php\r\n//Display joomla-jumi.blogspot.com\r\n//You can change following variables so you can display your own blog.\r\n$blogId = ''1748567850225926498'';\r\n$login = ''joomla-jumi'';\r\n$cacheTime = 86400;\r\n?>', 0, 0, 1);

ALTER TABLE #__components AUTO_INCREMENT = 1;

INSERT INTO `#__menu` (menutype,name,alias,link,type,published,parent,componentid,sublevel,ordering,checked_out,checked_out_time,pollid,browserNav,access,utaccess,params,lft,rgt,home) VALUES ('mainmenu','Hello Jumi!','hello-jumi','index.php?option=com_jumi&fileid=1','component','1','0',(select max(id)+1 from `#__components`),'0','0','0','0000-00-00 00:00:00','0','0','0','0','','0','0','0');