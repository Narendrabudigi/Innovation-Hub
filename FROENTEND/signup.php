<?php
include('dbconfig.php');
session_start();
$user = $_POST["username"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$pass = $_POST["password"];
$repass = $_POST["password1"];

if ($pass == $repass) {
    $sel = "SELECT * FROM signup WHERE Username = '$user' AND Email = '$email' AND Contact = '$contact' AND Password = '$pass' AND Repassword = '$repass'";
    $que = mysqli_query($con, $sel);
    $row = mysqli_num_rows($que);

    if ($row > 0) {
        echo "<script>alert('You have already created an account. Go to the Login Page!')</script>";
        // header("Location: sign-up.php");
        include("sign-up.php");
    } else {
        $sql = "INSERT INTO signup (Username, Email, Contact, Password, Repassword) VALUES ('$user', '$email', '$contact', '$pass', '$repass')";
        $res = mysqli_query($con, $sql);

        if ($res) {
            header("Location: index.php");
            exit(); // Make sure to exit after header redirection
        } else {
            echo "<script>alert('An error occurred')</script>";
        }
    }
} else {
    echo "<script>alert('Passwords do not match')</script>";
}
?>
