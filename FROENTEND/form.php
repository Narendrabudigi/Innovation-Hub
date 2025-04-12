<?php
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];

// Establishing connection
$con = mysqli_connect("localhost", "root", "", "innovationhub");

// Checking connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Creating a prepared statement
$sql = "INSERT INTO formdata (firstname, lastname, email, message) VALUES (?, ?, ?, ?)";
$stmt = mysqli_stmt_init($con);

if (mysqli_stmt_prepare($stmt, $sql)) {
    // Binding parameters and executing the statement
    mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $message);
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data submitted successfully')</script>";
        header("Location: contact.php");
        exit();
    } else {
        echo "<script>alert('An error occurred')</script>";
        exit();
    }
} else {
    echo "<script>alert('SQL error')</script>";
    exit();
}

// Closing the statement and connection

