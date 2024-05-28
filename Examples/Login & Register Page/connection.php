<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "TW_login_system";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
