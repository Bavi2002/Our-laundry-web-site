
<?php

define("BASEURL" , "http://localhost/Admin2");

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mine';

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
