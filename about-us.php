<?php
	session_start();

	?>

<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Of Site -->
	<title>About Us</title>
	<meta name="description" content="Website" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="Website">
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


	<!-- CSS Custom -->
	<link href="css/style.css" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
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
.mySlides {display:none;}
.not-transparent-header .container-wrapper{
  padding-top: 0px !important;
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
    margin-top: 480px;
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
      display: block;
    top: 200px;
    width: 400px;
    height: 240px;
    position: relative;
  }
}
</style>
</head>


<body class="not-transparent-header">

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
		<div class="main-wrapper">

			<!-- start hero-header -->
			<div class="breadcrumb-wrapper">
			
				<div class="container" style="margin-top:0px;">
				
					<ol class="breadcrumb-list">
						<li><a href="Home.php">Home</a></li>
						<li><span>About Us</span></li>
					</ol>
					
				</div>
				
			</div>
			<!-- end hero-header -->
			
			<div class="section">
			
				<div class="container" style="margin-top:0px;">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title bb">
							
								<h2 style="margin-top:0px;">About Us</h2>
								
							</div>

						</div>
					
					</div>
					
					<div class="row mb-30">
					
						<div class="col-md-10 col-md-offset-1">
					
							<p>We are pleased to introduce ourselves as India’s leading Education consultant based in New Delhi/Haryana, India, provides a dedicated consultancy services to the education.
							We recognized ourselves successfully in the field of education since many years.
							</p>

							<p>Our services include providing career management on different courses viz MBA, BBA, B.Tech,  Engineering, MBBS helping potent students for admission in various academic and professional organizations such as school, colleges, universities  in India and abroad.</p>
					
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-sm-6">
						
							<div class="featured-icon-01">
								
								<div class="icon text-primary">
									<i class="fas fa-bullseye"></i>
								</div>
								
								<div class="content">
									<h4>Our Mission</h4>
									<p>Our mission is to source internationally renowned academic institutions providing modern learning programs leading to bright international careers and guide help and assist students to gain easy access to such learning opportunities irrespective of gender, caste, creed or economic status. </p>
								</div>
							
							</div>
							
						</div>
						
						<div class="col-sm-6">
						
							<div class="featured-icon-01">
								
								<div class="icon text-primary">
									<i class="fas fa-globe"></i>
								</div>
								
								<div class="content">
									<h4>Our Vission</h4>
									<p>We believe that Human has pursued the knowledge through education and travelling around the world and in universe. Quixotic Corporate Services Pvt. Ltd.  has envisaged the help and assistance required in this human pursuit and looks forward to providing guidance and information on global opportunities and reputed sources of required education across the world to the young knowledge seekers. </p>
								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>

			<div class="image-bg-wrapper no-overlay" style="background-image:url('images/about-us-image-bg.jpg');">
			
			</div>
			
				<div class="section">
			
				<div class="container" style="margin-top:0px;">
					<div class="row" style="margin-top:50px;">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title bb" >
							
								<h2 style="margin-top:0px;">Our Objectives</h2>
								
							</div>

						</div>
					
					</div>
					
					<div class="row mb-30">
					
						<div class="col-md-10 col-md-offset-1">
					
							<p>Aim to achieve the mission and vision through following objectives:
							</p>

							<ul>
							<li>1	To gain adequate knowledge and skills for the key employees and professionally develop them to provide quality services to the clients</li>
								<li>	2	To achieve and surpass norms established by internationally reputed regulatory or certifying agencies and qualify to provide recruitment or migration services.</li>
								<li>	3	To obtain official representation status from internationally renowned institutions and introduce them to the students, thereby facilitating the students to enroll in their desired programs while aiding the cultural diversity objectives of institutions.</li>
								<li>		4	To actively participate in the marketing plans of principal foreign institutions by conducting events and providing infrastructure and administrative facilities as well as supplying market intelligence.</li>
								<li>		5	To guide and enable the students to achieve desired results in language, aptitude and competitive entrance tests.</li>
								<li>		6	To counsel and advise students to select most appropriate programs and institutions suitable to their academic qualifications and aptitude and assist them in admission formalities</li>
								<li>		7	To provide comprehensive solutions for sourcing programs, identifying institutions, improving language proficiency, admission applications, scholarships & funding, visa applications, pre-departure preparations and post-landing under the same roof.</li></ul>
					
						</div>
					
					</div>
				</div>
			</div>

			<div class="section pb-40" style="padding:0px;">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title bb mb-20" style="padding:0px;">
							
								<h2 style="margin-top:0px;">Our Team</h2>
								
							</div>

						</div>
					
					</div>
					
					<div class="team-wrapper">
						
						<div class="row">
						
						
						
							<div class="col-xss-12 col-xs-6 col-sm-6 mv-15">
							
								<div class="team-item">
									
									<div class="image">
										
										<h4>We drive success </h4>
										<p>The management team QCS Pvt. Ltd. is a fine blend of intellect, experience, skill and vision. We believe that quality is something that percolates from the top of the organization. And this helps us create student success stories.</p>
									</div>
									
									
									
								</div>
							
							</div>
							
							<div class="col-xss-12 col-xs-6 col-sm-6 mv-15">
							
								<div class="team-item">
									
									<div class="image">
										<h4>Professionals at work</h4>
										<p>From savvy counselors to a dynamic CEO, from documentation experts to strategists, we are a cohesive team that believes in bringing together diverse talents and varied experiences together to achieve common goals. </p>
										
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