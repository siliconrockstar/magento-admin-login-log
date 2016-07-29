<?php

$installer = $this;
$installer->startSetup();


/* create transaction log table */
$installer->run("
    
  CREATE TABLE IF NOT EXISTS {$this->getTable('siliconrockstar_adminloginlog/log')} (
    `admin_login_id` int(10) unsigned NOT NULL auto_increment,
    `admin_user_id` int(10) unsigned,
    `username` VARCHAR(40),
    `success` TINYINT(1) NOT NULL DEFAULT 0,
    `firstname` VARCHAR(32),
    `lastname` VARCHAR(32),
    `email` VARCHAR(128),
    `remote_ip` VARCHAR(15) NOT NULL,
    `timestamp` TIMESTAMP,
    PRIMARY KEY (`admin_login_id`),
    KEY `admin_user_id` (`admin_user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
);
  
$installer->endSetup();