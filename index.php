<!DOCTYPE html>
<html>
<head>
	<title>MySQL Table Viewer</title>
</head>
<body>
	<h1>MySQL Table Viewer</h1>
	<?php
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		// Database connection variables
		$servername = "serverdatabase.mysql.database.azure.com";
		$username = "dbadmin@serverdatabase";
		$password = "P@ssword1234";
		$dbname = "mysql";

		// Create database connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		echo "0 results";

		// Close database connection
		$conn->close();
	?>
</body>
</html>
