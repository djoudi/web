<?php 
 include "inc/config.php";

$nom = $_POST['nom'];

$nom  = trim($nom);

if (strlen($nom)>0) {
    $sql = "INSERT INTO category(id,nom) VALUES(NULL,'$nom')";

$q = mysqli_query($connect,$sql);

}else {
  $q = 0 ;
}

if ($q) {
   echo 1;
}else {
    if ($q==0) {
      echo 2;
    }else
   echo 0;
}

 ?>
 