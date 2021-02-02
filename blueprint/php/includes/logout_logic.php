<?php

$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive-website-with-php-MySql-main";
$myPageLink = 'http://localhost:8080/' . $projectName . '/blueprint/php';
$headerPage = $myRoot . '/' . $projectName . '/blueprint/php';
$headerInc = $myRoot . '/' . $projectName . '/blueprint/php/includes';

session_start();
session_unset();
session_destroy();
header("Location:" . $myPageLink . "/homepage.php");
