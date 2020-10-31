<?php



session_start();
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'users');
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$type = $_POST['type'];
$St = 'no';
$projSelected = 'none';

$sql = " select * from users where (username = '$name' OR email='$email');";
// $result = mysqli_query($con, $qu);

// $num = mysqli_num_rows($result);


$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($res);
    if ($name == $row['username']) {
        echo
            '<script>alert("Username already exists!") 
            location="SeekerAuth.php"
            </script>';
    } elseif ($email == $row['email']) // change it to just else
    {
        echo '<script>alert("Email already exists!") 
        location="SeekerAuth.php"
        </script>';
    }
} else {
    $reg = " insert into users(username , email , password, type, status, projectSelected, hasVoted) values ('$name', '$email' , '$pass' , '$type', '$St', '$projSelected', 'no');";
    mysqli_query($con, $reg);

    echo '<script>alert("Registered Successfully! Please check your Email and Login with your credentials to continue")
          location="SeekerAuth.php";

          </script>';
}
