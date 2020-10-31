<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">

  <title>Blockchain & SE - Home</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/main.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="fonts/flaticon.css" rel="stylesheet">

  <!-- JavaScripts -->
  <script src="js/modernizr.js"></script>

  <!-- Online Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">


</head>

<body>

  <div id="loader">
    <div class="position-center-center">
      <div class="ldr"></div>
    </div>
  </div>

  <!-- Wrap -->
  <div id="wrap">

    <!-- header -->
    <header class="sticky">
      <div class="container">

        <!-- Logo -->
        <div class="logo"> <a href="index.php">
            <img class="img-responsive img-logo" src="images/logoo.png" alt="">
            <span class="logo-catchline">Blockchain-Based<br> Software Engineering</span></a>
        </div>
        <nav class="navbar ownmenu navbar-expand-lg ">
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span><i class="fas fa-bars"></i></span> </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav">
              <li class="scroll active"><a href="./index.php" onclick="openPage()">Home</a></li>
              <li class="scroll"> <a href="#about">Why BBSPI</a> </li>
              <li class="scroll"> <a href="./seekerAuth.php">About Us</a> </li>
              <li class="scroll">

                <a href="SeekerAuth.php" onclick="openPage()">Log out</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="clearfix"></div>
    </header>

    <!-- HOME MAIN -->


    <section class="simple-head" data-stellar-background-ratio="0.5" id="hme">
      <!-- Particles -->
      <div id="particles-js" class="home"></div>
      <div class="position-center-center">
        <div class="container text-center">
          <p>Welcome <?php echo $_SESSION['userN'];?></p>
          <h1>You have already uploded your SRS to seek Improvements </h1>
          <p>You can choose any of the given options.</p>
          <a href="./statusCheck.php" class="btn" style="width: 250px;">Check<br> Status</a>
          <a href="./seekerDash.php" style="width: 250px;" onclick="openPage()" class="btn btn-inverse">Upload <br> new SRS</a>
        </div>
      </div>
    </section>

    <!-- Content -->
    <div id="content">

      <!-- Why Choose Us -->










    </div>

    <!-- Footer -->
    <footer id="contact" class="pt-4 pb-2 text-center">
      <p class=" m-0">Blockchain-Based Software Engineering © 2020 . All rights Reserved</p>
      <img style="max-width:40px;" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/fa/COMSATS_Logo.svg/1200px-COMSATS_Logo.svg.png" alt="">
    </footer>
  </div>

  <!-- Script -->
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>