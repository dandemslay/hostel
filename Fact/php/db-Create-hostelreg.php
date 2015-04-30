<?php

$hostname = "localhost";
$username = "hostel";
$password = "Elvis+506";

$dbConnected = @mysql_connect($hostname, $username, $password);

if ($dbConnected) {
    echo "MySQL connected OK<br /><br />";
} else {
    echo "MySQL connection FAILED<br /><br />";
}

$dbName = "hostelreg";
$create_SQL = "Create DATABASE ".$dbName;

if (mysql_query($create_SQL)) {
    echo "Create DATABASE ".$dbName." - Successful.";
} else {
    echo "Create DATABASE ".$dbName." - FAILED."; 
}


?>