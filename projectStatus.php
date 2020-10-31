<?php
session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'users');

$pname = $POST_['submit'];
$_SESSION['projStatusName'] = $pname;

$qu = " select * from solutions where projectName = '$pname'";
$result = mysqli_query($con , $qu);


?>