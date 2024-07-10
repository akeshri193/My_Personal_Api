<?php
$host="mysql-amankumarkeshri.alwaysdata.net";
$user="368348";
$pass="Mahesh@123";
$db="amankumarkeshri_storedb";
$con=mysqli_connect($host,$user,$pass,$db);
if($con){
    echo "Successful";
}
else{
    echo "Not Successs";
}
?>