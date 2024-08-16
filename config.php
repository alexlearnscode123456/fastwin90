<?php
/*
This file contains database config.phpuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'jjotiodg_as');
define('DB_PASSWORD', 'jjotiodg_as');
define('DB_NAME', 'jjotiodg_as');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
    Echo"Fail";
}

?>