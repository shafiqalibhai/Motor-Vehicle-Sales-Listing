ALTER TABLE `#__seyret_check` DROP dbversion;
ALTER TABLE `#__seyret_check` ADD dbversion char(10);
UPDATE `#__seyret_check` SET dbversion='0.2.6.1' WHERE id='1';

