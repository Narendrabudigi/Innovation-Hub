<?php
session_start();
include('dbconfig.php');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST["selectedDate"];

    if (!isset($_POST["selectedDate"])) {
        header("Location: innovationmeeting.php?error=Enter question");
    } else {
        $sql = "SELECT * FROM meetingdetails WHERE date LIKE '%$a%'";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            $_SESSION["places"] = "not found";
            $_SESSION["dates"] = "not found";
            $_SESSION["times"] = "not found";
            $_SESSION["purposes"] = "not found";
            header("Location: innovationmeeting.php");
            exit();
        } else {
            $data = array(); // Change variable name to data
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row; // Store all rows in the data array
            }
            $_SESSION["data"] = $data; // Store the entire data array in the session

            header("Location: innovationmeeting.php");
            exit();
        }
    }
}

mysqli_close($con);
?>