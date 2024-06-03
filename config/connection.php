<?php
// server connection
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'employee_managementDB';

$conn = new mysqli($server, $username, $password, $database);

if (!$conn) {
    die(mysqli_errno($conn));
} 

?>