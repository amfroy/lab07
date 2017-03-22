<?php
$host = "localhost";
$user = "it58160543";
$password = "it58160543";
$dbname = "it58160543";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);
?>