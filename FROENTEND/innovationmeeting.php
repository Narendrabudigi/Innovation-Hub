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
    </style>
</head>

<body>
    <div id="disappear">
        <?php
        session_start();


        if (isset($_GET['error'])) {
            echo '<p style="color: red;">' . $_GET['error'] . '</p>';
        } elseif (isset($_SESSION['data'])) {
            echo "<script>alert('Meeting details are displayed below for other date meeting details please refresh the page and choose the date ')</script>";
            echo '<div style="position: relative; text-align: center;>'; // Center-align the content
            echo '<div style="position: absolute; text-align: center; top:50%;transform: translateY(-50%);>'; // Center-align the content
            echo '<h1 style="color:green; position: absolute; top: 500px; left: 50%; transform: translateX(-50%);">Meeting Details Are....</h1>';

            foreach ($_SESSION['data'] as $row) {
                echo '<div style="max-width: 400px; margin: 0 auto; border: 1px solid #ccc; padding: 10px; margin-bottom: 20px; position: absolute; top: 560px; left: 50%; transform: translateX(-50%);">'; // Responsive container
                echo '<h6>Place: ' . $row['place'] . '</h6>';
                echo '<h6>Uploaded Date: ' . $row['date'] . '</h6>';
                echo '<h6>Uploaded Time: ' . $row['time'] . '</h6>';
                echo '<h6>Purpose: ' . $row['purpose'] . '</h6>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';

            unset($_SESSION['data']);
        }
        ?>
    </div>


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
                    <li class="nav-item active"><a class="nav-link" data-aos="fade-left" href="innovationmeeting.php">Meetings</a></li>

                </ul>


            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->
    <div class="meeting">
        <h1 data-aos="fade-top">Meeting details</h1>
        <div class="meetingdetails" data-aos="fade-right">
            <p>Here we are display about Meeting details like Who are the Winners?, When meetings are conducted in
                innovation hub? Where the meetings are conducted?,etc..,If you want to know all the details about
                meeting Please click the below button. </p>
            <!-- </div>
        <div class="meetingimage"> -->
            <img src="images/meeting.avif" alt="">
        </div>
        <div class="result1">
            <button data-aos="fade-bottom" onclick="toggleForm()">Click Here</button>
        </div>

        <form id="dateForm" method="post" target="_self" action="meetingphp.php" class="dateform">
            <br><br><label for="selectedDate">Select Date:</label>
            <input type="date" id="selectedDate" name="selectedDate" required><br><br>
            <button onclick="retrieveData()">Show Meetings</button>
        </form>

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