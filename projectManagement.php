<?php 
	$page = "projectManagement";
?>

<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Project Management</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.html">Home</a></h1>

						<!-- Nav -->
							<?php include("navBar.php"); ?>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper">
					<div class="container" id="main">

						<!-- Content -->
							<article id="content">
								<header>
									<h2>Project Management</h2>
									<p>I managed the Agile process for Violet Steele, overseeing project scope, planning 
										with a backlog, and utilizing Trello to facilitate collaborative task estimation 
										and team communication.</p>
								</header>
								<center>
									<h2>GAME DIRECTION</h2>
									<h3><em>Core Pillars</em></h3>
								</center>
								<br>
								<p>As the Project Manager for <em>Violet Steele</em>, I created a set of <strong>core design pillars</strong> that would 
									be looked to as reference by not only design, but used as the frame of reference for all disciplines, 
									guiding the vision for our game to hit the 3 pillars for the overall player experience.
								</p>
								<a href="#" class="image featured"><img src="images/ProjectManagement/VioletSteele_CorePillars.png" alt="" /></a>

								<p><strong>Manipulation Over Direct Confrontation</strong>- One of the key points of our game's vision is to use the environment to the 
									player's advantage, whether it be drawing enemies away from a location or eliminating them entirely.</p>

								<p><strong>Looming Sense of Danger</strong> - The immersive environment and sound design work together to create a palpable sense of urgency 
									and fear in the player as they navigate through the world.</p>
									
								<p><strong>Stealth Above All Else</strong> - The art of stealth takes center stage, challenging players to use their wits and cunning tactics 
									to sneak past their enemies</p>
								
								<center>
									<h3><em>Game Flow</em></h3>
								</center>
								<br>
								<a href="#" class="image featured"><img src="images/ProjectManagement/VioletSteele_GameplayLoop.png" alt="" /></a>

								<p>I also designed the <strong>core gameplay loop</strong> to promote player exploration of the world, allowing them to effectively utilize the
									scan feature to solve puzzles, unlock new areas, and evade the relentless robots that pursue them throughout gameplay.</p>
							
								<center>
									<h3><em>Sprint Management</em></h3>
								</center>
								<br>

<!-- TESTESTESTESTESTES -->

<div class="slideshow-container">

	<div class="mySlides fade">
	  <div class="numbertext">1 / 3</div>
	  <img src="images/ProjectManagement/trello_1.png" style="width:100%">
	  <div class="text">Trello Page 1</div>
	</div>
	
	<div class="mySlides fade">
	  <div class="numbertext">2 / 3</div>
	  <img src="images/ProjectManagement/trello_2.png" style="width:100%">
	  <div class="text">Trello Page 2</div>
	</div>
	
	<div class="mySlides fade">
	  <div class="numbertext">3 / 3</div>
	  <img src="images/ProjectManagement/trello_3.png" style="width:100%">
	  <div class="text">Trello Page 3</div>
	</div>
	
	<a class="prev" onclick="plusSlides(-1)">❮</a>
	<a class="next" onclick="plusSlides(1)">❯</a>
	
	</div>
	<br>
	
	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	</div>
	
	<script>
	let slideIndex = 1;
	showSlides(slideIndex);
	
	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}
	
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}
	
	function showSlides(n) {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
	</script>


<!-- TESTESTESTESTESTES -->
								<br>
								<p>Employing Agile methodology, I spearheaded our project's progress by conducting stand-ups, 
									managing project scope, and creating high-level plans with a project backlog using Trello. 
									I facilitated collaborative estimation of task size and user stories for upcoming sprints 
									using the Fibonacci Scale, ensuring that my team was fully engaged in the process. </p>

									<br>
							</article>

						<div class="row features">
							<section class="col-4 col-12-narrower feature">
								<div class="image-wrapper first">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
								</div>
								<header>
									<h3>Dolor sit consequat magna</h3>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
								vel sem sit dolor neque semper magna lorem ipsum.</p>
								<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
							<section class="col-4 col-12-narrower feature">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
								</div>
								<header>
									<h3>Dolor sit consequat magna</h3>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
								vel sem sit dolor neque semper magna lorem ipsum.</p>
								<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
							<section class="col-4 col-12-narrower feature">
								<div class="image-wrapper">
									<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
								</div>
								<header>
									<h3>Dolor sit consequat magna</h3>
								</header>
								<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
								vel sem sit dolor neque semper magna lorem ipsum.</p>
								<ul class="actions">
									<li><a href="#" class="button">Elevate my awareness</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header class="major">
							<h2>Euismod aliquam vehicula lorem</h2>
							<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit<br />
							dolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
						</header>
						<div class="row">
							<section class="col-6 col-12-narrower">
								<form method="post" action="#">
									<div class="row gtr-50">
										<div class="col-6 col-12-mobile">
											<input name="name" placeholder="Name" type="text" />
										</div>
										<div class="col-6 col-12-mobile">
											<input name="email" placeholder="Email" type="text" />
										</div>
										<div class="col-12">
											<textarea name="message" placeholder="Message"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Send Message" /></li>
												<li><input type="reset" value="Clear form" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="col-6 col-12-narrower">
								<div class="row gtr-0">
									<ul class="divided icons col-6 col-12-mobile">
										<li class="icon brands fa-twitter"><a href="#"><span class="extra">twitter.com/</span>untitled</a></li>
										<li class="icon brands fa-facebook-f"><a href="#"><span class="extra">facebook.com/</span>untitled</a></li>
										<li class="icon brands fa-dribbble"><a href="#"><span class="extra">dribbble.com/</span>untitled</a></li>
									</ul>
									<ul class="divided icons col-6 col-12-mobile">
										<li class="icon brands fa-instagram"><a href="#"><span class="extra">instagram.com/</span>untitled</a></li>
										<li class="icon brands fa-youtube"><a href="#"><span class="extra">youtube.com/</span>untitled</a></li>
										<li class="icon brands fa-pinterest"><a href="#"><span class="extra">pinterest.com/</span>untitled</a></li>
									</ul>
								</div>
							</section>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>