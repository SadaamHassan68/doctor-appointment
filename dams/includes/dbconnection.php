<?php
$host = 'localhost';  
$username = 'root';        // MySQL username (default in XAMPP is 'root')
$password = '';            // MySQL password (default is empty in XAMPP)
$database_name = 'damsmsdb';  // Name of the database to connect to

// Establishing the connection
$database = new mysqli($host, $username, $password, $database_name);

// Checking the connection
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
} else {
    echo "Connected successfully to the database!";
}

// You can include further queries and operations here
?>
