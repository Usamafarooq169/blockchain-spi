<?php
session_start();
include_once('connection.php');
$query = "select * from filerecord";
$results = mysqli_query($con, $query);


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>BBSPI Projects</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Blockchain">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.google.com/specimen/Oswald?sidebar.open=true&selection.family=Oswald:wght@600">

  <style>
    .button {
      background-color: #2c3e50;
      /* Green */
      border: none;
      color: white;
      width: 50%;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-family: oswald;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px;
    }
  </style>




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
        <div class="logo"> <a href="index.html">
            <img class="img-responsive img-logo" src="images/logoo.png" alt="">
            <span class="logo-catchline">Blockchain-Based<br> Software Engineering</span></a>
        </div>
        <nav class="navbar ownmenu navbar-expand-lg ">
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span><i class="fas fa-bars"></i></span> </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav">
              <li class="scroll"><a href="./index.php" onclick="openPage()">Home</a></li>
              <li class="scroll"> <a href="#about">Why BBSPI</a> </li>
              <li class="scroll"> <a href="./seekerAuth.php">About Us</a> </li>
              <li class="scroll"> <a href="SeekerAuth.php" onclick="openPage()">Logout </a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="clearfix"></div>
    </header>



    <!-- Content -->
    <div id="content">

      <section id="contact" class="auth">
        <div class="container-fluid">



          <div class="col-lg-12">
            <div class="contact" style="background-color: #ecf0f1;">
              <!-- <h4 class="text-white text-center mb-4">Estimation Seeker Login</h4> -->

              <div style="text-align:center">
                <ul>
                  <li>
                    <h5 style="margin-left: -75%; "> Welcome <i><u><?php echo $_SESSION['userN']; ?></u></i> </h5>
                  </li>
                  <li>
                    <h3><b>List of Available Projects</b></h3>
                  </li>
                  <li>
                    <u>Select anyone of the below to proceed further<u>
                  </li>
                </ul>
              </div>

              <ul>

                <?php

                while ($rows = mysqli_fetch_assoc($results)) {

                ?>


                  <form action="projselectionC.php" role="form" id="contact_form" class="contact-form signup-form authForm" method="post">


                    <button class="button" type="submit" value="<?php echo $rows['ProjectN']; ?>" name="submit" onclick="return confirm('Are you sure you want to select this project? Once Selected you may not be able to change it!');">
                      <?php echo $rows['ProjectN']; ?>
                    </button>

                  </form>

                <?php
                }
                ?>

              </ul>



            </div>
          </div>

        </div>
    </div>

    </section>


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