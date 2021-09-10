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
					<h1>Anti-Nail Biting Project</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
					<h1>Status</h1>
				</div>

				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end my-auto">
					<h5>May 2021 - August 2021</h5>
				</div>

				<div class="col">
					<p>
						This was originally a group project for my final school semester. This project is still being worked on with a member from the original team. 
						We started this project for a class in the last semester of our program and is a passion for my team-member so we plan to continue work on it.
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
						<li>PCB Design</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Soldering</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>UART</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>I2C</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Arduino</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Adafruit Feather Express NRF52840</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Multisim</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Altium</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Summary</h1>
				</div>

				<div class="col">
					<p>
						This project was created for a project class in my final semester of my engineering course at Conestoga College. One of my classmates suffers with 
						chronic nail biting. After trying many of the available remedies to this affliction, and with no success, we teamed up with another classmate to create a 
						new method that will help fight against chronic nail biting. Our solution uses a vibration actuator and an ultrasonic sensor to keep your nails and teeth apart.
					</p>

					<div class="d-flex justify-content-center my-2">
						<img src="imgs/anb-fig-1.jpg" alt="ANB System Overview" class="col-12 col-md-10 col-lg-6">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Details</h1>
				</div>

				<div class="col">
					<p>
						We divided this project into three primary components: the data processor, the ultrasonic sensor, and the haptic feedback component. I was mainly responsible 
						for the haptic feedback component. This meant taking the lead in determining which type of vibration actuator we would use as well as implementing it in both 
						software and hardware. Covid prevented us from being together during this project and since these primary components were so intertwined, all the components 
						were sent to me. This meant my tasks bled into the sensor area as I would have to work with my teammate to implement the software & hardware for the ultrasonic 
						sensor. Due to the short timeframe of this project, a Adafruit Feather Express board equipped with an NRF52840 Bluetooth chip was used to link the vibration 
						actuator and ultrasonic sensor. We intended to design our own micro-controller to adhere to our required footprint. However, time limitations prevented this.
					</p>
					<p>
						Beginning with the actuator, I first had to research what kinds of vibration actuators there are. Through this research I came across coin actuators which are 
						essentially a coreless DC motor. It turns on when given about 3V DC and draws. Other options were a Piezo buzzer or a magnetic buzzer but both of those were 
						either out of our price range or required too much power for the Adafruit board to handle. 
					</p>

					<div class="d-flex justify-content-center my-2">
						<img src="imgs/anb-fig-2.jpg" alt="ANB Buzzer Circuit" class="col-12 col-md-10 col-lg-6">
					</div>

					<p>
						The coin actuator chosen required 3V DC and 80mA of current to run. The current requirement was too much for the GPIO pins of the adafruit board, so we 
						pulled from a separate dedicated 3V3 pin. This meant we also needed a transistor in order to enable and disable the 3V3 connection to the coin actuator. 
						Two appropriate circuits were made, one with a BJT transistor, another with a MOSFET. Simulations showed the MOSFET being less efficient in terms of voltage 
						drop than the BJT, so for the initial prototyping, we leaned towards a BJT transistor (2N2222). A capacitor and diode were placed in parallel to the buzzer 
						in order to provide protection against reverse current, and voltage spikes.
					</p>

					<div class="d-flex justify-content-center my-2">
						<iframe src="https://www.youtube.com/embed/nz00poK9Utg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>

					<p>
						Our solution to nail biting is essentially: if the hand is near the mouth, vibrate the actuator to notify the individual that they are biting their nails. 
						This becomes an issue when the individual wants to do other tasks like eat. For this, we added a push button. When pressed, it toggles the device on and off.
					</p>

					<div class="d-flex justify-content-center my-2">
						<iframe src="https://www.youtube.com/embed/CGn6KtGBMgg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>

					<p>
						For the ultrasonic sensing, we originally wanted to use the CH101 Ultrasonic Sensor from TDK InvenSense. This sensor is lightweight, has a small footprint, 
						and is powerful enough for our needs. However, it comes equipped with its own micro controller for advanced sensing. As such the API to use it is quite 
						complicated and requires more time to decipher since our Adafruit board is currently not natively supported. As such, for a proof of concept, we defaulted 
						to a simpler ultrasonic sensor.
					</p>

					<div class="d-flex justify-content-center my-2">
						<img src="imgs/anb-fig-3.jpg" alt="ANB Buzzer Circuit" class="col-6 col-md-4 col-lg-2">
					</div>

					<p>
						This ultrasonic sensor requires 5V and a 10us trigger in order to detect its surroundings. The response is in micro-seconds and includes the time it 
						takes the sound wave to get to the object and back. Therefore, we need to divide the result in half and convert it to a distance: t=d/s -> d=ts. 
						The previous equation is a calculation for distance based on time and speed. Remembering the object time is given for both directions, we need to half this 
						time to get the actual distance of the object: d=(ts)/2. For the speed, we use the speed of sound (~340 meters per second).
					</p>

					<div class="d-flex justify-content-center my-2">
						<iframe src="https://www.youtube.com/embed/sHCOfeIFrt4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>

					<p>
						We received a lot of doubt in terms of how reliable this device would be or how it would even fit onto the body. So this section will cover that. 
						Essentially we thought up multiple designs ranging from an ear mount to a IR-enabled wrist band. We settled on a necklace idea where the vibration actuator 
						would be attached at the back of the neck, and the ultrasonic sensor would hang around chest level, pointed towards the mouth. The necklace needs to be rigid 
						so it approximately stays in place. It also needs to be flexible enough to put on and take off reliably. An easy to press button would also need to be 
						accessible. Currently, we have not been able to design this component. However, below is a video demonstrating how it should work. This video is not reliable 
						in terms of testing data as I am physically holding a bulky breadboard at my chest meaning I have complete control over its angle and distance. Despite this, 
						the video does serve the purpose of demonstrating how the device should operate and so is included.
					</p>

					<div class="d-flex justify-content-center my-2">
						<iframe src="https://www.youtube.com/embed/BoO6Q6cZCRk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Documentation</h1>
				</div>

				<div class="col d-flex justify-content-center justify-content-md-start">
					<a href="https://github.com/koolohms/anti-nail-biting" class="border border-2"><img src="/imgs/github.ico" alt="Github Link Icon" class="d-inline link-icons mx-1">Code Base</a>
				</div>

				<div class="col-12 d-flex justify-content-center justify-content-md-start my-2">
					<a class="btn btn-primary home-downloads" href="docs/anb-report.pdf" role="button">Project Report</a>
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
