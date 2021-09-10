<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justin Turcotte - Portfolio</title>
    <link rel="logo icon" type="image/png" href="/imgs/logo.png" />

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
                  <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/projects/">Portfolio</a>
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
      <div class="row my-5">
        <div class="col-12 text-center my-auto">
          <p>
            This page lists all the projects I have worked on. Feel free to click any of them for more information!
          </p>
        </div>
      </div>

      <!-- OK this is where projects will be listed -->
      <!-- Categories wanted: Embedded, Front End, Algorithms, Game Development but for now I don't have enough projects for this -->
      <!-- For now we will go with: Software & Hardware categories -->
      <!-- All projects will have an image & caption & will be clickable to bring to their associated page -->
      <div class="row my-5">
        <!-- Software projects here -->
        <div class="col-12 text-center my-auto">
          <h1>Software Projects</h1>
        </div>
        <div class="col-12 col-md-6 text-center my-2 my-md-0 border border-3">
          <figure>
            <a href="portfolio/"><img src="imgs/web-portfolio-caption.jpg" alt="Web Site Portfolio" class="d-block w-100 mx-auto my-2 img-responsive portfolio-img"></a>
            <figcaption><b>Web Site Portfolio: A way to demonstrate & expand my skillset.</b></figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-6 text-center my-2 my-md-0 border border-3">
          <figure>
            <a href="ese/elevator/"><img src="imgs/remote-elevator-caption.jpg" alt="Remote Elevator Control System" class="d-block w-100 mx-auto my-2 img-responsive portfolio-img"></a>
            <figcaption><b>Remote Elevator Control System: Control an elevator from the web.</b></figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-6 text-center my-2 my-md-0 border border-3">
          <figure>
            <a href="ese/cms/"><img src="imgs/coded-messaging-caption.jpg" alt="Coded Messaging System" class="d-block w-100 mx-auto my-2 img-responsive portfolio-img"></a>
            <figcaption><b>Coded Messaging System: Send compressed messages through UART.</b></figcaption>
          </figure>
        </div>
      </div>
      <div class="row my-5">
        <!-- Embedded projects here -->
        <div class="col-12 text-center my-auto">
          <h1 class="portfolio-category">Embedded Projects</h1>
        </div>
        <div class="col-12 col-md-6 text-center my-2 my-md-0 border border-3">
          <figure>
            <a href="ese/wave/"><img src="imgs/wave-caption.jpg" alt="WAVE Project" class="d-block w-100 mx-auto img-responsive portfolio-img"></a>
            <figcaption><b>WAVE: The modern replacement for paper receipts.</b></figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-6 text-center my-2 my-md-0 border border-3">
          <figure>
            <a href="ese/anb/"><img src="imgs/anb-caption.jpg" alt="Anti-Nail Biting Device" class="d-block w-100 mx-auto my-2 img-responsive portfolio-img"></a>
            <figcaption><b>Anti-Nail Biting Device: A new method to stop nail biting.</b></figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-6 text-center my-2 my-md-0 border border-3">
          <figure>
            <a href="ese/robot/"><img src="imgs/robot-caption.jpg" alt="Wireless Robot Project" class="d-block w-100 mx-auto my-2 img-responsive portfolio-img"></a>
            <figcaption><b>Wireless Robot Project: Gamepad controlled robot that connects via WiFi.</b></figcaption>
          </figure>
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