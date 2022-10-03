<?php
$servername = 'localhost';
$username = 'root';
$pass = '';
$db = 'php_login';

// Create connection

$conn = new mysqli($servername, $username, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
