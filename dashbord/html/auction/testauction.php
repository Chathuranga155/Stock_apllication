<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/demo.css">

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="../../index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="../../index.php" ></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"></a>
        </li>
        
      </ul>

    </div>
  </div>
</nav>


    <!-- table  -->
    <?php



 

$hostname= "sql206.byetcluster.com";
$username= "b33_30186218";
$password="6FLNAV2Pf2U8t8J";
$dbname = "b33_30186218_stockm";



$conn = mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    echo "Connection Error";
}


 


if(isset($_POST['submit'])){
    $price = $_POST['price'];
    $id = $_POST['id'];
    $msg = "";
    
   
   
    
    // $sql = "UPDATE stock set price = '$price' where st_name = '$sname' ";
    $sql = "UPDATE stock set price = '$price' where id = '$id' ";
    $res = mysqli_query($conn,$sql);


    if(!$res){
        echo  '<div class="alert alert-danger"> unsucsess bidding </div>';
    }else{
        $msg = ' <div class="alert alert-success"> sucsess bidding </div>';
        
        
    }
    
   

   


}






?>

   <?php

    // include "../../../config.php";
    $query1 = "SELECT * FROM stock";

    $query_run = mysqli_query($conn, $query1);
    ?>
    <?php //echo $msg . "<br>";   ?>

    <div class="container py-5">
        <div class="row mt-3">
            
            <!-- Your loop code goes here within the container -->
            <?php
            
            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {
                    $sname= $row['st_name'];
                    $price = $row['price'];
                    $id = $row['id'];
?>

           
                   <div class="col-lg-4 col-md-6 col-sm-4 frontside" >
                        
                               <div class=" my-card card shadow-sm  rounded" id="ct_color">
                                <div class="row">
                                    <div class="col-sm-12  ">
                                        <div class="card-body">
                                            <div class="card-title" style="font-family:Montserrat; font-size:20px">
                                                <div class="row ">
                                                    <div class="col-sm-6" >
                                                        <span class="fs-4 fw-lighter ">Stock Name : </sapan>
                                                    </div>

                                                        <div class="col-sm-6 " >
                                                            <span class="fs-4 fw-lighter float-end"> <?php echo $sname; ?></span>
                                                        </div>
                                                </div>
                                            </div>


                        <div class="alert alert-dark" role="alert">
                                <div class="row">
                                    <div class="col-sm-6 mb-1 fw-bold">
                                   
                                        <p>Price :</p><p class="card-text fw-light" style="font-family:Montserrat; font-size:20px"><?php echo  $price;?></p>
                                    </div>

                                 <div class="col-sm-6 mb-1 fw-bold">
                                         <p>Time Counter: </p> 
                                         


                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                         
                                        
                                         
                               
                                       
                                   </div>
                                </div>
                               
                                 <br>
                                 <form action="testauction.php" method="post">
                                 <div class="row">
                                 <div class="col-sm-7">
                                 <div class="input-group mb-1">
                                 <input type="text" placeholder="<?php echo $id; ?>" name="id" class="form-control" ><span class="input-group-text">$</span>   
                                 <input type="text" name="price" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                    </div>
                                 </div>
                                 <div class="col-sm-5">
                                 <div class="d-grid gap-2">
                                 <button class="btn btn-outline-primary " name="submit" type="submit">placed bid</button>
                                 </div>
                                 </div>
                                 </div>
                                 </form>
                            </div>
                        
                         
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    

 <?php
    
    
                }
            } else {
                echo "No record found";
            }
            ?>
        </div>
    </div>



  



<br><br>



    <!-- <span class="sub-title fw-light" style="line-height:20px">' . $row['Bidding_closing_time'] . '</span> -->





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->








</body>

</html>