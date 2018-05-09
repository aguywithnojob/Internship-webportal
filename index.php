<?php
	session_start();
	if(isset($_SESSION['logincust']))
	{
		header('Location: Home.php');
	}
	else
	{
		session_unset();
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

<link rel="stylesheet" href="css/slicknav.css">
	
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
 <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">



<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<!--<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">-->


	<!-- CSS Custom -->
	<link href="css/style.css" rel="stylesheet">

	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
	
	<style>
	@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #menu-button {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu #menu-button {
  display: none;
}
#cssmenu {
	z-index: 1;
  font-family: Montserrat, sans-serif;
  background: #333333;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-center ul ul {
  text-align: left;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu > ul > li > a {

  padding: 48px;
  font-size: 12px;
  letter-spacing: 1px;
  text-decoration: none;
  color: #dddddd;
  font-weight: 700;
  text-transform: uppercase;
}
#cssmenu > ul > li:hover > a {
  color: #ffffff;
  display: block;
}
#cssmenu > ul > li.has-sub > a {
  padding-right: 30px;
}
#cssmenu > ul > li.has-sub > a:after {
  position: absolute;
  top: 52px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: #dddddd;
  content: '';
}
#cssmenu > ul > li.has-sub > a:before {
  position: absolute;
  top: 49px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: #dddddd;
  content: '';
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu > ul > li.has-sub:hover > a:before {
	display: block;
  top: 23px;
  height: 0;
}
#cssmenu ul ul {
  position: absolute;
  left: -9999px;
}
#cssmenu.align-right ul ul {
  text-align: right;
}
#cssmenu ul ul li {
  height: 0;
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu li:hover > ul {
  left: auto;
}
#cssmenu.align-right li:hover > ul {
  left: auto;
  right: 0;
}
#cssmenu li:hover > ul > li {
  height: 35px;
}
#cssmenu ul ul ul {
  margin-left: 100%;
  top: 0;
}
#cssmenu.align-right ul ul ul {
  margin-left: 0;
  margin-right: 100%;
}
#cssmenu ul ul li a {
  border-bottom: 1px solid rgba(150, 150, 150, 0.15);
  padding: 11px 15px;
  width: 170px;
  font-size: 12px;
  text-decoration: none;
  color: #dddddd;
  font-weight: 400;
  background: #333333;
}
#cssmenu ul ul li:last-child > a,
#cssmenu ul ul li.last-item > a {
  border-bottom: 0;
}
#cssmenu ul ul li:hover > a,
#cssmenu ul ul li a:hover {
  color: #ffffff;
}
#cssmenu ul ul li.has-sub > a:after {
  position: absolute;
  top: 16px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: #dddddd;
  content: '';
}
#cssmenu.align-right ul ul li.has-sub > a:after {
  right: auto;
  left: 11px;
}
#cssmenu ul ul li.has-sub > a:before {
  position: absolute;
  top: 13px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: #dddddd;
  content: '';
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu.align-right ul ul li.has-sub > a:before {
  right: auto;
  left: 14px;
}
#cssmenu ul ul > li.has-sub:hover > a:before {
  top: 17px;
  height: 0;
}
@media all and (max-width: 400px), only screen and (-webkit-min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min--moz-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (-o-min-device-pixel-ratio: 2/1) and (max-width: 1024px), only screen and (min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min-resolution: 192dpi) and (max-width: 1024px), only screen and (min-resolution: 2dppx) and (max-width: 1024px) {
  
	#cssmenu > ul > li > a{
		padding: 12px !important;
	}

  #cssmenu {
    width: 100%;
  }
  #cssmenu ul {
    width: 100%;
    display: none;
  }
  #cssmenu.align-center > ul {
    text-align: left;
  }
  #cssmenu ul li {
    width: 100%;
    border-top: 1px solid rgba(120, 120, 120, 0.2);
  }
  #cssmenu ul ul li,
  #cssmenu li:hover > ul > li {
    height: auto;
  }
  #cssmenu ul li a,
  #cssmenu ul ul li a {
    width: 100%;
    border-bottom: 0;
  }
  #cssmenu > ul > li {
    float: none;
  }
  #cssmenu ul ul li a {
    padding-left: 25px;
  }
  #cssmenu ul ul ul li a {
    padding-left: 35px;
  }
  #cssmenu ul ul li a {
    color: #dddddd;
    background: none;
  }
  #cssmenu ul ul li:hover > a,
  #cssmenu ul ul li.active > a {
    color: #ffffff;
  }
  #cssmenu ul ul,
  #cssmenu ul ul ul,
  #cssmenu.align-right ul ul {
    position: relative;
    left: 0;
    width: 100%;
    margin: 0;
    text-align: left;
  }
  #cssmenu > ul > li.has-sub > a:after,
  #cssmenu > ul > li.has-sub > a:before,
  #cssmenu ul ul > li.has-sub > a:after,
  #cssmenu ul ul > li.has-sub > a:before {
    display: none;
  }
  #cssmenu #menu-button {
    display: block;
    padding: 27px;
    color: #dddddd;
    cursor: pointer;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 700;
  }
  #cssmenu #menu-button:after {
    position: absolute;
    top: 22px;
    right: 17px;
    display: block;
    height: 4px;
    width: 20px;
    border-top: 2px solid #dddddd;
    border-bottom: 2px solid #dddddd;
    content: '';
  }
  #cssmenu #menu-button:before {
    position: absolute;
    top: 16px;
    right: 17px;
    display: block;
    height: 2px;
    width: 20px;
    background: #dddddd;
    content: '';
  }
  #cssmenu #menu-button.menu-opened:after {
    top: 23px;
    border: 0;
    height: 2px;
    width: 15px;
    background: #ffffff;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  #cssmenu #menu-button.menu-opened:before {
    top: 23px;
    background: #ffffff;
    width: 15px;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  #cssmenu .submenu-button {
    position: absolute;
    z-index: 99;
    right: 0;
    top: 0;
    display: block;
    border-left: 1px solid rgba(120, 120, 120, 0.2);
    height: 46px;
    width: 46px;
    cursor: pointer;
  }
  #cssmenu .submenu-button.submenu-opened {
    background: #262626;
  }
  #cssmenu ul ul .submenu-button {
    height: 34px;
    width: 34px;
  }
  #cssmenu .submenu-button:after {
    position: absolute;
    top: 22px;
    right: 19px;
    width: 8px;
    height: 2px;
    display: block;
    background: #dddddd;
    content: '';
  }
  #cssmenu ul ul .submenu-button:after {
    top: 15px;
    right: 13px;
  }
  #cssmenu .submenu-button.submenu-opened:after {
    background: #ffffff;
  }
  #cssmenu .submenu-button:before {
    position: absolute;
    top: 19px;
    right: 22px;
    display: block;
    width: 2px;
    height: 8px;
    background: #dddddd;
    content: '';
  }
  #cssmenu ul ul .submenu-button:before {
    top: 12px;
    right: 16px;
  }
  #cssmenu .submenu-button.submenu-opened:before {
    display: none;
  }
}

	#fade-quote-carousel.carousel {
  padding-bottom: 60px;
}
#fade-quote-carousel.carousel .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-inner .active {
  opacity: 1;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-indicators {
  bottom: 10px;
}
#fade-quote-carousel.carousel .carousel-indicators > li {
  background-color: #e84a64;
  border: none;
}
#fade-quote-carousel blockquote {
    text-align: center;
    border: none;
}

