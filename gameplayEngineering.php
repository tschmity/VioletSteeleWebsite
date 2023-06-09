<?php
	$page = "gameplay";
?>

<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Gameplay</title>
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
									<h2>Gameplay</h2>
									<p>Violet Steele is focused around stealthing and interacting with your environment to make it through the levels.
									   AI will patrol your objectives and will chase you down if they spot you. This video covers the first 2 areas Violet
									   will have to get through to beat the game.
									</p>
								</header>
								<center>
								<iframe width="720" height="480" src="https://www.youtube.com/embed/uWWrQzgqdaM" title="Violet Steele Gameplay" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
								</center>

								<br>

								<!-- AI -->
								<h2>AI</h2>
								<p>As the AI programmer, it was my job to create AI that not only acted realisic, but also react to their surroundings accordingly</p>
								<p>Each robot uses a behavior tree to determine their actions, by default they will walk around assigned patrol points placed around the map.</p>
								<p>They will react to sound and sight, with sight filling a bar above the players head. The bar will fill faster the closer the player is to 
								   the robot and once filled, will chase them.</p>
								<center>
								<img src="images/Gameplay/VioletRobots.png" alt="Robots" width="800px">
							    </center>
								
								<br>

								<!-- Scan -->
								<h2>Scan</h2>
								<p>A problem that we ran into is that players had a hard time finding what objects they needed to/could interact with in each level.</p>
								<p>To fix this, I added a post process material that would increase in size when the player pressed their scan ability.</p>
								<p>A trace would follow the material and tell any objects that <em>could</em> highlight to highlight a certain color.</p>
								<center>
								<img src="images/Gameplay/VioletScan.png" alt="Scan" width="800px">
							    </center>

								<br>

								<!-- Throw -->
								<h2>Throw</h2>
								<p><strong>Problem:</strong> Players could not effectively use the throw mechanic to distract guards.</p>
								<p><strong>Solution:</strong> I added a prediction path for the throw mechanic so that players could aim where they wanted and accurately throw the gear.</p>
								<center>
								<img src="images/Gameplay/VioletThrow.png" alt="Throw" width="800px">
							    </center>

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