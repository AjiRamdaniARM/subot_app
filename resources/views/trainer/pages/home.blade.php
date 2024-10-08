<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="images/favicon.png">
	<title>Edugo - Education Mobile Template</title>

	<link rel="stylesheet" href="{{asset('assets/css_front_trainer/materialize.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css_front_trainer/loader.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css_front_trainer/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css_front_trainer/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css_front_trainer/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css_front_trainer/style.css')}}">

</head>
<body>

	<!-- preloader -->
	<div class="loader-wrapper">
		<div class="loader-cube"></div>
	</div>
	<!-- end preloader -->

	<!-- navbar -->
	<div class="navbar">
		<div class="container">
			<div class="row">
				<div class="col s6">
					<div class="content-left">
						<a href="index.html">
							<h1>
								<span class="color-indigo1">E</span><span class="color-indigo2">D</span><span class="color-indigo3">U</span><span class="color-indigo4">G</span><span class="color-indigo5">O</span>
							</h1>
						</a>
					</div>
				</div>
				<div class="col s6">
					<div class="content-right">
						<a href="#slide-out" data-activates="slide-out" class="sidebar"><i class="fas fa-bars"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end navbar -->

	<!-- sidebar left -->
	<div class="sidebar-panel">
		<ul id="slide-out" class="collapsible side-nav">
			<li class="list-top">
				<div class="user-view">
					<img class="responsive-img" src="images/testimonial1.png" alt="">
					<h4>Marchel Agata</h4>
					<span>New York</span>
				</div>
			</li>
			<li>
				<div class="collapsible-header">
					<i class="fas fa-home"></i>Home<span><i class="fas fa-angle-right right"></i></span>
				</div>
				<div class="collapsible-body">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="index2.html">Home v2</a></li>
					</ul>
				</div>
			</li>
			<li><a href="course.html"><i class="fas fa-graduation-cap"></i>Course</a></li>
			<li><a href="teacher.html"><i class="fas fa-user"></i>Teacher</a></li>
			<li><a href="event.html"><i class="fas fa-calendar-alt"></i>Event</a></li>
			<li>
				<div class="collapsible-header">
					<i class="fas fa-clone"></i>Blog<span><i class="fas fa-angle-right right"></i></span>
				</div>
				<div class="collapsible-body">
					<ul>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="blog-single.html">Blog Single</a></li>
					</ul>
				</div>
			</li>
			<li>
				<div class="collapsible-header">
					<i class="fas fa-clone"></i>Pages<span><i class="fas fa-angle-right right"></i></span>
				</div>
				<div class="collapsible-body">
					<ul>
						<li><a href="about.html">About</a></li>
						<li><a href="features.html">Features</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="page-not-found.html">Page Not Found</a></li>
						<li><a href="pricing-table.html">Pricing</a></li>
					</ul>
				</div>
			</li>
			<li><a href="contact.html"><i class="fas fa-envelope"></i>Contact</a></li>
			<li><a href="login.html"><i class="fas fa-sign-in-alt"></i>Login</a></li>
			<li><a href="register.html"><i class="fas fa-user-plus"></i>Register</a></li>
			<li><a href="index.html"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
		</ul>
	</div>
	<!-- end sidebar left -->

	<!-- slider -->
	<div class="container">
		<div class="slide">
			<div class="slider-slide owl-carousel owl-theme">
				<div class="content">
					<div class="mask"></div>
					<img src="images/slider1.jpg" alt="">
					<div class="slider-caption">
						<h2>WELCOME TO EDUGO</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elite. Neque, iusto.</p>
					</div>
				</div>
				<div class="content">
					<div class="mask"></div>
					<img src="images/slider2.jpg" alt="">
					<div class="slider-caption">
						<h2>COMFORTABLE</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elite. Neque, iusto.</p>
					</div>
				</div>
				<div class="content">
					<div class="mask"></div>
					<img src="images/slider3.jpg" alt="">
					<div class="slider-caption">
						<h2>LEARNING MORE FUN</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elite. Neque, iusto.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end slider -->
	
	<!-- features -->
	<div class="features home2 segments">
		<div class="container">
			<div class="row">
				<div class="col s6">
					<div class="content">
						<i class="fas fa-phone"></i>
						<h5>Support</h5>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<i class="fas fa-globe-europe"></i>
						<h5>Online</h5>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<div class="content">
						<i class="fas fa-check"></i>
						<h5>Clean</h5>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<i class="fas fa-sync-alt"></i>
						<h5>Update</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end features -->

	<!-- popular course -->
	<div class="popular-course segments">
		<div class="section-title">
			<h3>Popular Course <a href="course.html">view all <i class="fas fa-long-arrow-alt-right"></i></a></h3>
		</div>
		<div class="popular-slide owl-carousel owl-theme">
			<div class="content">
				<a href="course-single.html">
					<img src="images/course1.jpg" alt="">
					<div class="text">
						<span>Computer</span>
						<h4>Web Design | Beginner</h4>
						<p>A wonderful serenity has taken possession of my entire soul, like these sweet adipisicing</p>
					</div>
				</a>
			</div>
			<div class="content">
				<a href="course-single.html">
					<img src="images/course2.jpg" alt="">
					<div class="text">
						<span>Science</span>
						<h4>Science Technology</h4>
						<p>A wonderful serenity has taken possession of my entire soul, like these sweet adipisicing</p>
					</div>
				</a>
			</div>
			<div class="content">
				<a href="course-single.html">
					<img src="images/course3.jpg" alt="">
					<div class="text">
						<span>computer</span>
						<h4>Digital Photography</h4>
						<p>A wonderful serenity has taken possession of my entire soul, like these sweet adipisicing</p>
					</div>
				</a>
			</div>
		</div>
	</div>
	<!-- end popular course -->

	<!-- testimonial -->
	<div class="testimonial home2 segments">
		<div class="testimonial-slide owl-carousel owl-theme">
			<div class="content">
				<img src="images/testimonial1.png" alt="">
				<div class="text">
					<h5>Andrea Gustavo</h5>
					<span>Teacher</span>
					<p>Consectetur adipisicing elit. Assumenda reprehenderit placeat deserunt esse</p>
				</div>
			</div>
			<div class="content">
				<img src="images/testimonial2.png" alt="">
				<div class="text">
					<h5>Brave Balder</h5>
					<span>Student</span>
					<p>Consectetur adipisicing elit. Assumenda reprehenderit placeat deserunt esse</p>
				</div>
			</div>
			<div class="content">
				<img src="images/testimonial3.png" alt="">
				<div class="text">
					<h5>John Doe</h5>
					<span>Teacher</span>
					<p>Consectetur adipisicing elit. Assumenda reprehenderit placeat deserunt esse</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonial -->

	<!-- footer -->
	<footer class="home2">
		<div class="container">
			<div class="wrap-logo">
				<h3>EDUGO</h3>
			</div>
			<div class="wrap-desc">
				<p>A wonderful serenity has taken possession of my entire soul, like these sweet</p>
			</div>
			<div class="wrap-social">
				<ul>
					<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
					<li><a href=""><i class="fab fa-instagram"></i></a></li>
					<li><a href=""><i class="fab fa-google"></i></a></li>
					<li><a href=""><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
			<div class="footer-text">
				<p>Copyright © All Right Reserved</p>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>