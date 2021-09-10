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
					<h1>Coded Messaging System Project</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
					<h1>Status</h1>
				</div>

				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end my-auto">
					<h5>September 2018 - December 2018</h5>
				</div>

				<div class="col">
					<p>
						This is a second year group project for my electronic systems engineering degree program at Conestoga College. 
						Unfortunately the information for this project is scattered. As new pieces are discovered, this page will be updated.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Relevant Skills & Tools</h1>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>C</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Compression</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Circuit Design</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Circuit Analysis</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>RS-232 Comms</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>FSK Modulator & Demodulator</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Multisim</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Summary</h1>
				</div>

				<div class="col">
					<p>
						The purpose of this project was to develop a PC-based texting system for offices. 
						Utilizing a text-based interface, users could send messages with a user defined address (name) and a destination address (name). 
						An RS-232 connection was made between the host PC and a FSK modulator and demodulator. This allowed the message to be transmitted to other users. 
					</p>
					<div class="d-flex justify-content-center">
						<img src="imgs/cms-fig-1.jpg" alt="Coded Messaging System Main Menu" class="col-12 col-md-8 col-lg-4">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Details</h1>
				</div>

				<div class="col">
					<p>
						I focused on designing the menu interface code. 
						I setup an error function that would be wrapped around most function calls and would handle any errors that appeared. 
						The user had the option of sending a single message, sending multiple messages, receiving a message, looking in a phone book to see other users, 
						as well as sending a frame (adding a header to the message with more details). 
						The software flow can be found below.
					</p>
					<div class="d-flex justify-content-center">
						<img src="imgs/cms-fig-2.jpg" alt="Coded Messaging System Software Flow" class="col-12 col-md-10 col-lg-6">
					</div>

					<p>
						We also had to design a circuit that would modify the square-wave going to the FSK modulator. We needed to adjust the voltage range from 0V - 5V to 2.4 - 2.6V.
					</p>
					<div class="d-flex justify-content-center">
						<img src="imgs/cms-fig-3.jpg" alt="Coded Messaging System Voltage Divider" class="col-12 col-md-8 col-lg-4">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Documentation</h1>
				</div>

				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<a href="https://github.com/JKTurcotte/Coded_Messaging_System" class="border border-2"><img src="/imgs/github.ico" alt="Github Link Icon" class="d-inline link-icons mx-1">Code Base</a>
				</div>

				<div class="col-12 d-flex justify-content-center justify-content-md-start my-2">
					<a class="btn btn-primary home-downloads" href="docs/cms-report.pdf" role="button">Project Report</a>
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
