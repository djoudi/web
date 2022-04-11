<?php
 include "inc/header.php";
 require_once 'inc/config.php';

$cid =  $_GET['p'];

$sql = "SELECT * FROM client WHERE id=$cid ";

$q = mysqli_query($connect,$sql);
if ($q) {
    $num = mysqli_num_rows($q);
    $data = mysqli_fetch_array($q,MYSQLI_ASSOC);

 /*   echo "<pre>";
    print_r($data);
    echo "</pre>";*/
}


$nom = (isset($_POST['nom']))?$_POST['nom']:NULL;
$prenom = (isset($_POST['prenom']))?$_POST['prenom']:NULL;
$email = (isset($_POST['email']))?$_POST['email']:NULL;
$tel = (isset($_POST['tel']))?$_POST['tel']:NULL;
$id = (isset($_POST['id']))?$_POST['id']:NULL;
$isSent = (isset($_POST['send']))?$_POST['send']:NULL;

if (isset($isSent)&& $isSent=='ok') {
$sql  = "UPDATE client SET nom='$nom',prenom='$prenom',email='$email',tel='$tel' WHERE id=$id";
	$q = mysqli_query($connect,$sql);

	if ($q) {
		header("Location:index.php");
	}else {
		echo "Error: ".mysqli_error($connect);
	}

	

}

 ?>

<div class="container">
  <div class="row">
    <div class="col">
    	 <form action="" method="post">
    	   <div class="form-group">
    	     <label for="nom">Nom</label>
    	     <input type="text" name="nom" value="<?=$data['nom'] ?>" class="form-control" id="nom" >
    	  </div>
    	   
    	   <div class="form-group">
    	     <label for="prenom">Prenom</label>
    	     <input type="text" name="prenom" value="<?=$data['prenom'] ?>"  class="form-control" id="prenom" >
    	  </div>


    	  <div class="form-group">
    	     <label for="email">Email</label>
    	     <input type="text" name="email"  value="<?=$data['email'] ?>" class="form-control" id="email" >
    	  </div>


    	  <div class="form-group">
    	     <label for="tel">Tel</label>
    	     <input type="text" name="tel" value="<?=$data['tel'] ?>"  class="form-control" id="tel" >
    	  </div>
             
 
             <input type="hidden" name="id" value="<?=$data['id'] ?>">
             <input type="hidden" name="send" value="ok">
    	   <button type="submit" class="btn btn-primary btn-block mt-2">Edit Client</button>
    
    	 </form>


    </div>

  </div>
</div>


<?php include "inc/footer.php" ?>
