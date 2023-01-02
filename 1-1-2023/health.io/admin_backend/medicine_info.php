<?php
include "admin_header.php";
?>
 <link rel="stylesheet" href="style/blogs-policy-pharmacy.css">
<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4">

    <?php
      $id=$_GET['id'];
      $stat="SELECT *, medicine.id as mid FROM medicine INNER JOIN image ON image_id=image.id where medicine.id= $id";
      $result=Query($stat);
      $result=mysqli_fetch_assoc($result);
    ?>
   <!-- HEADING OF PAGE -->
   <div class="col-6 text-center">
   <div class="card mb-3">
  <img src="<?=$result['location']?>" class="card-img-top" alt="..." style="display:block;height:15rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$result['title']?></h5>
    <h6 class="card-title">PRICE: <?=$result['price']?></h6>
    <p class="card-text"><?=$result['med_info']?></p>
   </div>
    
  </div>
</div>


  </div>
</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>