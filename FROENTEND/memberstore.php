<?php
include "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the contact number already exists in the database
    $description = $_POST['memberdescription'];
    $name = $_POST['membername'];
    $pin = $_POST['memberpin'];
    $email= $_POST['memberemail'];
    $position = $_POST['memberposition'];
    $sqlCheckContact = "SELECT * FROM memberdata WHERE memberpin  = '$pin'";

    $resultCheckContact = $con->query($sqlCheckContact);

    if ($resultCheckContact->num_rows > 0) {
        echo '<script>alert("member with this pin already registered.");
        window.location.href="addmember.php";
        </script>';
    } else {
        // If contact number is unique, proceed with storing the data
        if (isset($_POST["submit"])) {
            $dst1 = "";
            handleImageUpload("memberImage", $dst1);
            insertimage($dst1);
        }
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

    $query = "INSERT INTO memberdata (memberimage, membername, memberpin, memberdescription, memberposition, memberemail) 
              VALUES ('$dst1', '$_POST[membername]', '$_POST[memberpin]', '$_POST[memberdescription]', '$_POST[memberposition]', '$_POST[memberemail]')";

    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    echo '<script type="text/javascript">
        alert("Member added successfully");
        window.location.href="addmember.php";
    </script>';
}
?>
