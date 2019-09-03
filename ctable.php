<?php
$servername = "localhost";
$username = "ladiesin_dab2";
$password = "dab2@2019";
$dbname = "ladiesin_batch2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE food_web(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(200);
password VARCHAR(200);
)";

$sql = "CREATE TABLE publish(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(200);
comment VARCHAR(200);
image LONGBLOB;
user_id VARCHAR(100); 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>