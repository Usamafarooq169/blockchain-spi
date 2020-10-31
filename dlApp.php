//Download SRS

<?php


session_start();

//Getting Project Name
// $name = $_POST['submit'];

include_once('connection.php');
// $userName = $_SESSION['userN'];
// $st = 'yes';
// $stP = 'selected';
$Pname = $_SESSION['projN'];

// $query1 = "select * from filerecord WHERE ProjectN='$Pname'";
// $results1 = mysqli_query($con, $query1);
// $rows = mysqli_fetch_assoc($results1);

$fname = $_SESSION['daSolFname'];
$fname = trim($fname);
// echo "<h2>" . $filename  . "</h2>";
$filepath = 'uploads/' . '$filename';


$f = $fname;

$file = ('uploads/' . $f);

$filetype = filetype($file);

$filename = basename($file);

header("Content-Type: " . $filetype);

header("Content-Length: " . filesize($file));

header("Content-Disposition: attachment; filename=" . $filename);

readfile($file);
