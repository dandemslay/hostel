<?php

/*

*   File:   db-Create-tregistry.php
*   By: DANDEMSLAY
*   Date:   2015-05-1
*   This script Creates tables tregistry and tclient in the databese hostelreg

*/
//Connect an Test MySql and specific DB 
{  

    $hostname = "localhost";
    $username = "hostel";
    $password = "Elvis+506";

    $dbName = "hostelreg";

    $dbConnected = @mysql_connect($hostname, $username, $password);

    $dbSelected = @mysql_select_db($dbName, $dbConnected);

    $dbSurccess = true;
    if ($dbConnected) {
        if (!$dbSelected) {
            echo "DB ".$dbName." connection FAILED<br /><br />";
            $dbSurccess = false;
        }
    } else {
        echo "MySQL connection FAILED<br /><br />";
        $dbSurccess = false;
    }
}

//  Execute code ONLY if the connections were successful
if ($dbSurccess){
    //  SQL scripts to create table tregistry
    $createTregistry_SQL = "CREATE TABLE hostelreg.tregistry ( ";
    $createTregistry_SQL .= "ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY_KEY , ";
    
    
    $createTregistry_SQL .= ")";

    if (mysql_query($createTregistry_SQL)) {
    echo "CREATE TABLE 'tregistry' - Successful.<br /><br />"
    }
}