
<?php


session_start();


include_once('connection.php');
$Pname = $_SESSION['projN'];

$query1 = "select * from filerecord WHERE ProjectN='$Pname'";
$results1 = mysqli_query($con, $query1);
$rows = mysqli_fetch_assoc($results1);

$level = $rows['desiredLevel'];

if ($level == 2) {
    $file = ('downloads/' . 'Level2_GapAnalysis_Guidelines.rar');
} else if ($level == 3) {
    $file = ('downloads/' . 'Level3_GapAnalysis_Guidelines.rar');
} else if ($level == 4) {
    $file = ('downloads/' . 'Level4_GapAnalysis_Guidelines.rar');
} else if ($level == 5) {
    $file = ('downloads/' . 'Level5_GapAnalysis_Guidelines.rar');
}


$filetype = filetype($file);

$filename = basename($file);

header("Content-Type: " . $filetype);

header("Content-Length: " . filesize($file));

header("Content-Disposition: attachment; filename=" . $filename);

readfile($file);

?>

