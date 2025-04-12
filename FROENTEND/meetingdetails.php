<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $place = $_POST["place"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $purpose = $_POST["purpose"];

    // Establish database connection
    $con = mysqli_connect("localhost", "root", "", "innovationhub");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Sanitize user inputs
    $place = mysqli_real_escape_string($con, $place);
    $purpose = mysqli_real_escape_string($con, $purpose);

    // Insert into the database
    $sql = "INSERT INTO meetingdetails (place, date, time, purpose) VALUES ('$place', '$date', '$time', '$purpose')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script> alert('Meeting details inserted successfully!')</script>";
        include('adminlogin.php');
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
} else {
    echo "Method not allowed!";
}
?>
