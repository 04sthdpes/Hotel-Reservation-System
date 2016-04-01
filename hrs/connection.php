<?php

$db_server='localhost';
$db_user='root';
$db_password='';
$db_database='hrs';

$con=mysql_connect($db_server,$db_user,$db_password);
	if(!$con){
		die('Couldnt connect');
	}
	mysql_select_db($db_database,$con)or die('Couldnt connect to the database');
?>