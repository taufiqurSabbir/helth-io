<?php
include "admin_header.php";
?>
 <link rel="stylesheet" href="style/blogs-policy-pharmacy.css">
<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4">

    <?php
      $id=$_GET['id'];
      $stat="SELECT *, blogs.id as bid FROM blogs INNER JOIN image ON image_id=image.id where blogs.id= $id";
      $result=Query($stat);
      $result=mysqli_fetch_assoc($result);
    ?>
   <!-- HEADING OF PAGE -->
   <div id="page_top">
        <div class="container">
            <div class="row">
                <div class="top">
                    <h1><?=$result['title']?></h1>
                </div>
                <div class="caption">
                    <p><?=$result['caption']?></p>
                </div>


            </div>
        </div>
    </div>


    <!-- BODY SECTION -->
    <div id="body_section">
        <div class="blog-view">
            <div class="container">
                <p>
                <?=$result['content_1']?>
                </p>
                <p>
                <?=$result['content_2']?>
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, eos cupiditate ut ipsa recusandae necessitatibus reprehenderit est numquam excepturi odio esse doloremque repellat quae, velit modi perferendis aliquid corporis architecto.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odio consequatur totam debitis eligendi, quasi iusto ut adipisci ipsa ipsam eveniet fuga quos sunt autem blanditiis. Vero inventore exercitationem hic.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi voluptates similique ratione sint, a quo amet praesentium, sunt nisi voluptatum blanditiis debitis repudiandae totam iste consectetur, corporis consequatur at alias.
                    
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, eos cupiditate ut ipsa recusandae necessitatibus reprehenderit est numquam excepturi odio esse doloremque repellat quae, velit modi perferendis aliquid corporis architecto.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odio consequatur totam debitis eligendi, quasi iusto ut adipisci ipsa ipsam eveniet fuga quos sunt autem blanditiis. Vero inventore exercitationem hic.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi voluptates similique ratione sint, a quo amet praesentium, sunt nisi voluptatum blanditiis debitis repudiandae totam iste consectetur, corporis consequatur at alias.
                    
                </p>
                <div class="row">
                    <div class="col-6">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, eos cupiditate ut ipsa recusandae necessitatibus reprehenderit est numquam excepturi odio esse doloremque repellat quae, velit modi perferendis aliquid corporis architecto.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odio consequatur totam debitis eligendi, quasi iusto ut adipisci ipsa ipsam eveniet fuga quos sunt autem blanditiis. Vero inventore exercitationem hic.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi voluptates similique ratione sint, a quo amet praesentium, sunt nisi voluptatum blanditiis debitis repudiandae totam iste consectetur, corporis consequatur at alias.
                            
                        </p>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, eos cupiditate ut ipsa recusandae necessitatibus reprehenderit est numquam excepturi odio esse doloremque repellat quae, velit modi perferendis aliquid corporis architecto.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odio consequatur totam debitis eligendi, quasi iusto ut adipisci ipsa ipsam eveniet fuga quos sunt autem blanditiis. Vero inventore exercitationem hic.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi voluptates similique ratione sint, a quo amet praesentium, sunt nisi voluptatum blanditiis debitis repudiandae totam iste consectetur, corporis consequatur at alias.
                            
                        </p>    
                    </div>
                    <div class="col-6">
                        <img src="<?=$result['location']?>" alt="" style="width: 40rem; max-width:100%;">
                        
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, eos cupiditate ut ipsa recusandae necessitatibus reprehenderit est numquam excepturi odio esse doloremque repellat quae, velit modi perferendis aliquid corporis architecto.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odio consequatur totam debitis eligendi, quasi iusto ut adipisci ipsa ipsam eveniet fuga quos sunt autem blanditiis. Vero inventore exercitationem hic.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi voluptates similique ratione sint, a quo amet praesentium, sunt nisi voluptatum blanditiis debitis repudiandae totam iste consectetur, corporis consequatur at alias.
                    
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, eos cupiditate ut ipsa recusandae necessitatibus reprehenderit est numquam excepturi odio esse doloremque repellat quae, velit modi perferendis aliquid corporis architecto.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odio consequatur totam debitis eligendi, quasi iusto ut adipisci ipsa ipsam eveniet fuga quos sunt autem blanditiis. Vero inventore exercitationem hic.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi voluptates similique ratione sint, a quo amet praesentium, sunt nisi voluptatum blanditiis debitis repudiandae totam iste consectetur, corporis consequatur at alias.
                    
                </p>
    
            </div>
        </div>

    </div>


  </div>
</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>