<?php
$servername = "localhost";
$username = "RalfsEgle";
$password = "password";
$dbname = "sql_store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from customers";
$result = $conn->query($sql);
echo "<ul>";
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<li> id: " . $row["customer_id"] . " - Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
    }
}
echo "<ul>";
$conn->close();
