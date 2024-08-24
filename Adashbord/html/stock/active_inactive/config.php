

<?php  

$hostname= "localhost";
$username= "root";
$password="";
$dbname = "b33_30186218_stockm";


$conn = mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    echo "Connection Error";
}


?>