<?php

$sName = "localhost";
$uName = "root";
$pass = "CiscoMail@123";
$db_name = "mail_cisco";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",$uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: ". $e->getMessage();
}
?>