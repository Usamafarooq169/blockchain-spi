<?php

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'users');

session_start();

//Getting Project Name
// $name = $_POST['submit'];

include_once('connection.php');

$uploader = $_SESSION['uploaderName'];
$projectName = $_SESSION['conProj'];

echo $projectName;
echo $uploader;



$qu = " select * from solutions";
$result = mysqli_query($con, $qu);
// $rows = mysqli_fetch_assoc($result);

// $newFileName = ('Solution_by_' . $uploader . '_' . 'of_'. $projectName);

while ($rows = mysqli_fetch_assoc($result)) {
    if ((trim($rows['projectName']) == trim($projectName)) && (trim($rows['uploadedBy']) == trim($uploader))) {
        $fname = $rows['solFileName'];
        echo $fname;
        $f = trim($fname);

        $file = ('uploads/Appraisals/' . $f);

        $filetype = filetype($file);

        $filename = basename($file);

        header("Content-Type: " . $filetype);

        header("Content-Length: " . filesize($file));

        header("Content-Disposition: attachment; filename=" . $filename);

        // header("Content-Disposition: attachment; filename=" . $newFileName . '.docx');

        readfile($file);
    }
}




// $fname = trim($fname);

// echo $fname;

// echo $projectName;
// echo $uploader;
// echo "<h2>" . $filename  . "</h2>";
// $filepath = 'uploads/' . '$filename';
