<?php

#connect to the database
$localhost 	= "localhost"; //your host name
$username 	= " "; // your database username
$password 	= " "; // your database password
$dbname 	= " "; // your database name

$con = new mysqli($localhost, $username, $password, $dbname);

if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}

/* end of file */
