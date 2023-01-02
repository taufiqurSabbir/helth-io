<?php
include "session.php";
$id=$_GET["id"];

$stat="SELECT status as s FROM user WHERE id = $id";
$result=Query($stat);
$result=mysqli_fetch_assoc($result);
print_r( $result);
//die();

if ($result['s']==0){
    $stat2="UPDATE user SET status=1 WHERE id=$id;";
    Query($stat2);
    header("location:admin_dashboard.php");
    
}
if($result['s']==1){
    $stat2="UPDATE user SET status=0 WHERE id=$id;";
    Query($stat2);
    header("location:admin_dashboard.php");
}


?>