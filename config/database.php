<?php
require_once('constant.php');
date_default_timezone_set('UTC');
$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>