<?php
$conn = new mysqli("empdbserver2023.mysql.database.azure.com", "dbadmin@empdbserver2023", "P@ssword1234", "employees_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
$conn->close();
?>
