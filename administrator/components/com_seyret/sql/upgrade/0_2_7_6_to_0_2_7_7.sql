UPDATE `#__seyret_check` SET dbversion='0.2.7.7' WHERE id='1';
ALTER TABLE #__seyret_check ADD COLUMN accepttermsofuse int(1)  default '0';
ALTER TABLE #__seyret_check ADD COLUMN savedconfig text;
ALTER TABLE #__seyret_permissions ADD COLUMN caneditownvideos int(1)  default '0';
ALTER TABLE #__seyret_permissions ADD COLUMN candeleteownvideos int(1)  default '0';
ALTER TABLE #__seyret_items ADD COLUMN playtime text;