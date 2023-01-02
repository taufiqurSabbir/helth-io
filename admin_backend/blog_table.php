<?php
include "admin_header.php";
?>
<link rel="stylesheet" href="../style/blogs-policy-pharmacy.css">
<!--Main layout-->
<main style="margin-top: 10px;">
  <div class="container pt-4">
    <!-- HEADING OF PAGE -->
    <div id="page_top">
        <div class="container">
            <div class="row">
                <div class="top">
                    <h1>TRENDING BLOGS</h1>
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
        <div class="container">
            <div class="row">
                <?php
                      $stat="SELECT *, blogs.id as bid FROM blogs INNER JOIN image ON image_id=image.id;";
                      $result=Query($stat);

                      foreach( $result as $k => $v){
                    ?>
                <div class="col-4 col-md-3">
                
                    <a href="blog_page.php?id=<?=$v['bid']?>"><div class="card" style="width: 15rem;">
                        <img src="<?=$v['location']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6><?=$v['title']?></h6>
                            <p class="card-text text-center"><?=$v['content_1']?></p>
                        </div>
                    </div></a>
                </div>
                <?php } ?>
            </div>



  </div>
</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>