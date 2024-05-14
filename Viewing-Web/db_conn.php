<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "gradingsystem";

$conn = mysqli_connect($sname, $unmae, $password, $db_name,3306);

if (!$conn) {
	echo "Connection failed!";
}