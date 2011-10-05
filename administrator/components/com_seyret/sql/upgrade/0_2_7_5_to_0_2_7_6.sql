UPDATE `#__seyret_check` SET dbversion='0.2.7.6' WHERE id='1';
ALTER TABLE #__seyret_check ADD COLUMN dfltdownloader tinytext;
ALTER TABLE #__seyret_check ADD COLUMN prophpmd5 tinytext;