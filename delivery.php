<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'users');

$uName = $_SESSION['userN'];

$qu = " select * from users where username = '$uName'";
$result = mysqli_query($con, $qu);
$rows = mysqli_fetch_assoc($result);

$selectedProject = $rows['projectSelected'];
$email = $rows['email'];

$_SESSION['projSelected'] = $selectedProject;
// $_SESSION['userN'];

// $uName =  $rows['username'];

//Getting Project Name
// $name = $_POST['submit'];
// $_SESSION['projN'] = $name;
// include_once('connection.php');
// $userName = $_SESSION['userN'];
// $st = 'yes';
// $stP = 'selected';

// $query1 = "select * from filerecord WHERE ProjectN='$name'";
// $results1 = mysqli_query($con, $query1);

// $updExp1 = "UPDATE users SET projectSelected = '$name', status ='$st' WHERE username = '$userName' ";
// mysqli_query($con, $updExp1);


// while ($row1 = mysqli_fetch_array($results1)) {

//   $num = $row1['selections'];
// }
// $num += 1;


// $updExp = "UPDATE filerecord SET selections = '$num', status = '$stP' WHERE ProjectN = '$name' ";
// mysqli_query($con, $updExp);

// $query = "select * from filerecord WHERE ProjectN='$name'";
// $results = mysqli_query($con, $query);



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>BBSPI Selected Project</title>
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

      <section id="contact" class="auth" ">
        <div class=" container-fluid">



        <div class="col-lg-12">
          <div class="contact" style="background-color: #dfe6e9;">
            <!-- <h4 class="text-white text-center mb-4">Estimation Seeker Login</h4> -->

            <div id="contact_message_login" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Login Successfull</div>
            <div class="container" style="background-color: #dfe6e9;">
              <h4 style="margin-left: -1.5%;"> Your Selected Project is: <u><i><?php echo $selectedProject; ?></i></u></h4>
              <form action="uploadSol.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                  <div class="col-25">
                    <label for="name">You are logged in as: </label>
                  </div>
                  <div class="col-75">
                    <label name="name"> Username: <b><u><?php echo $uName; ?></u></b> <br>
                      Email: <b><u><?php echo $email; ?></u></b>
                    </label>

                  </div>
                </div>

                <div class="row">
                  <div class="col-25">
                    <label for="fileUpload">Upload Appraisal: </label>
                  </div>
                  <div class="col-75">
                    <input type="file" accept=".pdf" name="file" id="file">
                  </div>
                </div>

                <div class="row">
                  <button class="button" type="submit" value="Upload Image" name="submit" style="margin-left: 33%; margin-top: 2%;">Upload</button>
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