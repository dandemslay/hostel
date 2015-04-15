<?php
/*
$conexion = mysql_connect("localhost","empre","Prueba321","empresas");
if (!$conexion) die("Unable to connect to MySQL: " . mysql_error());
*/

$db_hostname = 'localhost';
$db_database = 'empresas';
$db_username = 'empre';
$db_password = 'Prueba321';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database)
    or die("Unable to select database: " . mysql_error());
?>