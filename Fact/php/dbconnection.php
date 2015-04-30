<?php

$hostname = "localhost";
$username = "hostel";
$password = "Elvis+506";

$dbName = "hostelreg";

$dbConnected = @mysql_connect($hostname, $username, $password);

$dbSelected = @mysql_select_db($dbName, $dbConnected);

if ($dbConnected) {
    echo "MySQL connected OK<br /><br />";
    
    if ($dbSelected) {
        echo "DB ".$dbName." connection OK<br /><br />";
    } else {
        echo "DB ".$dbName." connection FAILED<br /><br />";
    }
} else {
    echo "MySQL connection FAILED<br /><br />";
}

?>