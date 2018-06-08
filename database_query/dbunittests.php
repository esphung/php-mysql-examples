<?php
// create table
include 'tableclass.php';
$test = new Table("TEST_TABLE",["ID_NUM","USERNAME","PASSWORD","EMAIL","FRIEND_LIST"]);
var_dump($test);
?>