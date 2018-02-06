<?php
//Set connection variables. root and root are being used for testing purposes. You should never allow a db connection with superuser permisions

$host = "localhost";
$user = "root";
$pass = "";
$db = "erevive";

$con = mysqli_connect($host,$user,$pass,$db);

// if($con){
//    echo "Connected to Database";
// }else{
//    echo "Connection error.";
// }

//mysqli_close($con);

?>
