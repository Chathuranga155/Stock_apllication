<?php 

include "../../config.php";


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>StockX DB</title>

   
</head>

<body>

<!-- table  -->




<div class="table-responsive-sm">


<!-- end -->



<table class="table table-striped">  

<thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Status</th>
        <th scope="col">Client</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      $query1 = "SELECT * FROM bids";  
      $result = mysqli_query($conn, $query1); 

                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"];?></td>  
                               <td><?php echo $row["bid_name"]; ?></td>  
                               <td><?php echo $row["bid_price"]; ?></td> 
                               <td><?php echo $row["status"]; ?></td> 
                               <td><?php echo $row["client"]; ?></td> 
                               
                          </tr>  
                          <?php
                         
                          }
                           } else { ?>
                           <tr>
                          <td colspan="8">No data found</td>
                           </tr>

                        <?php } ?>

    </tbody>
  </table>
</div>







</body>
</html>