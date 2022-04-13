<?php 
include "inc/header.php";
require_once 'inc/config.php';
$sql = "SELECT * FROM client";
$q = mysqli_query($connect,$sql);
$data = mysqli_fetch_all($q,MYSQLI_ASSOC);
//MYSQLI_ASSOC  MYSQLI_NUM  MYSQLI_BOTH
/*echo "<pre>";
print_r($data);
echo "</pre>";
exit();*/
 ?>
<div class="table-responsive">
	<table class="table table-hover">
	  <caption>List Clients</caption>
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nom</th>
	      <th scope="col">Prenom</th>
	      <th scope="col">Tel</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($data as  $value):  ?>
	    <tr>
	      <th scope="row"><?= $value['id'] ?></th>
	      <td><?= $value['nom'] ?></td>
	      <td><?= $value['prenom'] ?></td>
	      <td><?= $value['tel'] ?></td>
	      <td>
	       <a href="edit.php?p=<?= $value['id'] ?>" class="btn btn-info">Edit</a>
	      	<a href="delete.php?p=<?= $value['id'] ?>" class="btn btn-danger">Delete</a>

	      <a href="#" data-cid="<?= $value['id'] ?>" class="btn btn-danger delete">Delete</a> 
	      </td>
	    </tr>
	     <?php endforeach; ?>
	  </tbody>
	</table>
</div>


<?php include "inc/footer.php" ?>

