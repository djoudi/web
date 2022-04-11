<?php
 include "inc/header.php";
 require_once 'inc/config.php';
//Get All Cat
 $sqlCat = "SELECT * FROM category";
 $qCat= mysqli_query($connect,$sqlCat);
 $category = mysqli_fetch_all($qCat,MYSQLI_ASSOC);

$nom = (isset($_POST['nom']))?$_POST['nom']:NULL;
$prix = (isset($_POST['prix']))?$_POST['prix']:NULL;
$category_id = (isset($_POST['category_id']))?$_POST['category_id']:NULL;
$desc_product = (isset($_POST['desc_product']))?$_POST['desc_product']:NULL;
$isSent = (isset($_POST['send']))?$_POST['send']:NULL;

if (isset($isSent)&& $isSent=='ok') {

	/************************Upload File ****************/
	$upload = 'up/';
 $myExt =['jpg','jpeg','png'];
 $name = $_FILES['photo']['name'];
 $ext = @end(explode('.', $name));
 $temp = $_FILES['photo']['tmp_name'];
 if (in_array($ext, $myExt)) {
 	$name = time().'.'.$ext;
 	 $isUpload = move_uploaded_file($temp, $upload.$name);
	 	 if ($isUpload) {
		echo "Upload is Okay";
		}
 }else {
 	echo "Not Allowed";
 }

	/************************End Upload File ****************/

	$sql  = "INSERT INTO product(id,nom,prix,category_id,photo,desc_product) 
	VALUES (NULL,'$nom',$prix,$category_id,'$name','$desc_product') ";

	$q = mysqli_query($connect,$sql);

	if ($q) {
		header("Location:home.php");
	}else {
		echo "Error: ".mysqli_error($connect);
	}

}

 ?>

<div class="container">
  <div class="row">
    <div class="col">
    	 <form action="" method="post" enctype="multipart/form-data">
    	   <div class="form-group">
    	     <label for="nom">Nom</label>
    	     <input type="text" name="nom" class="form-control" id="nom" >
    	  </div>
    	   
    	   <div class="form-group">
    	     <label for="prix">Prix</label>
    	     <input type="number" name="prix" class="form-control" id="prix" >
    	  </div>


    	  <div class="form-group">
    	     <label for="category">Category</label>
    	    <select name="category_id" class="form-control">
    	    	<?php foreach($category as $list) : ?>
   <option value="<?= $list['id'] ?>"> <?= $list['nom'] ?> </option>
    	    <?php endforeach; ?>
    	    </select>
    	  </div>


    	  <div class="form-group">
    	     <label for="desc_product">Description</label>
            <textarea name="desc_product" class="form-control" aria-label="With textarea"></textarea>
    	  </div>

    	  <div class="form-group">
    	     <label for="photo">Photo</label>
    	     <input type="file" name="photo" class="form-control" id="photo" >
    	  </div>

             <input type="hidden" name="send" value="ok">
    	   <button type="submit" class="btn btn-primary btn-block mt-2">Add Product</button>
    
    	 </form>


    </div>

  </div>
</div>


<?php include "inc/footer.php" ?>
