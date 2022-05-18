<?php
include 'dbconnection.php';

$sql = "CREATE DATABASE orderingschema3";

if (mysqli_query($connection, $sql)) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . mysqli_error($connection);
}

mysqli_close($connection);
?>