<?php
session_start();

//Getting Project Name
// $name = $_POST['submit'];
// $name = $_SESSION['projN'];

include_once('connection.php');

$userName = $_SESSION['userN'];
// $projName = $_POST['submit']; 
// $_SESSION['solProj'] = $projName;

// $st = 'yes';
// $stP = 'selected';

$updExp1 = "UPDATE users SET projectSelected = '$projName', status ='yes' WHERE username = '$userName' ";
mysqli_query($con, $updExp1);


//Project Name
// $query = "select * from users WHERE username='$userName'";
// $result = mysqli_query($con, $query);
// $rows = mysqli_fetch_assoc($result);
// $projName = $rows['projectSelected'];

// $_SESSION['solProj'] = $projName;


//Solutions
$query1 = "select * from solutions";
$results1 = mysqli_query($con, $query1);
// $rows=mysqli_fetch_assoc($result);


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
            background-color: #05c46b;
            /* Green */
            border: none;
            color: white;
            width: 45%;

            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-family: oswald;
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
                            <h4 style="margin-left: -1.5%;"> Your selected project is <u><i><?php echo $projName; ?></i></u></h4>
                            <h5 style="margin-left: -1.5%;"> Uploaded Solutions are following... Click on the Button to download solution! </h5>
                            <?php
                            while ($row = mysqli_fetch_assoc($results1)) {
                                if (trim($row['projectName']) == trim($projName)) {
                            ?>


                                    <form action="downloadSol.php" method="POST" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-25">
                                                <label for="DL">Solution of <u><b><?php echo $projName; ?></b></u> by <b><u><?php echo $row['uploadedBy']; ?></u></b> </label>
                                            </div>
                                            <div class="col-75">

                                                <!-- <label name="DL">Soulution by : <a href = "downloadSol.php"><u><?php echo $row['uploadedBy']; ?></u></a></label> -->
                                                <button class="button" type="submit" value="<?php echo $row['uploadedBy']; ?>" name="submit" onclick="return confirm('Are you sure you want to select this project? Once Selected you may not be able to change it!');">
                                                    <?php echo $row['uploadedBy']; ?></button>

                                            </div>
                                        </div>

                                        

                                    </form>

                            <?php
                                }
                            }
                            ?>
                            <div class="row">
                                            <div class="col-25">
                                                <label for="delivery"> Received all the solutions? </label>
                                            </div>
                                            <div class="col-75">
                                                <a href="consensus.php">
                                                    <label name="delivery" style="color:blue;"><u>Click here to Proceed towards finalization of the Appraisal</u> </label>
                                                </a>
                                            </div>
                                        </div>


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