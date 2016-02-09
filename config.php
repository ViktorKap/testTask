<?php

/*** Name site ** */
$site_name = 'Список задач для сотрудников';

/*** Paths ***/
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', (dirname(__FILE__)));
define('TEMPLATES_PATH', ROOT.DS.'templates');
define('LIB_PATH', ROOT.DS.'lib');

define('NUM_IN_PAGE', '10');


/*** DB Const ***/
define ("HOST", "localhost");
define ("DATABASE", "tasks");
define ("MYSQL_USER", "root");
define ("MYSQL_PASS", "");
define ("CREATE_DEFAULT_TABLE",
    "CREATE TABLE  IF NOT EXISTS `".DATABASE."` (
	    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	    `task` VARCHAR(100) NOT NULL,
	    `date_add` DATETIME NOT NULL,
	    `date_end` DATETIME NULL DEFAULT NULL,
	    PRIMARY KEY (`id`)
    )
    COLLATE='utf8_general_ci'
    ENGINE=InnoDB
    ;");

