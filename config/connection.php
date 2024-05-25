<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'employee_managementDB';

$conn = new mysqli($server, $username, $password);

if ($conn->connect_errno) {
    die('Connection  failed: ' . $conn->connect_errno);
} else {
    echo 'Connected.<br>';
}

//drop database if exist
$sql_drop_db = 'DROP DATABASE IF EXISTS ' . $database;
if ($conn->query($sql_drop_db) === TRUE) {
    echo 'Database dropped successfully.<br>';
} else {
    echo 'Error dropping database: ' . $conn->error . '<br>';
}

// create database
$sql_create_db = 'CREATE DATABASE ' . $database;
if ($conn->query($sql_create_db) === TRUE) {
    echo 'Database created successful.<br>';
} else {
    echo 'Error creating database: ' . $conn->error . '<br>';
}

//select data to create table
$conn->select_db($database);

if ($conn->select_db($database) === FALSE) {
    die('Error selecting database: ' . $conn->error . '<br>');
}

// create table "tasks"
$sql_table = 'CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30),
    mobile VARCHAR(30),
    password VARCHAR(30) NOT NULL
)';

if ($conn->query($sql_table) === TRUE) {
    echo 'Table tasks created successfully.<br>';
} else {
    echo 'Error creating table: ' . $conn->error . '<br>';
}

$conn->close();
?>