<?php
	session_start();
	if(!isset($_SESSION['logincust']))
	{
		header('Location: index.php');
	}
?>

<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>Quixoticservice</title>
	<meta name="description" content="Website" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="website">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<!--<link rel="shortcut icon" href="images/ico/favicon.png">-->

	<!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<!-- CSS Font Icons -->
		<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridlex/2.7.1/gridlex.min.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<!--<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">-->


	<!-- CSS Custom -->
	<link href="css/style.css" rel="stylesheet">
	

	
	
</head>


<body class="home">

	<div id="introLoader" class="introLoading"></div>
	
	<!-- start Container Wrapper -->
	<div class="container-wrapper">

		<!-- start Header -->
		<header id="header">

			<!-- start Navbar (Header) -->
			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="#"><img src="images/logo.jpg" width="250px" height="125px" alt="Logo" /></a>
						</div>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
							
								<a href="index.php">Home</a>
								
							</li>
							<li>
								<a href="#">Programs</a>
								<ul>
									<li><a href="#">Consulting</a></li>
									<li><a href="#">Internship</a></li>
									<li><a href="form.php">Admission</a></li>
								</ul>
							</li>
							<li>
								<a href="about-us.php">About</a>
								
							</li>											
							

							<li>
								<a href="contact.php">Contact</a>
										
							</li>
							<li>
								<a href="#">Affiliation</a>
								
							</li>
							
							<li>
								<a href="gallery.php">Gallery</a>
								
							</li>
							
						

						</ul>
				
					</div><!--/.nav-collapse -->

					
						<?php
						echo'
						<div class="nav-mini-wrapper">
						
						<ul class="nav-mini sign-in">
							<li><a data-toggle="modal" href="#">'.$_SESSION['email'].'</a></li>

						</ul>
						<ul class="nav-mini sign-in"><li>
								<form method="post"><input class="btn btn-danger logot" style="margin-left:1021px;width:85px;height:35px;" type="submit" value="Logout" name="logoutsr" width="48" height="48">
							</form>
							</li></ul>
						';

						?>
									
						
		<?php
			if(isset($_POST['logoutsr']))
			{
				session_destroy();
				echo "<script type='text/javascript'>location.href = 'index.php';</script>";
			}
			echo'</div>';
		?>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>
			<!-- end Navbar (Header) -->

			<!-- start Sign-in Modal -->
			<!--et Password Modal -->
			
		</header>

		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- start hero-header -->
			<div class="hero" style="background-image:url('images/hero-header/01.jpg');">
				<div class="container">

					<h1>your future starts here now</h1>
					<p>Finding your Internship or career more 1000+ availabilities</p>				

				</div>
				
			</div>
			<!-- end hero-header -->
			

			<div class="bg-light pt-80 pb-50">
			
				<div class="container">

					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
							
								<h2>Find Internship by category</h2>
								
							</div>
						
						</div>
					
					</div>
					
					<div class="category-group-wrapper">
					
						<div class="container">
			
							<div class="row">
				
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="fas fa-tv"></i>
										</div>
										
										<h5>Computer &amp; IT</h5>
										<p>Or kind rest bred with am shed then.</p>
										
									
									</div>
									
								</div>
								
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="fas fa-building"></i>
										</div>
										
										<h5>Engineering</h5>
										<p>In raptures building an bringing be.</p>
									
									
									</div>
									
								</div>
								
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="far fa-heart"></i>
										</div>
										
										<h5>Customer Service</h5>
										<p>Elderly is detract tedious assured private.</p>
									
									
									</div>
									
								</div>
								
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="fas fa-chart-line"></i>
										</div>
										
										<h5>Marketing</h5>
										<p>Travelling companions contrasted it.</p>
										
									
									</div>
									
								</div>
								
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="fas fa-sliders-h"></i>
										</div>
										
										<h5>Operations</h5>
										<p>Mistress strongly remember up to.</p>
										
									
									</div>
									
								</div>
								
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="fas fa-shield-alt"></i>
										</div>
										
										<h5>Insurance</h5>
										<p>Ham him compass you proceed calling detract.</p>
										
									
									</div>
									
								</div>
								
							</div>
							
						</div>

					</div>
					
					

				</div>

			</div>
						

			<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container" style="margin-left:15px;">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-12">
							
								<div class="row">
								
											<div class="col-sm-12 col-md-8 col-xs-12">
									<div class="footer-about-us">
											<h5 class="footer-title">about <b style="font-size:30px;">Quixotic Corporate Services</b> Pvt.  Ltd.</h5>
											<p>We are pleased to introduce ourselves as India’s leading Education consultant based in New Delhi/Haryana, India, provides a dedicated consultancy services to the education.
We recognized ourselves successfully in the field of education since many years.
Our services include providing career management on different courses viz MBA, BBA, B.Tech,  Engineering, MBBS helping potent students for admission in various academic and professional organizations such as school, colleges, universities  in India and abroad.
</p>
											
											
										</div>
									</div>
									
									<div class="col-sm-6 col-md-4 mt-30-xs">
										<h5 class="footer-title">quick links</h5>
										<ul>
											<li style="width: 20%; margin-bottom: 10px; margin-left:10px;"><a href="index.php">Home</a></li>
											<li style="width: 20%; margin-bottom: 10px; margin-left:10px;"><a href="about-us.php">About Us</a></li>
											<li style="width: 20%; margin-bottom: 10px; margin-left:10px;"><a href="contact.php">Contact</a></li>
											<li style="width: 20%; margin-bottom: 10px; margin-left:10px;"><a href="gallery.php">Gallery</a></li>
										
										</ul>
									
									</div>

								</div>

							</div>
							
							
						</div>
						
					</div>
					
				</div>
				
				<div class="bottom-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-4 col-md-4">
					
								<p class="copy-right">Designed by J&B Techonology Solutions</p>
								
							</div>
							<div class="col-sm-4 col-md-4">
					
								<p class="copy-right">&#169; Copyright 2018 by quixoticservice.com</p>
								
							</div>
							
							
							<div class="col-sm-4 col-md-4">
								<ul class="bottom-footer-menu for-social">
									<li><a href="#"><i class="fab fa-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-facebook-f" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g" data-toggle="tooltip" data-placement="top" title="google plus"></i></a></li>
									
								</ul>
							</div>
						
						</div>

					</div>
					
				</div>
			
			</footer>
			
		</div>
		<!-- end Main Wrapper -->

	</div> <!-- / .wrapper -->
	<!-- end Container Wrapper -->
 
 
<!-- start Back To Top -->
<div id="back-to-top">
   <a href="#"><i class="fas fa-angle-up"></i></a>
</div>
<!-- end Back To Top -->


<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>


</body>

</html>