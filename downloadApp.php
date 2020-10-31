<?php
session_start();

//Getting Project Name
include_once('connection.php');
$userName = $_SESSION['userN'];
$projName = $_SESSION['daPname'];
$solFileName = $_SESSION['daSolFname'];
$solBy = $_SESSION['daSolBy'];

// $query1 = "select * from filerecord WHERE ProjectN='$name'";
// $results1 = mysqli_query($con, $query1);

// $updExp1 = "UPDATE users SET projectSelected = '$name', status ='$st' WHERE username = '$userName' ";
// mysqli_query($con, $updExp1);


// while ($row1 = mysqli_fetch_array($results1)) {

//     $num = $row1['selections'];
// }
// $num += 1;


// $updExp = "UPDATE filerecord SET selections = '$num', status = '$stP' WHERE ProjectN = '$name' ";
// mysqli_query($con, $updExp);

// $query = "select * from filerecord WHERE ProjectN='$name'";
// $results = mysqli_query($con, $query);
// $rows = mysqli_fetch_assoc($results);

// $desLevel = $rows['desiredLevel'];
// $deadline = $rows['timeLimit'];

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
                            <h4 style="margin-left: -1.5%;"> Final Appraisal document of <b><u><?php echo $projName ?></u></b> is available to download</h4>
                            <form action="downloadFile.php" method="POST" enctype="multipart/form-data">




                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname">Project Name: </label>
                                    </div>
                                    <div class="col-75">


                                        <label name="fname"><b><u><?php echo $projName; ?></u></b></label>


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="DL">Solution Submitted By: </label>
                                    </div>
                                    <div class="col-75">

                                        <label name="DL"><b><u><?php echo $solBy; ?></u></b></label>

                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-25">
                                        <label for="SRS">Download Final Appraisal Document: </label>
                                    </div>
                                    <div class="col-75">
                                        <a href="dlApp.php">
                                            <label name="SRS" style="color:blue;"><u>Click here to download Appraisal</u> </label>
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="guidelines">Redirect to Dashboard: </label>
                                    </div>
                                    <div class="col-75">
                                        <a href="alreadyUploaded.php">
                                            <label name="SRS" style="color:blue;"><u>Click here to go back to your dashboard</u> </label>
                                        </a>
                                    </div>
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