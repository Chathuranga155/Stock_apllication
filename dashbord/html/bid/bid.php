<?php 





$hostname= "sql206.byetcluster.com";
$username= "b33_30186218";
$password="6FLNAV2Pf2U8t8J";
$dbname = "b33_30186218_stockm";


$conn = mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    echo "Connection Error";
}


?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>StockX DB</title>

   
</head>

<body>

<!-- table  -->

<br>


<div class="table-responsive-sm">
  <table class="table table-success table-striped align-middle table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Stock Name</th>
        <th scope="col">closing_date </th>
        <th scope="col">Status</th>
        <th scope="col">bid price</th>
        
       
        
      </tr>
    
      <?php
     
      $result = mysqli_query($conn,"SELECT * FROM stock");
    
if (mysqli_num_rows($result) > 0) {

$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["st_name"]; ?></td>
    <td><?php echo $row["closing_date"]; ?></td>
    <td><?php echo $row["status"]; ?></td>
    <td>$<?php echo $row["price"]; ?></td>
    
    
    
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
      
    </tbody>
  </table>
</div>

<!-- end -->



    


</body>
</html>