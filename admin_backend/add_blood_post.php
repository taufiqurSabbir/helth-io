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
                    <h1>Post an Request</h1>
                </div>
            </div>
        </div>
    </div>
  <form method="post" action="add_blood_post.php" >
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
    <div class="col-sm-10">
      <input type="text" name="location" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Details</label>
    <div class="col-sm-10">
      <input type="textarea"  name="details" class="form-control" id="inputPassword3">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Urgency level</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="level" id="gridRadios1" value="0" checked>
        <label class="form-check-label" for="gridRadios1">
          Not very Urgent
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="level" id="gridRadios2" value="1">
        <label class="form-check-label" for="gridRadios2">
          A bit Urgent
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="level" id="gridRadios2" value="2">
        <label class="form-check-label" for="gridRadios2">
          Urgent needed by today
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="level" id="gridRadios2" value="3">
        <label class="form-check-label" for="gridRadios2">
        Urgent needed by few hours
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="level" id="gridRadios2" value="4">
        <label class="form-check-label" for="gridRadios2">
        Urgent needed ASAP
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="level" id="gridRadios2" value="5">
        <label class="form-check-label" for="gridRadios2">
          Immediately needed
        </label>
      </div>
      <br>
      <br>
      <label class="form-check-label" for="blood_group">
          Blood group needed: 
        </label>s
      <select name="blood_group"id="">
        <option value="0">O-</option>
        <option value="1">O+</option>
        <option value="2">A-</option>
        <option value="3">A+</option>
        <option value="4">B-</option>
        <option value="5">B+</option>
      </select>
    </div>
  </fieldset>
  
  <div class="text-center">
  <button type="submit" class="btn btn-primary ">Post</button>
  </div>
</form>
<?php
 if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $stat="SELECT * FROM user where email = '$User_email'";
    $id=Query($stat);
    $id=mysqli_fetch_assoc($id);
    $id=$id['id'];
    $post_at=date('g'). " ".date('A'). " ".date('M')." ".date('j') ;
    $location= $_POST['location'];
    $details= $_POST['details'];
    $level= $_POST['level'];
    $blood_group= $_POST['blood_group'];
    //print_r($_POST);
    //echo $id . $post_at;
    //die();
    $stat="INSERT INTO blood_request(writer_id, blood_group, posted_at, location, details, urgency_level) VALUES ('$id',$blood_group,'$post_at','$location','$details',$level)";
    Query($stat);
    

 }



?>
  </div>
</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>