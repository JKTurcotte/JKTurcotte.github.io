<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
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
                  <a class="nav-link" href="/projects/">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/contact/">Contact</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>
    </header>
    
    <div class="container my-5">
      <div class="row mx-auto w-custom">
        <div class="col-12">
          <h1 class="text-center">Contact Me</h1>
        </div>
        <div class="col">
          <form id="contactForm" class="needs-validation" method="post" action="php/contact.php" id="contact" novalidate>
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstNameHelp" placeholder="Justin">
                <div id="firstNameHelp" class="form-text">Your first name if you want to add it.</div>
              </div>
              <div class="col-sm-12 col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="lastNameHelp" placeholder="Turcotte">
                <div id="lastNameHelp" class="form-text">Your last name if you want to add it.</div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="justin@kturcotte.me" required>
                <div class="invalid-feedback">
                  Please provide an email so I can respond to your message.
                </div>
                <div id="emailHelp" class="form-text">Your email is only used to tell me who to respond to. You can also contact me manually at justin@kturcotte.me.</div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" aria-describedby="subjectHelp" placeholder="Thank You" required>
                <div class="invalid-feedback">
                  Please provide the subject of the email.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Thank you for visiting my site! I look forward to hearing from you!" required></textarea>
                <div class="invalid-feedback">
                  Please enter a message for the email.
                </div>
              </div>
            </div>
            <div clas="row">
              <div class="col d-grid gap-2 my-1">
                <button id="submitBtn" type="submit" class="btn btn-primary contact-submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="row w-75 my-5 mx-auto justify-content-center">
        <div class="col-12">
          <h1 class="text-center">Additional Links</h1>
        </div>
        <!-- Can put other relevant links here too -->
        <div class="col-auto">
          <a href="https://www.linkedin.com/in/justin-turcotte/"><img src="/imgs/linkedin.ico" alt="Linkedin Link Icon" class="d-block mx-auto contact-icon"></a>
        </div>
        <div class="col-auto">
          <a href="https://github.com/JKTurcotte"><img src="/imgs/github.ico" alt="Github Link Icon" class="d-block mx-auto contact-icon"></a>
        </div>
      </div>
    </div>

    <?php 
      require($_SERVER['DOCUMENT_ROOT'] . '/html/footer.html'); 
    ?>

    <!-- Bootstrap JS & Dependencies Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    <!-- Form JS -->
    <script type="text/javascript" src="js/form-check.js"></script>
  </body>
</html>