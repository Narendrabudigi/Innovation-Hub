<?php
session_start();
$_SESSION['status'] = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('dbconfig.php');
    

    $user = $_POST["user"];
    $pass = $_POST["pass"];
    

    // Sanitize user input to prevent SQL injection
    $user = mysqli_real_escape_string($con, $user);
    $pass = mysqli_real_escape_string($con, $pass);

    // Hash the password (consider using password_hash() for storing passwords)
    // Example: You should use a more secure hashing method

    // Fetch user from the database
    $sql = "SELECT * FROM adminlogindata WHERE Username = '$user' AND Password = '$pass'";
    $res = mysqli_query($con, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        // Start session and store user data if login is successful
        $_SESSION['username'] = $user;
        
        $_SESSION['status'] = true;
        // Redirect to dashboard
        header("Location: dashboard.php");

        exit(); // Ensure to stop further script execution after redirection
    } else {
        // Invalid username or password
        echo "<script>alert('Incorrect Username or Password')</script>";
        include('adminlogin.php');
        exit();
    }
}else{
    // Redirect to login page if accessed without POST method
    header("Location: adminlogin.php");
    exit();
}
?>
