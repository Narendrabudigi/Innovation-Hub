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
      

        /* Media Query for smaller screens */
        @media (max-width: 600px) {
            .portfolio-card {
                flex: 0 0 80%;
                margin-left:10%;
            }
        }
		/* Styling for the search bar */
		.search {
            display: flex;
            align-items: center;
            width: 400px;
            margin: 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
            padding: 5px;
            margin-top: 3%;
        }

        .search input {
            flex: 1;
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 5px;
        }

        .search button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 5px;
        }

        .search img {
            width: 50px;
            margin-right: 5px;
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
						<li class="nav-item active"><a class="nav-link" data-aos="fade-left" href="events.php">Events</a></li>
						<li><a class="nav-link" data-aos="fade-left" href="about.php">About us</a></li>
						<li><a class="nav-link" data-aos="fade-left" href="services.php">Services</a></li>
						<li><a class="nav-link" data-aos="fade-left" href="blog.php">Blog</a></li>
						<li><a class="nav-link" data-aos="fade-left" href="contact.php">Contact us</a></li>
						<li><a class="nav-link" data-aos="fade-left" href="adminlogin.php">Dashboard</a></li>
						<li><a class="nav-link" data-aos="fade-left" href="innovationmeeting.php">Meetings</a></li>
					</ul>

					
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<form class="search"method=post action="eventfilter.php">
        <img src="./images/search-icon.jpg">
        <input type="text" id="name" name="eventname" placeholder="Search here with event name" required >
        <button type="submit" value="submit">Search</button>
    </form>
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1 data-aos="fade-down">Events</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<div class="portfolio-container">
    

		<?php
   include "dbconfig.php";
   $res = mysqli_query($con, "SELECT * FROM eventdata");
    if (!$res) {
        die(mysqli_error($link)); // Output any MySQL errors
    }
    $count = mysqli_num_rows($res);
	$var=1;
	
       while ($row = mysqli_fetch_array($res) ) 
       {
		
		$w_image=$row["eventimage"];
        $name = $row["eventname"];
        
		$var++;
		if ($var> 4) {
			break; // Break out of the loop after fetching three rows
		}
		
        ?>
    
    
    <div class="portfolio-card">
    <center> <img src="<?php echo $w_image;?>" alt="Worker Image" style="border-radius:20%;margin-left:-10%;height: 200px;margin-top:3%;"></center>
    
        <div class="portfolio-content">
            <h2>Event Name:
                <?php echo $name;?>
	</h2>
            
			
        </div>
    </div>
    <?php
	
       }
	 
	
       ?>
		</div>
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
									<li><a href="adminlogin.php">dashboard</a></li>
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
