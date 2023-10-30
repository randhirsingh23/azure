<?php
$servername = "empdbserver2023.mysql.database.azure.com";
$username = "dbadmin";
$password = "P@ssword1234";
$database = "employees_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query database for selected columns in the table
$sql = "SELECT emp_no, first_name, email_id FROM employees LIMIT 10";
$result = $conn->query($sql);

echo "Connected to the database successfully!";

// Perform database operations here...

// Close the connection
$conn->close();
?>
