<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  </head>
  <body>

<?php
// Database configuration
$hostname= "sql206.byetcluster.com";
$username= "b33_30186218";
$password="6FLNAV2Pf2U8t8J";
$dbname = "b33_30186218_stockm";

// Create database connection
$db = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>

<?php
// Include the database configuration file


// Get images from the database
$query = $db->query("SELECT * FROM profile_img ORDER BY uplorad_on DESC limit 1");


$row = mysqli_fetch_assoc($query );
$image25= $row['image'];


?>

<div>
<img src="uploads/<?=$image25?> " width="50px" height="50px">

</div>


  </body>
</html>