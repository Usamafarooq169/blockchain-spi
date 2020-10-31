<?php
session_start();

// $facName=$_SESSION['userN'];

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'users');


$votesRec = $_SESSION['fsVotes'];
$projName = $_SESSION['fsProjName'];
$uploadedBy = $_SESSION['fsSolBy'];
$fileName = $_SESSION['fsFileName'];
$seeker = $_SESSION['fsSeeker'];

// echo $votesRec;
// echo $projName;
// echo $uploadedBy;
// echo $fileName;



$reg = " insert into finalsol(projectName , solFileName , solutionBy, votesRec, seeker) values ('$projName', '$fileName' , '$uploadedBy' , '$votesRec', '$seeker');";
mysqli_query($con, $reg);


echo '<script>alert("Appraisal Submitted")
            location="https://ipfs-eth-fileuploadsystem.web.app/";</script>';

//Download Submitted File

