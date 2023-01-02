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
<main>
  <div class="container pt-4">

  <table class="table table-success table-striped">
    <h4 class="text-center"> Student list </h4>
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT</th>
      <th scope="col">CONSENT</th>
      <th scope="col">OPERATION</th>
    </tr>
  </thead>
  <tbody>
 <?php 
  $stat="SELECT * FROM user WHERE user_role = 'student' AND status= 1";
  $result=Query($stat);
 foreach($result as $key=> $value){
?>
    <tr>
      <th ><?=$key+1?></th>
      <td><?=$value['id']?></td>
      <td><?=$value['name']?></td>
      <td><?=$value['email']?></td>
      <td><?=$value['contact']?></td>
      <td><?=$value['consent']?></td>
      <td><a class="btn btn-danger" href="update.php?id=<?php echo $value['id']?> "> Delete</a></td>
    </tr>
   
  <?php } ?>
  </tbody>
</table>
<hr>
<br>
<br>
<br>

<table class="table table-success table-striped">
    <h4 class="text-center"> Student list(INACTIVE) </h4>
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT</th>
      <th scope="col">CONSENT</th>
      <th scope="col">OPERATION</th>
    </tr>
  </thead>
  <tbody>
 <?php 
  $stat="SELECT * FROM user WHERE user_role = 'student' AND status= 0";
  $result=Query($stat);
 foreach($result as $key=> $value){
?>
    <tr>
      <th ><?=$key+1?></th>
      <td><?=$value['id']?></td>
      <td><?=$value['name']?></td>
      <td><?=$value['email']?></td>
      <td><?=$value['contact']?></td>
      <td><?=$value['consent']?></td>
      <td><a class="btn btn-success" href="update.php?id=<?php echo $value['id']?>">Active</a></td>
    </tr>
   
  <?php } ?>
  </tbody>
</table>

<!-- teacher tables  -->

<hr>
<br><br><br>

<table class="table table-success table-striped">
    <h4 class="text-center"> Teacher list </h4>
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT</th>
      <th scope="col">CONSENT</th>
      <th scope="col">OPERATION</th>
    </tr>
  </thead>
  <tbody>
 <?php 
  $stat="SELECT * FROM user WHERE user_role = 'teacher' AND status= 1";
  $result=Query($stat);
 foreach($result as $key=> $value){
?>
    <tr>
      <th ><?=$key+1?></th>
      <td><?=$value['id']?></td>
      <td><?=$value['name']?></td>
      <td><?=$value['email']?></td>
      <td><?=$value['contact']?></td>
      <td><?=$value['consent']?></td>
      <td><a class="btn btn-danger" href="update.php?id=<?php echo $value['id']?> "> Delete</a></td>
    </tr>
   
  <?php } ?>
  </tbody>
</table>
<hr>
<br>
<br>
<br>

<table class="table table-success table-striped">
    <h4 class="text-center"> Teacher list(INACTIVE) </h4>
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT</th>
      <th scope="col">CONSENT</th>
      <th scope="col">OPERATION</th>
    </tr>
  </thead>
  <tbody>
 <?php 
  $stat="SELECT * FROM user WHERE user_role = 'teacher' AND status= 0";
  $result=Query($stat);
 foreach($result as $key=> $value){
?>
    <tr>
      <th ><?=$key+1?></th>
      <td><?=$value['id']?></td>
      <td><?=$value['name']?></td>
      <td><?=$value['email']?></td>
      <td><?=$value['contact']?></td>
      <td><?=$value['consent']?></td>
      <td><a class="btn btn-success" href="update.php?id=<?php echo $value['id']?> ">Active</a></td>
    </tr>
   
  <?php } ?>
  </tbody>
</table>

<hr>
<br><br><br>

<table class="table table-success table-striped">
    <h4 class="text-center"> Doctor list </h4>
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT</th>
      <th scope="col">CONSENT</th>
      <th scope="col">OPERATION</th>
    </tr>
  </thead>
  <tbody>
 <?php 
  $stat="SELECT * FROM user WHERE user_role = 'doctor' AND status= 1";
  $result=Query($stat);
 foreach($result as $key=> $value){
?>
    <tr>
      <th ><?=$key+1?></th>
      <td><?=$value['id']?></td>
      <td><?=$value['name']?></td>
      <td><?=$value['email']?></td>
      <td><?=$value['contact']?></td>
      <td><?=$value['consent']?></td>
      <td><a class="btn btn-danger" href="update.php?id=<?php echo $value['id']?> "> Delete</a></td>
    </tr>
   
  <?php } ?>
  </tbody>
</table>
<hr>
<br>
<br>
<br>

<table class="table table-success table-striped">
    <h4 class="text-center"> Doctor list(INACTIVE) </h4>
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTACT</th>
      <th scope="col">CONSENT</th>
      <th scope="col">OPERATION</th>
    </tr>
  </thead>
  <tbody>
 <?php 
  $stat="SELECT * FROM user WHERE user_role = 'doctor' AND status= 0";
  $result=Query($stat);
 foreach($result as $key=> $value){
?>
    <tr>
      <th ><?=$key+1?></th>
      <td><?=$value['id']?></td>
      <td><?=$value['name']?></td>
      <td><?=$value['email']?></td>
      <td><?=$value['contact']?></td>
      <td><?=$value['consent']?></td>
      <td><a class="btn btn-success" href="update.php?id=<?php echo $value['id']?> ">Active</a></td>
    </tr>
   
  <?php } ?>
  </tbody>
</table>








  </div>
</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>