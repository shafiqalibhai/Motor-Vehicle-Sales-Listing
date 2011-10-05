ALTER TABLE `#__jf_content` ADD `original_text` TEXT NULL AFTER `original_value` ;
ALTER TABLE `#__jf_content` ADD INDEX `jfContent` ( `language_id` , `reference_id` , `reference_table` ) ;
ALTER TABLE `#__jf_content` ADD INDEX `jfContentPublished` (`reference_id`, `reference_field`, `reference_table`, `language_id`, `published`);

ALTER TABLE `#__languages` CHANGE `iso` `iso` VARCHAR( 20 ) NULL DEFAULT NULL;
ALTER TABLE `#__languages` ADD `shortcode` VARCHAR( 20 ) NULL AFTER `code` ;
ALTER TABLE `#__languages` ADD `params` TEXT NULL AFTER `image` ;


## Update records
UPDATE `#__components` SET `admin_menu_img` = '../administrator/components/com_joomfish/images/joomfish_icon.png', `ordering`=0 WHERE `#__components`.`admin_menu_alt` = 'Joom!Fish' and `#__components`.`option` = 'com_joomfish' LIMIT 1;
UPDATE `#__components` SET `name` = 'Translation', `admin_menu_link` = 'option=com_joomfish&task=overview&act=translate', `admin_menu_img` = 'js/ThemeOffice/document.png', `ordering`=1 WHERE `#__components`.`admin_menu_alt` = 'Translation' and `#__components`.`option` = 'com_joomfish' LIMIT 1;
UPDATE `#__components` SET `name` = 'Configuration', `admin_menu_link` = 'option=com_joomfish&task=show&act=config_component&hidemainmenu=1' WHERE `#__components`.`admin_menu_alt` = 'Configuration' and `#__components`.`option` = 'com_joomfish' LIMIT 1;
UPDATE `#__components` SET `name` = 'Languages', `admin_menu_link` = 'option=com_joomfish&task=show&act=config_language&hidemainmenu=1' WHERE `#__components`.`admin_menu_alt` = 'Languages' and `#__components`.`option` = 'com_joomfish' LIMIT 1;
UPDATE `#__components` SET `name` = 'Content elements', `admin_menu_link` = 'option=com_joomfish&task=show&act=config_elements' WHERE `#__components`.`admin_menu_alt` = 'Content elements' and `#__components`.`option` = 'com_joomfish' LIMIT 1;
UPDATE `#__components` SET `admin_menu_link` = 'option=com_joomfish&task=show&act=credits' WHERE `#__components`.`admin_menu_alt` = 'About' and `#__components`.`option` = 'com_joomfish' LIMIT 1;

# INSERT new records !!!
# CORRECT THE PARENT ID!
INSERT INTO `#__components` ( `name` , `link` , `menuid` , `parent` , `admin_menu_link` , `admin_menu_alt` , `option` , `ordering` , `admin_menu_img` , `iscore` , `params` )
VALUES ('', '', '0', '65', '', 'jfseparator', '', '1', '../administrator/components/com_joomfish/images/jfspacer.png', '0', 'jfseparator'
), ('Help', '', '0', '65', 'option=com_joomfish&task=show&act=help', 'Help', 'com_joomfish', '6', 'js/ThemeOffice/help.png', '0', ''
), ('', '', '0', '65', '', 'jfseparator', '', '5', '../administrator/components/com_joomfish/images/jfspacer.png', '0', 'jfseparator'
), ('Control Panel', 'option=com_joomfish', '0', '65', 'option=com_joomfish', 'Joom!Fish', 'com_joomfish', '0', '../administrator/components/com_joomfish/images/joomfish_icon.png', '0', ''
);
