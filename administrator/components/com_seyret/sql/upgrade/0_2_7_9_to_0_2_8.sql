UPDATE `#__seyret_check` SET dbversion='0.2.8' WHERE id='1';
ALTER TABLE #__seyret_check ADD COLUMN securitycode1 varchar(20) default NULL;
ALTER TABLE #__seyret_check ADD COLUMN securitycode2 varchar(20) default NULL;
