<?php
 include "inc/header.php";
 require_once 'inc/config.php';

 //isset  empty  header mysqli_error  mysqli_query

$nom = (isset($_POST['nom']))?$_POST['nom']:NULL;
$prenom = (isset($_POST['prenom']))?$_POST['prenom']:NULL;
$email = (isset($_POST['email']))?$_POST['email']:NULL;
$tel = (isset($_POST['tel']))?$_POST['tel']:NULL;
$password = (isset($_POST['password']))?$_POST['password']:NULL;
$confirm = (isset($_POST['confirm']))?$_POST['confirm']:NULL;
$isSent = (isset($_POST['send']))?$_POST['send']:NULL;
/*if ($password == $confirm) {
	// code...
}*/
$password = sha1(md5($password));
if (isset($isSent)&& $isSent=='ok') {

	$sql  = "INSERT INTO client(id,nom,prenom,email,tel,password) 
	VALUES (NULL,'$nom','$prenom','$email','$tel','$password') ";

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
    	     <input type="text" name="nom" class="form-control" id="nom" >
    	  </div>
    	   
    	   <div class="form-group">
    	     <label for="prenom">Prenom</label>
    	     <input type="text" name="prenom" class="form-control" id="prenom" >
    	  </div>


    	  <div class="form-group">
    	     <label for="email">Email</label>
    	     <input type="text" name="email" class="form-control" id="email" >
    	  </div>


    	  <div class="form-group">
    	     <label for="tel">Tel</label>
    	     <input type="text" name="tel" class="form-control" id="tel" >
    	  </div>

    	  <div class="form-group">
    	     <label for="password">Password</label>
    	     <input type="password" name="password" class="form-control" id="password" >
    	  </div>

    	  <div class="form-group">
    	     <label for="confirm">Confirmation Password</label>
    	     <input type="password" name="confirm" class="form-control" id="confirm" >
    	  </div>
             <input type="hidden" name="send" value="ok">
    	   <button type="submit" class="btn btn-primary btn-block mt-2">Add Client</button>
    
    	 </form>


    </div>

  </div>
</div>


<?php include "inc/footer.php" ?>
