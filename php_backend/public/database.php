<?php

$host = getenv('MYSQL_HOST');           // MySQL host (usually 'mysql.railway.internal')
$user = getenv('MYSQL_USER');           // MySQL username (usually 'root')
$password = getenv('MYSQL_PASSWORD');   // MySQL password
$dbname = getenv('MYSQL_DATABASE');     // Database name (usually 'railway')
$port = getenv('MYSQL_PORT');           // MySQL port (typically 3306)

$db = mysqli_connect($host, $user, $password, $dbname, $port);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful!";
}
?>
