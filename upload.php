
<?php

session_start();
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'users');

// $nam = $_SESSION['userN'];

//echo '<script>alert(' $_SESSION['userN']; ')</script>'; 

//echo "<h2>" . $nam . "</h2>";

if (isset($_POST["submit"])) {
    $file = $_FILES['file'];
    print_r($file);

    $PName = $_POST['pname'];
    $dLevel = $_POST['desLevel'] + 0;
    $dLevel = $dLevel + 1;

    $cLevel = $_POST['curLevel'];
    $deadline = $_POST['deadline'];
    $moreDetails = $_POST['subject'];
    $uploadedBy = $_SESSION['userN'];
    $st = 'not selected';
    $count = 0;
    $cons = 'not requested';

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $Allowed = array('jpg', 'jpeg', 'png', 'pdf');


    if ($fileError === 0) 
    {
        if ($fileSize < 1000000) 
        {

            // $fileNewName = $fileName;
            //$fileNewName = "Guru".".".$fileActualExt;


            $fileNewName = uniqid('', true) . "." . $fileActualExt;
            $fileDestination = 'uploads/' . $fileNewName;

            move_uploaded_file($fileTmpName, $fileDestination);
            //

            $qu = " select * from filerecord where ProjectN = '$PName'";
            $result = mysqli_query($con, $qu);

            $num = mysqli_num_rows($result);

            if ($num == 1) 
            {
                echo '<script>alert("Project Name already exists.... Please use new name to proceed!")
                location="upload.php";
                </script>';

            } 
            else 
            {
                $name = $_SESSION['userN'];

                $reg = " insert into filerecord(ProjectN , fileN , res, desiredLevel, currentLevel, timeLimit, moreDetails, uploader, status, selections, cons) values 
                ('$PName', ' $fileNewName' , '$fileSize' ,'$dLevel', '$cLevel', '$deadline', '$moreDetails', '$uploadedBy', '$st', '$count', '$cons');";
                $updExp = "UPDATE users SET status = 'yes' WHERE username = '$name' ";
                mysqli_query($con, $reg);
                mysqli_query($con, $updExp);
                echo '<script>alert("Project Details submitted successfully! Redirecting You!")
                location="alreadyUploaded.php";</script>';
            }




            //
            header("Location: seekerDash?uploadsuccess");
        } 
        else 
        {
            echo "file is too big upload";
        }
    } 
    else 
    {
        echo "There was error while uploading file";
    }
}

?>
