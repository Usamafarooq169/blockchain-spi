<?php
session_start();

// $facName=$_SESSION['userN'];

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'users');

$uName = $_SESSION['userN'];

echo $uName . PHP_EOL;

$qu = "select * from users where username = '$uName'";
$result = mysqli_query($con, $qu);
$rows = mysqli_fetch_assoc($result);

$selectedProject = $rows['projectSelected'];
echo $selectedProject . PHP_EOL;



$que = " select * from filerecord where ProjectN = '$selectedProject'";
$resultt = mysqli_query($con, $que);
$rowsss = mysqli_fetch_assoc($resultt);
$seekerName = $rowsss['uploader'];

echo $seekerName . PHP_EOL;



// $query1 = "SELECT MAX(votes) AS maxVotes from solutions WHERE projectName='$selectedProject'";
// $results1 = mysqli_query($con, $query1);
// $row=mysqli_fetch_assoc($results1);
// $maxVotes = $row['maxVotes'];



// $query2 = "select * from solutions where projectName='$selectedProject' AND votes=(select MAX(votes) from solutions)";
// $query2 = "select MAX(votes) AS maxvotes from solutions where projectName='$selectedProject')";
// $results2 = mysqli_query($con, $query2);
// $row=mysqli_fetch_assoc($results2);

$result = mysqli_query($con, "SELECT max(votes) AS max_votes from solutions where projectName='$selectedProject'");
$row = mysqli_fetch_array($result);
echo $row["max_votes"];

$maxVotes = $row['max_votes'];


$query2 = "select * from solutions where projectName='$selectedProject' AND votes='$maxVotes'";
// $query2 = "select MAX(votes) AS maxvotes from solutions where projectName='$selectedProject')";
$results2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_assoc($results2);

$solFileName = $row2['solFileName'];
$solBy = $row2['uploadedBy'];

echo $solBy . PHP_EOL;


$_SESSION['fsVotes'] = $maxVotes;
$_SESSION['fsProjName'] = $selectedProject;
$_SESSION['fsSolBy'] = $solBy;
$_SESSION['fsFileName'] = $solFileName;
$_SESSION['fsSeeker'] = $seekerName;



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
          <p>Welcome dear Facilitator! You are logged in as <u><b><?php echo $_SESSION['userN']; ?></b></u></p>
          <h1>Project for which you started consensus is <br><u><?php echo $selectedProject; ?></u> </h1>
          <p>Solution with maximum votes was submitted by: <b><u><?php echo $solBy ?></u></b></p>
          <p>Votes received by this solution are: <b><u><?php echo $maxVotes ?></u></b></p>
          <p>Click the button to submit Appraisal.</p>
          <a href="./downFinalApp.php" style="width: 250px;" onclick="openPage()" class="btn">Download <br> Appraisal</a>
          <a href="./submitFinalSol.php" onclick="return confirm('Are you sure to proceed? This solution will be finalized and will be recorded on blockchain');" style="width: 250px;" onclick="openPage()" class="btn btn-inverse">Proceed to <br> Finalize</a>
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