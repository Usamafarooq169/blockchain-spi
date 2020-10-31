<?php
session_start();
include_once('connection.php');
$projName = $_SESSION['solProj'];
$updExp1 = "UPDATE filerecord SET cons = 'requested' WHERE ProjectN = '$projName' ";
mysqli_query($con, $updExp1);
echo '<script>alert("Consensus Requested! Redirecting You!")
            location="facilitatorProjList.php";</script>';
