

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