<?php
include("dbconfig.php");
session_start();
$_SESSION['status'] = false;
$user=$_POST["user"];
$pass=$_POST["pass"];

$sql="select * from signup";
$res=mysqli_Query($con,$sql);
$row=mysqli_num_rows($res);
$check = 1;
if($row>0){
    while($fetch=mysqli_fetch_assoc($res)){
        if($user==$fetch["Username"] && $pass==$fetch["Password"])
        {
            echo "<script> alert('Login Successful') </script>";
            $_SESSION['status'] = true;
            header("Location:home.php");
            $check++;
        }
    }
}
if($check == 1)
    echo "<script> alert('Incorrect Username or Password or go to signup page') </script>";
    include('index.php')

?>
