<?php
include "admin_header.php";
?>
<style>
  main{
    margin: 100px 10px 0px 16rem;
  }
  input[type=text]{
    width:25rem;

  }
  input[type=textarea], textarea{
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
                    <h1>Add New Medicine</h1>
                </div>
            </div>
        </div>
    </div>

  <form action="add_med.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Title</label>
  <input type="text"  name="title" class="form-control" id="formGroupExampleInput" placeholder="Enter Title her">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Price</label>
  <input type="text"  name="price" class="form-control" id="formGroupExampleInput" placeholder="Enter Title her">
</div>

<div class="mb-3">
  <img src="" alt="click on me to see preview" class="preview" style="width:15rem; display:block;" onclick="getPreview();" alt="">
  
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Medicine Image</label>
  <input type="file" name="image" onchange="readURL(this);" class="form-control" id="exampleFormControlInput1" placeholder="cover photo insert here">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Med Information</label>
  <textarea type="text"  name="med_info" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
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
  $med_info= $_POST['med_info'];
  $price= $_POST['price'];
  $upload_image=$_FILES['image'];
  
        $check="SELECT COUNT(*) as t FROM image";
        $check=Query($check);
        $check=mysqli_fetch_assoc($check);
        $image_id=$check['t'];
        $checkmed="SELECT COUNT(*) as t FROM medicine";
        $checkmed=Query($checkmed);
        $checkmed=mysqli_fetch_assoc($checkmed);
        $med_id=$checkmed['t'];


  $explode= explode(".", $upload_image['name']);
  $ext=end($explode);
  
  $allow_format= ['jpeg', 'jpg', 'JP{G', 'png', 'PNG'];
  if(in_array($ext,$allow_format)){
    
      $image_name=$image_id ."-".$med_id. "." .$ext;
      $newlocation="../images/". $image_name;
      move_uploaded_file($upload_image['tmp_name'], $newlocation);
        
        
        $insertmed="INSERT INTO medicine(title, image_id, price,med_info) VALUES ( '$title', '$image_id','$price', '$med_info' )";
        $insert= "INSERT INTO image( id, location, name, user_fk) VALUES ( '$image_id', '$newlocation','$image_name', '$id')";
        $reesult=Query($insert);
        $rlt=Query($insertmed);
        $_SESSION['error']= "New Medicine Added";
  }
  else {
    $_SESSION['error']= "File not right format";
  }
  
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

  </div>
</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>