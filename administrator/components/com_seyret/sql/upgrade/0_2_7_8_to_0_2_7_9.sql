UPDATE `#__seyret_check` SET dbversion='0.2.7.9' WHERE id='1';
ALTER TABLE #__seyret_items ADD COLUMN isreplyto int(11)  default '0';
