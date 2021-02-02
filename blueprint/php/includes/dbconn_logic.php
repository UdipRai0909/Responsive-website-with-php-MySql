<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbUserPassword = "";
$dbDatabaseName = "udiprai_sales_company";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbUserPassword, $dbDatabaseName);

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
