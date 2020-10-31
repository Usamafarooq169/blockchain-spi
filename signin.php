<?php
session_start();
include_once('connection.php');
$email = $_POST['email'];
$pass = $_POST['password'];
$type = $_POST['type'];
$qu = " select * from users where email = '$email' AND password = '$pass' AND type = '$type'";
$result = mysqli_query($con, $qu);
$rows = mysqli_fetch_assoc($result);
$proj = $rows['projectSelected'];

$querry = " select * from filerecord where ProjectN = '$proj'";
$result1 = mysqli_query($con, $querry);
$row1 = mysqli_fetch_assoc($result1);

$conReq = $row1['cons'];





$num = mysqli_num_rows($result);



if ($num == 1) {


    $UName = $rows['username'];
    $_SESSION['userN'] = $UName;

    if ($rows['type'] == 'seeker') {
        if ($rows['status'] == 'yes') {
            echo '<script>alert("Welcome to BBSPI, Estimation Seeker... It seems like you have already submitted SRS to seek Improvements! Redirecting You!")
            location="alreadyUploaded.php";</script>';
        } else if ($rows['status'] == 'no') {
            echo '<script>alert("Welcome to BBSPI, Estimation Seeker... It seems like you have not yet submitted SRS to seek Improvements! Redirecting You!")
            location="SeekerDash.php";</script>';
        }
    } else if ($rows['type'] == 'Facilitator') {
        if ($rows['status'] == 'yes') {
            if ($conReq == 'requested') {
                echo '<script>alert("Welcome to BBSPI, THE facilitator... There is a pending consensus request for your selected Project! Redirecting You!")
            location="conVoteList.php";</script>';
            } else {
                echo '<script>alert("Welcome to BBSPI, THE Facilitator... It seems like you have already selected a project to Administer! Redirecting You!")
            location="projSelectedConNotReq.php";</script>';
            }
        } else if ($rows['status'] == 'no') {
            echo '<script>alert("Welcome to BBSPI, THE Facilitator... It seems like you have not yet selected project to administer! Redirecting You!")
            location="facilitatorProjList.php";</script>';
        }
    } else if ($rows['type'] == 'Expert') {
        if ($rows['status'] == 'yes') {
            if ($conReq == 'requested') {
                echo '<script>alert("Welcome to BBSPI, THE EXPERT... There is a pending request for consensus! Redirecting You!")
            location="cForm.php";</script>';
            } else {
                echo '<script>alert("Welcome to BBSPI, THE EXPERT... It seems like you have already selected a project to suggest Improvements! Redirecting You!")
            location="alreadySelected.php";</script>';
            }
        } else if ($rows['status'] == 'no') {
            echo '<script>alert("Welcome to BBSPI, THE EXPERT... It seems like you have not yet selected project to suggest Improvements! Redirecting You!")
            location="ExpProjList.php";</script>';
        }
    }
} else {

    echo " User does not exist";
}
