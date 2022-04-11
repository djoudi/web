<?php 
 include "inc/config.php";

$id = $_POST['id'];


    $sql = "DELETE FROM client WHERE id=$id";

$q = mysqli_query($connect,$sql);



if ($q) {
   echo 1;
}else {

   echo 0;
}

 ?>
 