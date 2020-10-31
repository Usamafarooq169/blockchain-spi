<?php
session_start();
include_once('connection.php');
$seekerName = $_SESSION['userN'];

$query = "select * from finalsol WHERE seeker ='$seekerName'";
$results = mysqli_query($con , $query);

$row=mysqli_fetch_assoc($results);

  $_SESSION['daPname'] = $row['projectName'];
  $_SESSION['daSolFname'] = $row['solFileName'];
  $_SESSION['daSolBy'] = $row['solutionBy'];

if($row)
{
  echo '<script>alert("Final Solution Submitted! Redirecting You!")
            location="downloadApp.php";</script>';
}

else {
  echo '<script>alert("Appraisal not yet Ready! Redirecting You!")
  location="alreadyUploaded.php";</script>';
}




?>



