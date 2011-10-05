UPDATE `#__seyret_check` SET dbversion='0.2.7.5' WHERE id='1';
ALTER TABLE #__seyret_items ADD COLUMN lastclicktime datetime NOT NULL default '0000-00-00 00:00:00';