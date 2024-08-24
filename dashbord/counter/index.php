

<?php 
// Database configuration



// Create database connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query1 = "select * from stock ";
$result = mysqli_query($conn,$query1);


$row = mysqli_fetch_array($result); 


     $name= $row["st_name"] ;
     $id= $row["id"] ;
    $price= $row["price"] ; 






  
?>

<?php  





?>


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




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.blue-pink.min.css" /> 
    <title>Bidding</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:800);

.container {
  margin: auto;
  width: 400px;
}

.path--background {
  fill: rgb(34, 213, 201);
  stroke: #fff;
  stroke-width: 0px;
}

.pulse {
  fill: rgb(255, 74, 74) !important;
}

.path--foreground {
  fill: #eee;
  stroke: #eee;
  stroke-width: 2px;
}

.label {
  font: 90px "Open Sans";
  font-weight: 900;
  text-anchor: middle;
  fill: rgb(34, 213, 201);
}
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- <a class="nav-link active text-white" aria-current="page" href="#">Home</a> -->
                    </li>
                    <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->


            </div>
        </div>
    </nav>




    <div class="alert alert-primary" role="alert">
        <center>
            <h2>Bidding Start</h2>
        </center>
    </div>
    <form action="index.php" method="POST">
    <div class="card" style="width:30em" ;>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">Name:</div>
                <div class="col-sm-6"><?php echo $name;?></div>
            </div>
            <div class="row">
                <div class="col-sm-6">Stock ID</div>
                <div class="col-sm-6"><?PHP echo $id ?></div>
            </div>

            <div class="row">
                <div class="col-sm-6">Price</div>
                <div class="col-sm-6">$ <?php echo $price ?></div>
            </div>
            <div class="alert alert-primary" role="alert">
                <div class="row">
                    <div class="col-sm-4">0 Bids placed</div>
                    <div class="col-sm-8"> <?php include "../counter/countdown.php"; ?></div>
                </div>

                <div class="row">
                    <div class="col-sm-4"><button type="button" type="submit" id="undo" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">bidding now</button></div>
                    <div class="col-sm-8"><button type="submit" name="submit" class="btn btn-primary">bid now</button></div> </div>
                </div>
              
                <div class="row">
                <div class="col-sm-1">

</div>
                    <div class="col-sm-11">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-group mb-1">
                                    <span class="input-group-text" id="inputGroup-sizing-default">id</span>
                                    <input type="text" name="id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group mb-1">
                                    
                                    <input type="text" name="price" class="form-control" placeholder="price" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                </form>
                
            </div>
        </div>
       


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="jquery.undoCountdown.js"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
$("#undo").undoCountdown({
  seconds: 60,
  onComplete: function() {
    alert('Countdown completed.' );
  }
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
   
</body>

</html>

<?php 


