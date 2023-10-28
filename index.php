<?php

$con = mysqli_connect("serverdatabase.mysql.database.azure.com", "dbadmin", "P@ssword1234", "employees");

if (mysqli_connect_errno()) {

    printf("connection failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT VERSION()";

$res = mysqli_query($con, $query);

if ($res) {

    $row = mysqli_fetch_row($res);
    echo $row[0];
}

mysqli_free_result($res);
mysqli_close($con);
