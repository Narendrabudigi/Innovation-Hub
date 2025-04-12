<?php
include('dbconfig.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Check if all form fields are present
    if (isset($_FILES['memberImage']['name'], $_POST['memberName'], $_POST['memberDescription'], $_POST['memberEmail'], $_POST['memberPosition'])) {
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement for insertion
        $stmt = $conn->prepare("INSERT INTO memberdata (image, name, description, email, position) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $_FILES['memberImage']['name'], $_POST['memberName'], $_POST['memberDescription'], $_POST['memberEmail'], $_POST['memberPosition']);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo "<script>alert('New member added successfully!')</script>";
        } else {
            echo "Error: " . $conn->error; // Print any error message from the database
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "All form fields are required.";
    }
}
?>


<!-- Your HTML form goes here -->



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

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">		
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
}.whatsapp-link {
    position: fixed;
    bottom: 20px; /* Adjust bottom distance */
    right: 20px; /* Adjust right distance */
    z-index: 999; 
	/* Ensure it's above other content */
}
.logo{
	height: 50px;
	width: 50px;
	border-radius: 50%;
}
.form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        textarea {
            width:490px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .container1
        {
            
            height: 550px;
            width:500px;
            margin-top: 20PX;
        }

		.slider,.dashboard{
			display: flex;
			justify-content:center;
			align-items:center;
		}
		.slider div ul li{
			list-style: none;
			display: inline-block;
			margin: 10px 15px;
			cursor: pointer;
		}
		.dashboard .dashboard-1 div{
			width:120px;
			height:50px;
			border-radius:20px;
			background-color:black;
			margin: 10px 20px;
		}
		.dashboard .dashboard-1{
			display:flex;
			justify-content: space-evenly;
			align-items:center;
		}
        .meeting{
            display:flex;
            justify-content:center;
            align-items:center;
        }
		.footer-section{
               margin-top:10%;
		}

		
/* Media query for responsiveness */
@media screen and (max-width: 768px) {
    .whatsapp-link {
        bottom: 10px; /* Adjust bottom distance for smaller screens */
        right: 40px; /* Adjust right distance for smaller screens */
    }
    
    /* Adjust the size of the WhatsApp icon for smaller screens */
    .whatsapp-link img {
        height: 40px;
        width: 40px;
    }
}


		</style>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" data-aos="flip-left" href="home.php"><img src="images/IB-logo.png" style="height:100px;border-radius: 50%;width:100px;"></a>
				<a class="navbar-brand" data-aos="flip-left" href="https://svgovtpolytirupathi.ac.in/"><img src="images/SVGP TIRUPATI LOGO.jpg" style="height:100px;border-radius: 50%;width:100px;"></a>
                 

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="">
							<a class="nav-link"  data-aos="fade-left" href="home.php" >Home</a>
						</li>
						<li><a class="nav-link" data-aos="fade-left" href="events.php">Events</a></li>
						<li><a class="nav-link" data-aos="fade-left" href="about.php">About us</a></li>
						<li><a class="nav-link" data-aos="fade-left" href="services.php">Services</a></li>
						<li><a class="nav-link" data-aos="fade-left" href="blog.php">Blog</a></li>
						<li><a class="nav-link" data-aos="fade-left" href="contact.php">Contact us</a></li>
						<li class="nav-item active"><a class="nav-link"  data-aos="fade-left" href="dashboard.php">Dashboard</a></li>
					</ul>

					
				</div>
			</div>
			

		</nav>
		<!-- End Header/Navigation -->


			<div class="slider">
				<div>
					<ul>
                    <a href="addmeetings.php"><li>Add Meetings</li></a>
                        <a href="dashboard.php"><li>Dashboard</li></a>
						<a href="addadmin.php"><li>Add Admin</li></a>
						<a href="addmember.php"><li>Add Members</li></a>
						<a href="addevents.php"><li>Add Events</li></a>
                        <a href="addblog.php"><li>Add Blogs</li></a>
					</ul>
				</div>
			</div>

            <div class="meeting">
            <div class="container1  ">
           
            <form class="member-form" method="post" action="eventstore.php"enctype="multipart/form-data" >
    <div class="form-group">
        <label for="memberImage">Event Image:</label>
        <input type="file" style="border: 2px brown solid;width:500px;"id="eventImage" name="memberImage" accept="image/*" required>
    </div>
    <div class="form-group">
        <label for="memberName">Event Name:</label>
        <input type="text" style="border: 2px brown solid;width:500px;"id="memberName" name="eventname" required>
    </div>
	
	<Center><button type="submit" name="submit">Add</button></center>

</form>

        </div>
            </div>
			

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				

			

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div data-aos="fade-right"class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">INNOVATION HUB</a><span>.</span></a></div>
						<p data-aos="fade-right"class="mb-4">The primary goal of developing this innovation hub is to give students a platform and an opportunity to showcase their creativity and innovation.
						<ul data-aos="fade-right"class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul data-aos="fade-down"class="list-unstyled">
									<li><a href="about.php">About us</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contact us</a></li>
									<li><a href="events.php">Events</a></li>
								</ul>
							</div>


							<div class="col-6 col-sm-6 col-md-3">
								<ul data-aos="fade-down"class="list-unstyled">
									<li><a href="tel:+918309377748" target="_blank">Support</a></li>
									<li><a href="https://en.wikipedia.org/wiki/Main_Page" target="_blank">Knowledge base</a></li>
									<li><a href="https://wa.me/918309377748" target="_blank">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul data-aos="fade-down"class="list-unstyled">
									<li><a href="dashboard.php">dashboard</a></li>
									<li><a href="about.php#myteam">Our team</a></li>
									<li><a href="https://en.wikipedia.org/wiki/Leadership">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul data-aos="fade-left"class="list-unstyled">
									<li><a href="home.php#h1">House of Science & Technology</a></li>
									<li><a href="home.php#h2">House of Arts</a></li>
									<li><a href="home.php#h3">Literary Society</a></li>
									<li><a href="home.php#h4">Entrepreneurship cell</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4" style="background-color: aqua;border-radius: 25px;;">
						<div class="col-lg-6">
							<p data-aos="fade-up"class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed by <a data-aos="fade-up" href="#">INNOVATION HUB</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li  data-aos="fade-up"class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li  data-aos="fade-up"><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
			<a href="https://wa.me/918309377748" target="_blank" class="whatsapp-link">
				<img data-aos="zoom-in-down"src="images/whatsapplogo.jpg" alt="WhatsApp Logo" class="logo">
			</a>
			
		</footer>
		<!-- End Footer Section -->	


				



		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
		  AOS.init();
		</script>
	</body>

</html>
