<?php

$hostname = 'localhost'; //Your MySQL hostname
$dbname   = 'radisicc_test'; //Your database name
$username = 'radisicc_test'; //Your database username
$password = 'necutikazem'; //Your database password

//Let's connect to host:
mysql_connect($hostname, $username, $password) or DIE('Connection to host failed, perhaps the service is down!');
//Select the database:
mysql_select_db($dbname) or DIE('Database name is not available!');

?>