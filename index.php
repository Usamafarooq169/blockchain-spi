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

                <a href="SeekerAuth.php" onclick="openPage()">Sign in / Sign Up </a>
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
          <h1>Blockchain-Based Software Engineering </h1>
          <p>Using blockchain to transform traditional software engineering solutions.</p>
          <a href="#improvement" class="btn">Software Process<br> Improvement</a>
          <a href="./seekerAuth.php" onclick="openPage()" class="btn btn-inverse">Sign in to Your <br> Dashboard</a>
        </div>
      </div>
    </section>

    <!-- Content -->
    <div id="content">

      <!-- Why Choose Us -->
      <section class="why-choose padding-top-100 padding-bottom-100" id="about">
        <div class="container">

          <!-- Why Choose Us  ROW-->
          <div class="row">
            <div class="col-md-7 margin-top-60">

              <!-- Tittle -->
              <div class="heading margin-bottom-20">
                <h4>Blockchain-Based Software Engineering</h4>
              </div>

              <p>As blockchain moves beyond the hype and into business-critical systems, skills for
                blockchain-proficient software engineers are in serious demand. Enterprises world-wide and
                cross-industry are recognising the value that blockchain brings.</p>
              <p>Blockchain is a shared, replicated ledger that underpins technology such as Bitcoin. Blockchain's reach
                is wider than cryptocurrency however, as it sets out to provide the foundation for the next generation
                of business-to-business applications.</p>



            </div>

            <!-- Image -->
            <div class="col-md-5 text-right"> <img src="images/log123.png" alt="Blockchain Image"> </div>
          </div>


        </div>
      </section>



      <!-- ABOUT -->
      <section class="about about--process light-bg" id="improvement">
        <!-- Right Background -->
        <div class="main-page-section half_left_layout">
          <div class="main-half-layout half_left_layout"> </div>

          <!-- Left Content -->
          <div class="main-half-layout-container half_left_layout">
            <div class="about-us-con">
              <h3>Software Process Improvement</h3>
              <p>
                In Software Development, Software Process is a goal oriented activity that consists of partially ordered
                steps which are followed to achieve a goal in the context of engineering style software development. A software process in development can be a coding, testing, planning or a packaging process. For
                better quality, on time and within budget delivery of a product, these processes can be improved
                and the activity under which these processes are improved is known as Software Process Improvement (SPI)
                .
              </p>

            </div>
            <a href="./seekerAuth.html" class="btn">Seek <br>Improvement</a>
            <a href="./expertAuth.html" class="btn btn-inverse">Expert <br> Signup/Signin</a>
          </div>
        </div>
    </div>
    </section>




    <!-- Team Members -->
    <section class="team style-2 padding-top-100 padding-bottom-100" id="team">
      <div class="container">
        <div class="heading text-center">
          <h2>Our Team </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget pharetra ac,
            cursus sed sapien. Cras posuere ligula ut blandit varius. </p>
        </div>
        <ul class="team-small">
          <li><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" alt=""><a class="hover" href="#.">Usama Farooq </a></li>
          <li><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" alt=""><a class="hover" href="#.">Faraz Hussain </a></li>
          <li><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" alt=""><a class="hover" href="#.">Dr. Mansoor Ahmed </a></li>
          <li><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" alt=""><a class="hover" href="#.">Dr. Shahid Hussain </a></li>

        </ul>
      </div>
    </section>

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