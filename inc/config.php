<?php 

$host = "localhost";
$user = "root";
$password = "";
$db = "ecoin";

$connect = @mysqli_connect($host,$user,$password,$db);

if (!$connect) {
    echo "Error Connection: ".mysqli_connect_error($connect);
}



 ?>