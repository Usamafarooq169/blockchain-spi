
<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'users');

$userName = $_SESSION['userN'];
$projSelected = $_SESSION['projSelected'];

$qu = " select * from solutions";
$result = mysqli_query($con, $qu);
$rows = mysqli_fetch_assoc($result);

// $ID = $rows['id'];
// $ID =$ID + 1;



// $nam = $_SESSION['userN'];

//echo '<script>alert(' $_SESSION['userN']; ')</script>'; 

//echo "<h2>" . $nam . "</h2>";

if (isset($_POST["submit"])) {
    $file = $_FILES['file'];
    print_r($file);

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $Allowed = array('jpg', 'jpeg', 'png', 'pdf');


    if ($fileError === 0) {
        if ($fileSize < 1000000) {

            // $fileNewName = $fileName;
            //$fileNewName = "Guru".".".$fileActualExt;


            $fileNewName = uniqid('', true) . "." . $fileActualExt;
            $fileDestination = 'uploads/Appraisals/' . $fileNewName;

            move_uploaded_file($fileTmpName, $fileDestination);
            


            // $name = $_SESSION['userN'];

            $reg = " insert into solutions(projectName , solFileName, uploadedBy, votes) values 
           ('$projSelected' , '$fileNewName' ,'$userName', 0);";
            
            mysqli_query($con, $reg);
            




            //
            // header("Location: seekerDash?uploadsuccess");
            echo '<script>alert("Solution Uploaded...! Redirecting You!")
            location="alreadySelected.php";</script>';
        } else {
            echo "file is too big upload";
        }
    } else {
        echo "There was error while uploading file";
    }
}

?>