.logo-wrapper{
	position: absolute;
	right: 40px;
	top: 10px;
	height:125px;
	 width:200px;
	 z-index: 1;
}

 .left{
	float: left;
	width:675px;
	height: 450px ;
	display: inline;
	
}
.right{

	float: right;
	width:675px;
	height: 450px ;
	display: inline;
	position: absolute;
}

.right-text a:hover{
		background-color: #fff;
		color: red !important;
		border-color: red !important;
		
		
	}
.mySlides {display:none;}


.bg-light{
  margin-top: 300px !important;
}

@media only screen and (max-width: 400px) {
	.logo-wrapper{
		
	left: 10px;
	top: 6px;
	width: 125px !important;
	height: 50px !important;
	}
	.slide img{
		height: 370px !important;
	}
	.item a{
		margin-left: 110px !important;
	}
	.section-title h2{
		margin-left: 30px !important;
		margin-top: 480px !important;
	}
	.slicknav_btn.slicknav_collapsed{
		margin-left: -54px !important;
	}
	.left{
	
	width:400px;
	height: 240px ;
	margin-bottom: 10px;
		
}
.right{
	z-index: 1 !important;
	    display: block;
    top: 200px;
    width: 400px;
    height: 240px;
    position: relative;
	}

	.right-text a{
		margin-left: 120px !important;

	}

  .mySlides a{
    margin-left: 110px !important;

  }
  .france{
    margin-bottom: 10px !important;
  }
}
</style>
	
	
</head>


