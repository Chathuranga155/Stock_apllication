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
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "stockm");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
$sql = "SELECT * FROM bids";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo '<div>';
        echo '<table class="table table-dark table-hover">';
            echo "<tr>";
                echo '<th scope="col">id</th>';
                echo '<th scope="col">name</th>';
                echo '<th scope="col">Price</th>';
                echo '<th scope="col">Status</th>';
                echo '<th scope="col">Client</th>';
                echo '<th scope="col">Created</th>';
                

            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo '<td >' . $row['id'] . "</td>";
                echo '<td >' . $row['bid_name'] . "</td>";
                echo '<td >' . $row['bid_price'] . "</td>";
                echo '<td >' . $row['status'] . "</td>";
                echo '<td >' . $row['client'] . "</td>";
                echo '<td >' . $row['closing_date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
echo "</div>";
?>


</html>
</body>