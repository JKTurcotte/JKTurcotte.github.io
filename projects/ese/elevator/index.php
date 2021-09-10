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
					<h1>Remote Elevator Project</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
					<h1>Status</h1>
				</div>

				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end my-auto">
					<h5>May 2020 - August 2020</h5>
				</div>

				<div class="col">
					<p>
						This is a third year group project for my electronic systems engineering degree program at Conestoga College.
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
						<li>C/C++</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Bootstrap</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>MySQL</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>XAMPP</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>RaspberryPi</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Summary</h1>
				</div>

				<div class="col">
					<p>
						This project was all about designing a website and code base that would control an elevators movement as it transitions to various floors. 
						Due to COVID, the project had to be modified so that the elevator was already prepared and we only need to add the appropriate software.
					</p>
					<p>
						We designed an appropriate website that would allow logged in users to control the elevator through a simple GUI interface. 
						A SQL database would be updated based on the inputs and that database was used as a reference to keep track of the elevators location 
						as well as hold commands that the elevator would then execute. A Raspberry Pi was used to host the website and control the elevator.
					</p>
					<img src="imgs/elevator-project-state-diagram.jpg" alt="Elevator Project State Diagram" class="col-12">
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Details</h1>
				</div>

				<div class="col">
					<p>
						My primary focus for this project was the design of the website as well as the diagnostics interface. I also provided assistance with the login component.
					</p>
					<p>
						For the website design, we decided to utilize bootstrap to help us make a responsive and modern website. 
						This was our first interaction with Bootstrap and provided a good learning experience towards responsive web design. 
						We used some CSS to provide a bit personality to the site as well as JavaScript for interactivity. 
						For example, the fillable forms and GUI buttons are first checked by JavaScript to see if there are any issues 
						(incorrectly formatted username or password for example). After the JavaScript clears the input, 
						PHP is used to reference a MySQL database and check login information against the stored users as well as record input commands from the elevator GUI. 
						C++ code on the Raspberry Pi is monitoring the MySQL database and looking for new commands such as "go to elevator 3". 
						It will then follow the flow chart above and update the MySQL database with the new location information as well as any other diagnostics.
					</p>
					
					<div class="d-flex justify justify-content-center">
						<iframe src="https://www.youtube.com/embed/Rb8ReiIAhCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>

					<p>
						The diagnostics portion was required for a deliverable. It essentially shows status information of the elevator such as: 
						the total number of requests received, the direction of the elevator, and the number of visits to each floor. 
						The visits to each floor are also displayed in graph format.
					</p>
					<iframe class="d-block mx-auto" src="https://www.youtube.com/embed/T6Tpw0KQ6rM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					
					<p>
						As a bonus feature, I created various verbal statements that the elevator would broadcast at certain times. 
						Such as: "elevator is now ascending", "the doors are opening", "the doors are closing", etc. 
						I also found a elevator music type sound and added that as the idle sound of the elevator. 
						The program managing the elevator itself was modified to accomodate these verbal statements.
					</p>
					<iframe class="d-block mx-auto" src="https://www.youtube.com/embed/rvHhyLy4Zbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

					<p>
						SABATH mode was also implemented. Essentially, the elevator will move slowly from floor to floor and require no input.
					</p>
					<iframe class="d-block mx-auto" src="https://www.youtube.com/embed/jU38srUYT44" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Related Demonstrations</h1>
				</div>

				<div class="col">
					<p>This is a complete demonstration of the website for those interested.</p>
					<iframe class="d-block mx-auto" src="https://www.youtube.com/embed/-ffnf9d-77E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start my-2">
					<h1>Documentation</h1>
				</div>

				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<a href="https://github.com/JKTurcotte/Remote_Elevator_Control_System" class="border border-2"><img src="/imgs/github.ico" alt="Github Link Icon" class="d-inline link-icons mx-1">Code Base</a>
				</div>

				<div class="col d-flex justify-content-center justify-content-md-start my-2">
					<a class="btn btn-primary home-downloads" href="docs/elevator-project-report.pptx" role="button">Project Presentation</a>
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
