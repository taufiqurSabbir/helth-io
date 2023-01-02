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
                    <h1>UIU POLICY AND FORMS</h1>
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
        <?php
        $stat="SELECT * FROM policy ";
        $result=Query($stat);

        foreach( $result as $k => $v){
        ?>
            <div class="card w-75" style="border-right: 2rem #1D9160 solid; margin-bottom: 1rem;">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: left; font-size: 1.5vw;"><?=$v['name']?></h5>
                    <p class="card-text"><?=$v['breif_info']?></p>
                    <a href="policy_page.php?id=<?=$v['id']?>" class="btn btn-success">See more</a>
                </div>
            </div>
            
        <?php } ?>   
            
        </div>
    </div>



  </div>
</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>