<body class="home">

	
	
	<!-- start Container Wrapper -->
	<div class="container-wrapper">

		<!-- start Header -->
		<header id="header">

			<!-- start Navbar (Header) -->
			
			<div id='cssmenu'>
				<ul>
                   <li>
                            
                                <a href="Home.php">Home</a>
                                
                                
                            </li>
                            
                             <li>
                           <a href="#" >Programs</a>
                           <ul>
                                    <li><a href="career.php">Consulting</a></li>
                                    
                                    <li><a href="#">Admission</a>
                                      <ul>
                                       <li><a href="form.php">Application Form</a></li>
                                       <li><a href="form2.php">Undertaking Form</a></li>
                                      </ul>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="about-us.php">About</a>
                                        
                            </li>
                                                        
                            <li>
                                <a href="contact.php">Contact</a>
                                        
                            </li>
                            
                            <li>
                                <a href="#">Services</a>
                                <ul>
                                    <li><a href="career.php">Career Counselling</a></li>
                                    <li><a href="help.php">How can we Help</a></li>
                                    <li><a href="visa.php">Visa Assistance</a></li>
                                    <li><a href="country.php">Countries We represent</a></li>
                                    <li><a href="msc.php">MSC in international management</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="gallery.php">Gallery</a>
                                
                            </li>
						</ul>
					</div>

			<!-- end Navbar (Header) -->

			<!-- start Sign-in Modal -->
				
			<!-- end Forget Password Modal -->
			
		</header>
		<div class="logo-wrapper">
			<a href="#"><img src="images/logo.jpg" ></a>			
		</div>


		<!-- start Main Wrapper -->
		<div class="main-wrapper" style="display:inline;">
		
			<!-- start hero-header -->
			
				
					<div class="left">
					
					  <div class="mySlides" style="position:absolute; margin-top:0px;">
					    <img class="" src="images/banner/pic2.jpg" style="width:675px; height:450px; ">
								<h2 style="color:#fff; margin-top: -320px;
    margin-right: 35px;
    text-align: right;font-size: 36px; font-weight:1000; line-height: 50px;text-transform: none; margin-bottom: 20px;">GLOBAL<br> EDUCATION<br> INTERACT</h2>
    							<a href="form.php" style="border:3px solid #fff; padding:10px; margin-left:260px; font-weight:700; color:#fff; z-index:1; postion:absolute;">Enroll Now</a>
							</div>

						<div class="mySlides" style="position:absolute; margin-top:0px;">
					     <img class="" src="images/banner/pic3.jpg" style="width:675px; height:450px; ">
								<h2 class="france" style="color:#fff; margin-top: -320px;
    margin-right: 35px;
    text-align: center;font-size: 36px; font-weight:1000; line-height: 50px;text-transform: none; margin-bottom: 80px;">FRANCE IMMIGRATION FUND <br> VISA</h2>
    						<a href="form.php" style="border:3px solid #fff; padding:10px; margin-left:260px; font-weight:700; color:#fff; z-index:1; postion:absolute;">Enroll Now</a>	
							</div>
					<div class="mySlides" style="position:absolute; margin-top:0px;">
					     <img class="" src="images/banner/pic1.jpg" style="width:675px; height:450px; ">								<h2 style="color:#fff; margin-top: -320px;
    margin-right: 35px;
    text-align: right;font-size: 36px; font-weight:1000; line-height: 50px;text-transform: none; margin-bottom: 20px;">
GLOBAL <br>EDUCATION<br>EXPERTS</h2>
    						<a href="form.php" style="border:3px solid #fff; padding:10px; margin-left:260px; font-weight:700; color:#fff; z-index:1; postion:absolute;">Enroll Now</a>	
							</div>
					 

					 <div class="mySlides" style="position:absolute; margin-top:0px;">
					      <img class="" src="images/banner/pic4.jpg" style="width:675px; height:450px; ">
								<h2 style="color:#fff; margin-top: -320px;
    margin-right: 35px;
    text-align: right;font-size: 36px; font-weight:1000; line-height: 50px;text-transform: none; margin-bottom: 20px;">FINISHED 
