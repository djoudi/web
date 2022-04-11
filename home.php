
<?php
 include "inc/header.php";
 require_once 'inc/config.php';

 $sql  = "SELECT * FROM product LIMIT 5";
 	$q= mysqli_query($connect,$sql);
	$sliders = mysqli_fetch_all($q,MYSQLI_ASSOC);
?>


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  	  <?php 
$cpt = 0;
foreach ($sliders as $key => $value) {
	$cl = ($cpt==0)?'active':'';
	$cpt++;
   ?>
    <div class="carousel-item  <?= $cl ?>">
      <img src="<?php echo 'up/'.$value['photo'] ?>" class="d-block w-100" alt="...">
    </div>
   <?php } ?> 

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<?php include "inc/footer.php" ?>