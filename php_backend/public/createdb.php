<?php

$host = 'mysql-db';           // MySQL container name from docker-compose
$user = 'app_user';           // MySQL user defined in docker-compose
$password = 'app_password';   // MySQL password defined in docker-compose
$port = '3306';               // Default MySQL port

// Create the connection to MySQL
$db_connection = mysqli_connect($host, $user, $password, '', $port);

// Check the connection
if (!$db_connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to create the database
$dbname = 'app_db';  // Database name defined in docker-compose
$sql = "CREATE DATABASE IF NOT EXISTS `$dbname`";

// Execute the query to create the database
if (mysqli_query($db_connection, $sql)) {
    echo "Database `$dbname` created successfully or already exists.";
} else {
    echo "Error creating database: " . mysqli_error($db_connection);
}

// Close the connection
mysqli_close($db_connection);

?>
