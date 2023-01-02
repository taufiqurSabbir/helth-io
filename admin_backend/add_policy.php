<?php
include "admin_header.php";
?>
<style>
  main{
    margin: 100px 25rem 0px 16rem;
  }
  input[type=text]{
    width:25rem;

  }
  input[type=textarea]{
    width:35rem;
    height:15rem;

  }

</style>
<!--Main layout-->
<main >
  <div class="container pt-4">
  <div id="page_top">
        <div class="container">
            <div class="row">
                <div class="top">
                    <h1>Post an Policy</h1>
                </div>
            </div>
        </div>
    </div>




  <form action="add_policy.php" method="post" enctype="multipart/form-data">
  

  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Title</label>
  <input type="text"  name="title" class="form-control" id="formGroupExampleInput" placeholder="Enter Title her">
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Short Description</label>
 
  <input type="text"  name="breif" class="form-control" id="formGroupExampleInput" placeholder="Enter Title her">
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Content 1</label>
  <textarea type="text"  name="c1" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Content 2</label>
  <textarea type="text"  name="c2" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Content 3</label>
  <textarea type="text"  name="c3" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="text-center">
  <button type="submit" class="btn btn-success">Post</button>
</div>

  </form>





<?php

if($_SERVER ['REQUEST_METHOD'] == 'POST'){
  $stat="SELECT * FROM user where email = '$User_email'";
  $id=Query($stat);
  $id=mysqli_fetch_assoc($id);
  $id=$id['id'];
  
  $title= $_POST['title'];
  $breif= $_POST['breif'];
  $c1= $_POST['c1'];
  $c2= $_POST['c2'];
  $c3= $_POST['c3'];

        $insertpolicy="INSERT INTO policy( breif_info, name, content_1, content_2, content_3) VALUES (' $breif',' $title','$c1',' $c2','$c3')";
       
        $rlt=Query($insertpolicy);
        $_SESSION['message']= "New Policy Added";
        
        
  }
  else{
    $_SESSION['message']= "Policy not inserted";
  }
  
  
  
    


  



?>

<?php
if(isset($_SESSION['error'])){
  echo '<br> <br> <div class="alert alert-success" role="alert">';
    echo $_SESSION['error'];
    echo 
    '<style type="text/css">
            .target_danger {
                color:white; 
                background-color:#BB4406;
                  width:12rem; 
                  border-radius:8%;}
            .box{
                  border-color:red;
                }
    </style>';
    unset($_SESSION['error']);
    echo '</div>';

                                  }
                              ?>

</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>