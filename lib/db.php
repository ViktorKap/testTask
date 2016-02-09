<?php
include (ROOT.DS.'config.php');


    // Create Database and table
    $db = new mysqli(HOST, MYSQL_USER, MYSQL_PASS);
    $db->query("CREATE DATABASE IF NOT EXISTS ".DATABASE);
    $db->select_db(DATABASE);
    $db->query(CREATE_DEFAULT_TABLE);

