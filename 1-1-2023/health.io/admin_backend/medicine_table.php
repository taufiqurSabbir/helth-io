<?php
include "admin_header.php";
?>
<link rel="stylesheet" href="../style/blogs-policy-pharmacy.css">
<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4">

        <!-- HEADING OF PAGE -->
    <div id="page_top">
        <div class="container">
            <div class="row">
                <div class="top">
                    <h1>UIU PHARMACY</h1>
                </div>
                <div class="caption">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus aliquam alias expedita.
                        Vero voluptate libero consequuntur consectetur, veritatis nihil minima autem, earum mollitia
                        odio
                        voluptatem corporis dolor delectus magnam quas?</p>
                </div>


            </div>
        </div>
    </div>

    <!-- BODY SECTION -->
        
        <div id="body_section">
            <button class="btn btn-success checkout" hidden name="checkout">CHECKOUT</button>
            
            <div class="container">
                <div class="row">
                <?php
                    $stat="SELECT *, medicine.id as mid FROM medicine INNER JOIN image ON image_id=image.id;";
                    $result=Query($stat);

                    foreach( $result as $k => $v){
                ?>
                    <div class="col-4 col-md-3">
                        <a href="medicine_info.php?id=<?=$v['mid']?>">
                            <div class="card" style="width: 15rem;" name="">
                                <img src="<?=$v['location']?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6><?=$v['title']?></h6>
                                    <div class="cart">
                                        <span name="decrement">-</span>
                                        <h6>ADD TO CART</h6>
                                        <span name="increment">+</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    

  </div>
</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>