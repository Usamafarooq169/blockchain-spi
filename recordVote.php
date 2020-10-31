<?php
session_start();

$conPName = $_SESSION['conProj'];
//Getting Project Name
$uploaderName = $_SESSION['uploaderName'];
$username = $_SESSION['userN'];



include_once('connection.php');

$qu = " select * from solutions";
$result = mysqli_query($con, $qu);

while ($rows = mysqli_fetch_assoc($result)) 
{
    if ((trim($rows['projectName']) == trim($conPName)) && (trim($rows['uploadedBy']) == trim($uploaderName))) 
    {
        $fname = $rows['solFileName'];
        $votes = $rows['votes'];
    }
}
$votes++;


echo $fname;
echo $votes;

$updExp1 = "UPDATE solutions SET votes = '$votes' WHERE projectName = '$conPName' AND uploadedBy = '$uploaderName' ";
mysqli_query($con, $updExp1);

$updExp2 = "UPDATE users SET hasVoted = 'yes' WHERE username = '$username' ";
mysqli_query($con, $updExp2);

echo '<script>alert("Thank you! Your Vote has been recorded! Redirecting You!")
location="alreadySelected.php";</script>';


// while ($row1 = mysqli_fetch_array($results1)) {

//   $num = $row1['selections'];
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
