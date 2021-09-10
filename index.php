<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Justin Turcotte - Portfolio</title>
		<link rel="logo icon" type="image/png" href="imgs/logo.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap & Stylesheet Links -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- CSS Stylesheet -->
		<link rel="stylesheet" href="/css/style.css">
	</head>
		
	<body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
              <img src="/imgs/logo.png" alt="Justin's Logo" class="d-inline menu-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/projects/">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact/">Contact</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>
    </header>

		<div class="container my-5">
			<div class="row w-75 mx-auto my-5">
				<div class="col text-center">
						<p id="home-intro-text">Hey, I'm <b>Justin!</b> <br />
							I obtained a Bachelors in Electronic Systems Engineering
							from Conestoga College in the Kitchener-Waterloo area. <br />
							It's so nice to meet you!
						</p>
				</div>
			</div>
			<div class="row mx-auto my-5">
				<div id="carouselFeatured" class="carousel slide carousel-dark" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselFeatured" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselFeatured" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselFeatured" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<a href="projects/ese/wave/"><img src="projects/imgs/wave-caption.jpg" class="d-block w-100 mx-auto portfolio-img"></a>
							<div class="carousel-caption d-none">
								<h5>WAVE: Paper receipt alternative.</h5>
							</div>
						</div>
						<div class="carousel-item">
							<a href="projects/portfolio/"><img src="projects/imgs/web-portfolio-caption.jpg" class="d-block w-100 mx-auto portfolio-img"></a>
							<div class="carousel-caption d-none">
								<h5>Web Portfolio: A website to showcase my abilities.</h5>
							</div>
						</div>
						<div class="carousel-item">
							<a href="projects/ese/cms/"><img src="projects/imgs/coded-messaging-caption.jpg" class="d-block w-100 mx-auto portfolio-img"></a>
							<div class="carousel-caption d-none">
								<h5>Coded Messaging System: Compressed transmission through UART.</h5>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselFeatured" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselFeatured" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
			
			<div class="row text-center text-md-start">
				<div class="col-12">
					<h1>About Me</h1>
				</div>
			</div>
			
			<div class="row">
				<div class="col-12">
					<div class="clearfix">
						<img src="imgs/self-portrait.jpg" alt="Justin's Portrait" class="col-6 col-lg-4 float-end">
						<p>
							Hi! My name is Justin Turcotte. I am a newly graduated student who obtained a Bachelors degree in Electronic Systems Engineering from Conestoga College.
							I'm familiar with embedded systems and have personally worked with Nucleo boards, Arduino, and Raspberry Pi for various projects. Although I was taught
							embedded programming in C, I have personally been expanding my skillset to encompass a wider field such as: object oriented programming, 
							web development (this website for example), game development, and algorithms. Please feel free to take a look at the various projects I've posted here. 
							They will all have an associated github link. There will also be appropriate demonstration images or videos when possible. Also feel free to click the 
							buttons below to download a copy of my resume and/or cover letter.
						</p>

            <div class="col col-md-12 text-center text-md-start order-md-3">
              <a class="btn btn-primary home-downloads" href="docs/cover-letter.pdf" role="button">Cover Letter</a>
              <a class="btn btn-primary home-downloads" href="docs/resume.pdf" role="button">Resume</a>
            </div>
					</div>
				</div>
			</div>
		</div>

		<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
      <div id="submissionToast" class="toast" role="status" aria-live="polite" aria-atomic="true">
        <div class="toast-header">
          <strong>Thank You!</strong>
          <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Thanks for contacting me! I'll get back to you as soon as I can.
        </div>
      </div>
    </div>

    <?php 
      require($_SERVER['DOCUMENT_ROOT'] . '/html/footer.html'); 
    ?>
		
		<!-- Bootstrap JS & Dependencies Bundle -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
		<?php
		if(isset($_SESSION['contact']))
		{
			if($_SESSION['contact'])
			{
				echo("<script type='text/javascript' src='js/toast.js'></script>");
				$_SESSION['contact'] = false;
			}
		}
		?>

	</body>
</html>
