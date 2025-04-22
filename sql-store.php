<?php
$servername = "localhost";
$username = "RalfsEgle";
$password = "password";
$dbname = "sql_store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
