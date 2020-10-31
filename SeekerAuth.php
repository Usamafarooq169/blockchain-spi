<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
  <title>Blockchain & SE - Sign In / Sign Up</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Blockchain">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />

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
              <li class="scroll active"> <a href="SeekerAuth.php" onclick="openPage()" <?php session_destroy(); ?>>Signin / Signup </a></li>
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
          <div class="row">
            <div class="col-lg-6">
              <div class="contact">
                <h4 class="text-white text-center mb-4"><u>Register Yourself in BBSPI</u></h4>
                <!-- Success Msg -->
                <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Registeration Successfull.</div>

                <!-- FORM -->
                <form action="register.php" role="form" id="contact_form" class="contact-form signup-form authForm" method="post">
                  <ul class="row nolist-style">

                    <div class="input-group mb-3 col-sm-12">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                      </div>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3 col-sm-12">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-square"></i></span>
                      </div>
                      <input type="Email" class="form-control" name="email" id="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3 col-sm-12">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" minlength="8" required class="form-control" name="password" id="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>

                    <div style="width: 210px;">


                      <select name="type" id="type" style="width: 180px; height:40px;">
                        <option value="" disabled selected hidden>Choose Your Role...</option>
                        <option value="seeker">Seeker</option>
                        <option value="Expert">Expert</option>
                        <option value="Facilitator">Facilitator</option>

                      </select>

                    </div>
                    <li><br><br></li>

                    <li class="col-sm-12 text-left">

                      <button type="submit" class="btn btn-inverse" value="submit" id="btn_submit_signup">Signup <i class="fas fa-user-plus"></i> </button>
                    </li>
                  </ul>
                </form>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="contact">
                <h4 class="text-white text-center mb-4"><u>Login to the System</u></h4>
                <!-- Success Msg -->
                <div id="contact_message_login" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Login Successfull</div>

                <!-- FORM -->
                <form action="signin.php" role="form" id="contact_form" class="contact-form signin-form authForm" method="post">
                  <ul class="row nolist-style">
                    <div class="input-group mb-3 col-sm-12">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-square"></i></span>
                      </div>
                      <input required type="Email" class="form-control" name="email" id="email_login" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3 col-sm-12">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" minlength="8" required class="form-control" name="password" id="password_email" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>

                    <div style="width: 210px;">


                      <select name="type" id="type" style="width: 180px; height:40px;">
                        <option value="" disabled selected hidden>Choose Your Role...</option>
                        <option value="seeker">Seeker</option>
                        <option value="Expert">Expert</option>
                        <option value="Facilitator">Facilitator</option>

                      </select>

                    </div>


                    <li><br><br><br><br><br></li>
                    <li class="col-sm-12 text-left">
                      <button type="submit" class="btn" value="submit" id="btn_submit_signin">Signin <i class="fas fa-sign-in-alt"></i></button>
                    </li>
                  </ul>
                </form>
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
    <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>