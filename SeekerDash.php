<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
  <title>BBSPI File Upload</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Blockchain">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
    .button {
      background-color: #4CAF50;
      /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>




  <!-- Custom CSS -->
  <link href="css/main.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="fonts/flaticon.css" rel="stylesheet">
  <link href="css/form.css" rel="stylesheet">

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


              <li class="scroll">

                <a href="SeekerAuth.php" onclick="openPage()">Logout </a>
              </li>
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
            <div class="contact" style="background-color: #dfe6e9;">
              <!-- <h4 class="text-white text-center mb-4">Estimation Seeker Login</h4> -->

              <div id="contact_message_login" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Login Successfull</div>
              <div class="container" style="background-color: #dfe6e9;">
                <h3 style="margin-left: -2%; "> Welcome <u><?php echo $_SESSION['userN']; ?></u> </h3>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-25">
                      <label for="fname">Project Name: </label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="pname" name="pname" placeholder="Enter Your Project Name here.... ">
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-25">
                      <label for="country">Appraisal Delivery Deadline: </label>
                    </div>
                    <div class="col-75">
                      <select name="deadline" id="deadline">
                        <option value=7>1 Week (Express)</option>
                        <option value=14>2 Weeks (Rapid)</option>
                        <option value=21>3 Weeks (Fast)</option>
                        <option value=28>4 Weeks (Normal)</option>
                      </select>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-25">
                      <label for="country">Current CMMI Level of Organization: </label>
                    </div>
                    <div class="col-75">
                      <select name="curLevel" id="curLevel">
                        <option value=1>Level 1 (Initial)</option>
                        <option value=2>Level 2 (Managed)</option>
                        <option value=3>Level 3 (Defined)</option>
                        <option value=4>Level 4 (Quantitatively Managed)</option>
                        <option value=5>Level 5 (Optimizing)</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="country">Desired CMMI Level of Improvement: </label>
                    </div>
                    <div class="col-75">
                      <select name="desLevel" id="desLevel">
                        <option value=1>Level 2 (Managed)</option>
                        <option value=2>Level 3 (Defined)</option>
                        <option value=3>Level 4 (Quantitatively Managed)</option>
                        <option value=4>Level 5 (Optimizing)</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="fileUpload">Upload Your SRS: </label>
                    </div>
                    <div class="col-75">
                      <input type="file" accept=".pdf" name="file" id="file">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="subject">More Details:</label>
                    </div>
                    <div class="col-75">
                      <textarea id="subject" name="subject" placeholder="Any further considerations.." style="height:150px"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <button class="button" type="submit" value="Upload Image" name="submit" style="margin-left: 83.60%; margin-top: 2%;">Submit Details</button>
                  </div>
                </form>
              </div>

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