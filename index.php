<?php
$conn = new mysqli("serverdatabase.mysql.database.azure.com", "dbadmin@serverdatabase", "P@ssword1234", "employees");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
$conn->close();
?>