<br>YEAR 12TH<br>WHAT NEXT?</h2>
    							<a href="form.php" style="border:3px solid #fff; padding:10px; margin-left:260px; font-weight:700; color:#fff; z-index:1; postion:absolute;">Enroll Now</a>
							</div>
							

							
					  
					</div>
					
					
				
					<div class="right">
						
							<img src="images/banner/left.jpg" style="width:100%; height:450px; ">
							<div class="right-text" style="position:absolute; margin-top:0px;">
								<h2 style="color:#fff; margin-top: -410px;
    margin-left: 35px;
    text-align: center;font-size: 50px; line-height: 50px;font-weight: 700;text-transform: uppercase; margin-bottom: 20px;font-weight: 800;">SHAPING STUDENTS LIVES AND CAREERS</h2>
    							<a href="contact.php" style="border:3px solid #fff; padding:10px; margin-left:260px; font-weight:700; color:#fff; z-index:1; postion:absolute;">Book an Appointment</a>
							</div>
						
					</div>
				
				 
				
			</div>
			<!-- end hero-header -->
			

			<div class="bg-light pt-80 pb-50">
			
				<div class="container">

					<div class="row">
					
						<div class="col-sm-12  col-md-8 col-xs-12">
						
							<div class="section-title" >
							
								<h2 style="margin-left:400px; margin-top:20px" >Find Internship</h2>
								
							</div>
						
						</div>
					
					</div>
					
					<div class="category-group-wrapper" >
					
						<div class="container" style="margin-top:0px;">
			
							<div class="row">
				
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="fas fa-tv"></i>
										</div>
										
										<h5>Computer &amp; IT</h5>
										
										
									
									</div>
									
								</div>
								
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="fas fa-building"></i>
										</div>
										
										<h5>Engineering</h5>
										
									
									
									</div>
									
								</div>
								
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="far fa-heart"></i>
										</div>
										
										<h5>Customer Service</h5>
										
									
									
									</div>
									
								</div>
								
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="fas fa-chart-line"></i>
										</div>
										
										<h5>Marketing</h5>
										
										
									
									</div>
									
								</div>
								
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="fas fa-sliders-h"></i>
										</div>
										
										<h5>Operations</h5>
										

									
									</div>
									
								</div>
								
								<div class="col-md-4 col-sm-12 col-xs-12">
								
									<div class="category-group">
									
										<div class="icon">
											<i class="fas fa-shield-alt"></i>
										</div>
										
										<h5>Insurance</h5>
										
										
									
									</div>
									
								</div>
								
							</div>
							
						</div>

					</div>
					
					

				</div>
				<section id="carousel">    				
	<div class="container" style="margin-top:0px;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				     <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
				      <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="active item">
				        	
				    	<blockquote>
				    	    <h2>Career Counselling</h2>
				    		<p>If you are confused about which Career to choose then "Quixotic Corporate Services" guides you through the maze of questions to find solutions best suited to your profile and / or parameters ensuring you choose the best Career Path.</p>
				    		<a href="career.php">Click Here</a>
				    	
				    </div>
				    	</blockquote>
				    	
				    <div class="item">
				        	
				    	<blockquote>
				    	    <h2>Countries We Represent </h2>
				    		<p>We represenets institutions across several countries
				    		UK, USA, Canada, Australia, New Zealand, Singapore, Ireland, Switzerland, France,
				    		 Malaysia, Dubai, Germany, Denmark, Spain. </p>
				    		<a href="country.php">Click Here</a>
				    	</blockquote>
				    	
				    	
				    </div>
				    <div class="item">
				        	
				    	<blockquote>
				    	    <h2>Ultimate Guide For Education Overseas </h2>
				    		<p>Quixotic Service is your ultimate guide for education
				    		overseas. Our only aim is to assist our students to conveniently accomplish their goal of studying abroad.
				    		 </p>
				    		<a href="help.php">Click Here</a>
				    	</blockquote>
				    	
				    	
				    </div>
				    <div class="item">
				        	
				    	<blockquote>
				    	    <h2>Visa Assistance </h2>
				    		<p>We help in entire Visa process like, filling up applications, preparing financial statements,
				    		 and also guidance and training for mock interviews and much more.
				    		 </p>
				    		<a href="visa.php">Click Here</a>
				    	</blockquote>
				    	
				    	
				    </div>
				  
				  </div>
				</div>
			</div>							
		</div>
	</div>
</section>						
						



			<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container" style="margin-left:15px; margin-top:0px;">
					
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
				
				<div class="bottom-footer" style="    margin-bottom: -60px;">
				
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/owl-carousel/owl.carousel.min.js"></script>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>

</html>