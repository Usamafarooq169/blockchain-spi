<?php
include_once('connection.php');
$query = "select * from files";
$results = mysqli_query($con , $query);
$files = mysqli_fetch_all($results, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['projName']; ?></td>
      <td><?php echo $file['fileName']; ?></td>
      <td><a href="downloads.php?fileName=<?php echo $file['fileName'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>