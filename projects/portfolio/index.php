<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Justin Turcotte - Portfolio</title>
		<link rel="logo icon" type="image/png" href="/imgs/logo.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap & Stylesheet Links -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- CSS Stylesheet -->
		<link rel="stylesheet" href="/css/style.css">
	</head>
		
	<body>
		<?php 
      require($_SERVER['DOCUMENT_ROOT'] . '/html/header.html'); 
    ?>

		<div class="container my-5">
			<div class="row">
				<div class="col-12 d-flex justify-content-center my-3 text-center">
					<h1>Web Portfolio Project</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
					<h1>Status</h1>
				</div>

				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end my-auto">
					<h5>August 2021 - September 2021</h5>
				</div>

				<div class="col">
					<p>
						This is an independent project I decided to pursue in order to create a place for my work that others will be able to see. 
						My resume can only contain surface level details. I'm hoping this site can help provide more information to those who are curious. 
						Also this serves as a record for me to reference later. Due to the nature of this, the site will be updated over time but 
						the initial project of building the site is complete.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Relevant Skills & Tools</h1>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>HTML</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>CSS</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>JavaScript</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>PHP</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Bootstrap</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Summary</h1>
				</div>

				<div class="col">
					<p>
						This project demonstrates various skills such as website design. While I did not create the artistic aspect of this website, 
						credit to <a href="https://kdesigns15.wixsite.com/portfolio">Kirsten Slugoski</a> for that, I did handle all technical aspects except hosting. Hosting is done by a third party. 
						Augmented by Bootstrap, I used appropriate HTML, CSS, JavaScript, and PHP to actualize the design of the website and bring it to life.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Details</h1>
				</div>

				<div class="col">
					<p>
						Before jumping into the code, I first took a good look at the design that was given to me and I read through some of the Bootstrap documentation. 
						My goal was to re-familiarize myself with the tools I was going to be using. 
						Bootstrap is really handy when it comes to organizing the website layout and was a huge help.
					</p>
					<p>
						When I first attempted to design the website, I did not think about the mobile-first design philosophy. 
						As a result, I created a website that looked quite decent on your average desktop but was quite ugly on mobile. 
						To fix this, I went back and re-designed each page for mobile, then adjusted the layout to fit medium sized devices (like an iPad), 
						and finally adjusted once more for large devices (like a desktop).
					</p>
					<p>
						With the portfolio complete, it will be relatively easy for me to add future work to this site which is awesome. 
						It was definitely a good learning experience and I am much more comfortable with the tools I used.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Documentation</h1>
				</div>

				<div class="col d-flex justify-content-center justify-content-md-start">
					<a href="https://github.com/JKTurcotte/JKTurcotte.github.io" class="border border-2"><img src="/imgs/github.ico" alt="Github Link Icon" class="d-inline link-icons mx-1">Portfolio Github</a>
				</div>
			</div>
    </div>

		<?php 
      require($_SERVER['DOCUMENT_ROOT'] . '/html/footer.html'); 
    ?>
		
		<!-- Bootstrap JS & Dependencies Bundle -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>
