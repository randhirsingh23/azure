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
		if ($result->num_rows > 0) {
		    // Display table headers
		    echo "<table><tr><th>emp_no</th><th>first_name</th><th>email_id</th></tr>";
		    // Loop through results and display each row in the table
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><td>" . $row["emp_no"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["email_id"] . "</td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}

// Close the connection
$conn->close();
?>
