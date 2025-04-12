<?php
include "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the contact number already exists in the database
    $name = $_POST['winnername'];
    $competionname= $_POST['competitionname'];
    $dat= $_POST['dat'];
        // If contact number is unique, proceed with storing the data
        if (isset($_POST["submit"])) {
            $dst1 = "";
            handleImageUpload("blogimage", $dst1);
            insertimage($dst1);
        }
    }


function handleImageUpload($fileInputName, &$destinationVariable)
{
    $tm = md5(time());
    $filename = $_FILES[$fileInputName]["name"];
    $destination = "./data/" . $tm . $filename;
    $destinationVariable = "data/" . $tm . $filename;

    if (!move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $destination)) {
        die("Error uploading file");
    }
}

function insertimage($dst1)
{
    global $con;
    // Assuming that you have a connection object named $con

    $query = "INSERT INTO blogdata (blogimage, winnername, competitionname, dat) 
              VALUES ('$dst1', '$_POST[winnername]', '$_POST[competitionname]', '$_POST[dat]')";


    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    echo '<script type="text/javascript">
        alert("BLog added successfully");
        window.location.href="addmember.php";
    </script>';
}
?>
