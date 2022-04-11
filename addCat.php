<?php
 include "inc/header.php";
 ?>
<style>
	.ahide1,.ahide2{
		display: none;
	}
</style>


<div class="container">
  <div class="row">
    <div class="col">


<div class="alert alert-success ahide1" role="alert">
 Category Added
</div>
<div class="alert alert-danger ahide2" role="alert">
 Error
</div>
    	 <form id="form">
    	   <div class="form-group">
    	     <label for="nom">Nom</label>
    	     <input type="text" name="nom" class="form-control" id="nom" >
    	  </div>
    	   <button type="button" id="add" class="btn btn-primary btn-block mt-2">Add Cat</button>
    	 </form>
    </div>
  </div>
</div>

<?php include "inc/footer.php" ?>
