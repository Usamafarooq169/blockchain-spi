<?php
include_once('connection.php');
$query = "select * from files";
$results = mysqli_query($con , $query);


?>

<!DOCTYPE html>
<html>

<title>
    <head> Fetch data </head>
</title>

<body>

    <table>
        <tr>
            <th colspan="2"> <h2> Files Recoed </h2></th>
        </tr>

        <tr>
            <th> Name</th>
            <th> Files</th>
        </tr>

        <?php

//
        

        while($rows=mysqli_fetch_assoc($results))
        {

        ?>

        <tr>
            <td> <?php echo $rows['projName']; ?></td>
            <td> <?php echo $rows['fileName']; ?></td>
        </tr>
        <?php
        }
        ?>
        


    </table>

</body>

</html>