<?php
$servername = "gl-emp-web-app2-server.mysql.database.azure.com";
$username = "weqtspfrhk";
$password = "5C3E3MLM810T05FY$";
$database = "employees_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to the database successfully!";

// Perform database operations here...

// Close the connection
$conn->close();
?>
