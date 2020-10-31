<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'users');


$projName = $_SESSION['fsProjName'];

$query1 = "select * from finalsol WHERE projectName='$projName'";
$results1 = mysqli_query($con, $query1);
$rows = mysqli_fetch_assoc($results1);


$fname = $rows['solFileName'];
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

?>