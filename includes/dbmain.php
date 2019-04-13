<?php

$dbServername = "localhost";
$dbUsername = "root"; //ito po yung ginawa kung account sa phpmyadmin
$dbPassword = "";//ito po yung ginawa kung account sa phpmyadmin
$dbName = "microsoclogin";

$conn = mysqli_connect($dbServername,$dbUsername, $dbPassword, $dbName);

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}