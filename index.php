<?php

mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'empdbserver2023.mysql.database.azure.com', 'dbadmin@empdbserver2023', 'P@ssword1234', 'employees_db', 3306, MYSQLI_CLIENT_SSL);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
$conn->close();
?>
