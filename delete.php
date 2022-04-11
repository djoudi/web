<?php
require_once 'inc/config.php';

$cid =  $_GET['p'];
$sql = "DELETE FROM client WHERE id= $cid";
$q = mysqli_query($connect,$sql);
	if ($q) {
		header("Location:index.php");
	}else {
		echo "Error: ".mysqli_error($connect);
	}


  ?>