<?php
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'empdbserver2023.mysql.database.azure.com', 'dbadmin@empdbserver2023', 'P@ssword1234', 'employees_db', 3306, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$conn->close();
?>


