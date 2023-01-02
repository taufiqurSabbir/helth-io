<?php
$read= "SELECT user_role FROM user WHERE email = '$User_email'" ;
$result=Query($read);
if($result== "student"){
    header("location:../student_backend/student_dashboard.php");
}
elseif($result== "teacher"){
    header("location:../student_backend/teacher_dashboard.php");
}
elseif($result== "doctor"){
    header("location:../student_backend/doctor_dashboard.php");
}
else{
    if($result== Null){
        header("location:../index.php");
    }
}

?>