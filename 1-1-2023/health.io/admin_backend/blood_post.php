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
                    <h1>BLOOD REQUEST</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- BODY SECTION -->
    <div id="body_section">
        <div class="blood_post">
            <form action="">
                <div class="container">
                    <div class="row">
                        <button type="button" > POSTS</button>
                    </div>
                    <!-- OBJECT TO BE USE FOR POSTS -->
                    <?php
                      $stat="SELECT * FROM blood_request INNER JOIN user ON writer_id=id";
                      $result=Query($stat);


                      foreach( $result as $k => $v){

                      
                    ?>



                    <div class="profile" style="border-right: 2rem #1D9160 solid; margin-bottom: 1rem;">
                        <div class="row">
                            <div class="col-2">
                                <img src="images/doc- (1).png<?= $v['image_id']?>" alt="">
                            </div>
                            <div class="col-8">
                                <div class="body">

                                    <h4 name="requester_name"><?=$v['name'] ?></h4>
                                    <h5>Blood type: <span name="blood-type"><?=$v['blood_group'] ?></span></h5>
                                    <h6>Urgency level: <?=$v['urgency_level'] ?></h6>
                                    <h6 name="info">Contact details <br>
                                    <?=$v['details'] ?>
                                        </h6>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="modals-btn">
                                    
                                    <button type="button" class="btn btn-success" name="phoneno." value="<?=$v['name'] ?>"> Call NOW </button>
                                </div>
                            </div>
                        </div>
                    </div>
                 <?php } ?>
                    <!-- OBJECT TO BE USE FOR POSTS ENDS HERE -->
                    
                   
                    
                </div>
            </form>
        </div>
    </div>



  </div>
</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>