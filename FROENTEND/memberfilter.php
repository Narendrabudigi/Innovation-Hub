<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>PROJECT</title>
    <style>
        /* CSS to make the image responsive */
        #image-container {
            max-width: 100%;
            height: auto;
        }

        /* Additional styling, adjust as needed */
        img {
            width: 100%;
            height: auto;
        }

        .whatsapp-link {
            position: fixed;
            bottom: 20px;
            /* Adjust bottom distance */
            right: 20px;
            /* Adjust right distance */
            z-index: 999;
            /* Ensure it's above other content */
        }

        .logo {
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }

        html {
            height: fit-content;
        }

        .meeting {
            text-align: center;
            color: blue;
            /* background-color: aliceblue;
            margin-top: 50px; */
        }

        .meetingdetails p {
            max-width: 600px;
            text-align: left;
            margin-left: 40px;
            margin-top: 50px;
            color: black;
        }

        .meeting button {
            align-items: center;
            padding: 10px 40px;
            border: 1px solid orange;
            border-radius: 30px;
            background-color: orange;
        }

        .meetingdetails img {
            height: 200px;
            width: 400px;
        }

        .meetingdetails {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .dateform {
            display: none;
        }

        /* Media query for responsiveness */
        @media screen and (max-width: 768px) {
            .whatsapp-link {
                bottom: 10px;
                /* Adjust bottom distance for smaller screens */
                right: 40px;
                /* Adjust right distance for smaller screens */
            }

            /* Adjust the size of the WhatsApp icon for smaller screens */
            .whatsapp-link img {
                height: 40px;
                width: 40px;
            }

            .meetingdetails p {
                margin-left: 20px;
            }

            .meeting button {
                padding: 10px 20px;
            }
        }
        /* worker styles */
.portfolio-container {
            display: flex;
            justify-content: space-between;
            max-width: 2000px;
            flex-wrap: wrap;
            margin-top: 3%;
        }

        .portfolio-card {
            flex: 0 0 28%;
            margin: 1%;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            border: blue solid;
        }

        .portfolio-card:hover {
            transform: scale(1.05);
        }

        .portfolio-card img {
            width: auto;
            height: auto;
            border-bottom: 2px solid #3498db;
           margin-left: 40%;
            
        }

        .portfolio-content {
            padding: 20px;
            text-align: center;
            
        }
        .portfolio-content h2,p
        {
            margin-left: 80px;
            color: brown;
        }

        .portfolio-content h2 {
            margin-top: 0;
            color:black;
            text-align: left;
        }

        .portfolio-content p {
            margin-bottom: 10px;
            color:brown;
            text-align: left;
        }

        .portfolio-content a img{
            display: flex;
            /* padding: 10px 20px; */
            /* background-color: #3498db; */
            color: #fff;
            text-decoration: none;
            border-radius: 50%;
            height:35px;
            width: 35px;
            margin-right: 80%;
            /* transition: background-color 0.3s; */
        }
        .portfolio-content ul 
        {
            list-style: none;
            padding: 10px;
            margin-left: 35%;
            margin-right: 15%;
            display: flex;
            
        }
        .portfolio-content ul li 
        {
         padding-right: 10px;
        }
        .caption
        {
            border-radius:10px;
            width:400px;
            background-color:orange;
        }

        /* Media Query for smaller screens */
        @media (max-width: 600px) {
            .portfolio-card {
                flex: 0 0 80%;
                margin-left:10%;
            }
        }
    </style>
</head>

<body>
   


    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" data-aos="flip-left" href="{% url 'index' %}"><img src="images/IB-logo.png"
                    style="height:100px;border-radius: 50%;"></a>
                    <a class="navbar-brand" data-aos="flip-left" href="https://svgovtpolytirupathi.ac.in/"><img src="images/SVGP TIRUPATI LOGO.jpg" style="height:100px;border-radius: 50%;width:100px;"></a>

    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="">
                        <a class="nav-link" data-aos="fade-left" href="home.php">Home</a>
                    </li>
                    <li><a class="nav-link" data-aos="fade-left" href="events.php">Events</a>
                    </li>
                    <li><a class="nav-link" data-aos="fade-left" href="about.php">About us</a></li>
                    <li><a class="nav-link" data-aos="fade-left" href="services.php">Services</a></li>
                    <li><a class="nav-link" data-aos="fade-left" href="blog.php">Blog</a></li>
                    <li><a class="nav-link" data-aos="fade-left" href="contact.php">Contact us</a></li>
                    <li><a class="nav-link" data-aos="fade-left" href="adminlogin.php">Dashboard</a></li>
                    <li a class="nav-link" data-aos="fade-left" href="innovationmeeting.php">Meetings</a></li>

                </ul>


            </div>
        </div>

    </nav>
    <?php
    include "dbconfig.php";

    // Retrieve the name from the GET request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pin = $_POST['pin'];
        // Perform a database search using $name
        $sql = "SELECT * FROM memberdata WHERE memberpin = '$pin' ";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $w_image=$row["memberimage"];
        $name = $row["membername"];
        $pin  = $row["memberpin"];
        $position = $row["memberposition"];
        //$Expert = $row["Expert-in"];
        $description = $row["memberdescription"];
        $email = $row["memberemail"];
            }
        }
        else {
            echo '<script>alert("No results found");
            window.location.href="about.php";</script>';
        }

        ?>
    
    
    <div class="portfolio-card">
    <center> <img src="<?php echo $w_image;?>" alt="Worker Image" style="border-radius:20%;margin-left:-10%;height: 200px;margin-top:3%;"></center>
    
        <div class="portfolio-content">
            <p>Name:
                <?php echo $name;?>
	   </p>
            <p>Position:
                <?php echo $position;?>
            </p>
            <p>Pin:
            <?php echo $pin;?>

            </p>
            <p>email:
            <?php echo $email;?>

           
			
            <p>Description:
            <?php echo $description;?>
            </p>
           
			
            
			
        </div>
    </div>
    <?php
	
    
       
    }
    ?>
        <script>
            // JavaScript function to toggle the visibility of the form
            function toggleForm() {
                var form = document.getElementById('dateForm');

                // Check the current display property
                if (form.style.display =='none' || form.style.display =='') {
                    // If the form is hidden, show it
                    form.style.display = 'block';
                } else {
                    // If the form is visible, hide it
                    form.style.display = 'none';
                }
            }

            // AOS initialization
            AOS.init();
        </script>

        <div id="result" height="200px" ;></div>
        <script>
    // function formdetails() {
    //     var dateforms = document.getElementById('dateform');
    //     dateforms.style.display = "block";
    // }
</script>

        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/tiny-slider.js"></script>
        <script src="js/custom.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>