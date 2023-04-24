<?php

$email = $_POST["email"];

$host = "localhost";
$dbname = "noss-db";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
};

// insert record
$sql = "INSERT INTO emails (mail)
        VALUES (?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt,
    "s",
    $mail
);

mysqli_stmt_execute($stmt);

echo "Record Saved.";
