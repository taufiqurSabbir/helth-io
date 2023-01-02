<?php
    session_start();
    require("db_connect.php");
    echo "<pre style='background-color:grey;'>";
    print_r($_SERVER["SCRIPT_FILENAME"]);
    echo "</pre>";
    

    

    $email= $_POST['email'];
    $password=  $_POST['password'];
    

    $read= "SELECT password,name, user_role FROM user WHERE email = '$email'" ;
    $result=Query($read);
    $result=mysqli_fetch_assoc($result);
    

    
    

    if(isset($_POST['access']) || $_SERVER ['REQUEST_METHOD']== 'POST'){
      
         //Validation
        if(!empty($email)){
            if($result['user_role']=="student"){
                $address="student_backend/student_dashboard.php";
                if (password_verify($password, $result["password"])) {
                    $_SESSION["user_name"] = $result["name"];
                    $_SESSION["email"] = $email;
                    header("location:" . $address);
                } else {
                    $_SESSION["password"]= "Incorrent password";
                    header("location:login.php");
                }
                
            }
            elseif($result['user_role']=="teacher"){
                $address="teacher_backend/teacher_dashboard.php";
                
                if (password_verify($password, $result["password"])) {
                    $_SESSION["user_name"] = $result["name"];
                    $_SESSION["email"] = $email;
                    header("location:" . $address);
                } else {
                    $_SESSION["password"]= "Incorrent password";
                    header("location:login.php");
                }
                
            }
            elseif($result['user_role']=="doctor"){
                $address="doctor_backend/doctor_dashboard.php";
                $pending_doctor ="doctor_backend/doctor_pending.php";

                
                if (password_verify($password, $result["password"])) {
                    $_SESSION["user_name"] = $result["name"];
                    $_SESSION["email"] = $email;

                    if ($result['status']==1)
                        header("Location:" . $address);
                    if ($result['status']==0)
                        header("Location:" . $pending_doctor);





                } else {
                    $_SESSION["password"]= "Incorrect password";
                    header("location:login.php");
                }
                
            }
            elseif($result['user_role']=="admin"){
                $address="admin_backend/admin_dashboard.php";
                if ($password ==$result["password"]) {
                    $_SESSION["user_name"] = $result["name"];
                    $_SESSION["email"] = $email;
                    header("location:" . $address);
                } else {
                    $_SESSION["password"]= "Incorrent password";
                    header("location:login.php");
                }
                
            }
            else{
                $_SESSION["email"]="email not in use";
                header("location:login.php");
            }
            
            
        }
        else{
            $_SESSION['email']= " \tFill in the Email ";
            header("location:login.php");
        }
        
       
    } 

    else{
        die ("Error in Login\n");
    }
    
    








  


  

    
    
    // regular expression checker
    // $string="sislam193080@bscse.uiu.ac.bd";
    // $string1="mohaiminul@eds.uiu.ac.bd";
    // $string2="mohaiminul@medical.uiu.ac.bd";
    // $string3="mohaiminul@admin.uiu.ac.bd";

    // $regexdoctor = '/^[a-z]+@[medical]+\.uiu\.ac\.bd$/'; 
    // $regpassadmin= '/^[a-z]+@[admin]+\.uiu\.ac\.bd$/';
    
     //$regexstudent = "/^[a-z]+[0-9]{6}@[a-z]+\.uiu\.ac\.bd$/i";
    // $regexteacher = "/^[a-z]+@[cse|eee|bba|eds|media]+\.uiu\.ac\.bd$/i";
    
     //echo preg_match($regexstudent, $string) == 1 ?  "matched":  " not matched";
    // echo preg_match($regexteacher, $string1) == 1 ?  "matched":  " not matched";
    // echo preg_match($regexdoctor, $string2) == 1 ?  "matched":  " not matched";
    // echo preg_match($regpassadmin, $string3) == 1 ?  "matched":  " not matched";
    
    
?>