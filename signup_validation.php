<?php
    session_start();
    require("db_connect.php");
    echo "<pre style='background-color:grey;'>";
    print_r($_SERVER["SCRIPT_FILENAME"]);
    echo "</pre>";

        

    

    if(isset($_POST['access']) || $_SERVER ['REQUEST_METHOD'] == 'POST'){
      
        $name= $_POST['firstname']. " " . $_POST['lastname'];
        $id=$_POST['id'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $regexdoctor = '/^[a-z]+@[medical]+\.uiu\.ac\.bd$/'; 
        $regpassadmin= '/^[a-z]+@[admin]+\.uiu\.ac\.bd$/';
        $regexstudent = "/^[a-z]+[0-9]{6}@[a-z]+\.uiu\.ac\.bd$/i";
        $regexteacher = "/^[a-z]+@[cse|eee|bba|eds|media]+\.uiu\.ac\.bd$/i";
        
        $checkermail="select count(*) as t from user where email= '$email'";
        $checkerid="select count(*) as t from user where id= '$id'";
        $checkermail=Query($checkermail);
        $checkerid=Query($checkerid);
        $checkermail=mysqli_fetch_assoc($checkermail);
        $checkerid=mysqli_fetch_assoc($checkerid);

    //      //Validation
        if($checkerid['t'] || $checkermail['t'] == 0){
            if(strlen($id)== 9){
                if(!empty($email)){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        
                        if (preg_match($regexdoctor, $email)) {
                            $password= password_hash($password,PASSWORD_BCRYPT );
                            $userole= "doctor";
                            $statment = "INSERT INTO user(id, name, email, password, user_role,status) VALUES ('$id','$name','$email', '$password','$userole',0)";
                            Query($statment);
                            header("location:login.php");
    
                        } 
                        elseif (preg_match($regexteacher, $email)) {
                            $password= password_hash($password,PASSWORD_BCRYPT );
                            $userole= "teacher";
                            $statment = "INSERT INTO user(id, name, email, password, user_role) VALUES ('$id','$name','$email', '$password','$userole')";
                            Query($statment);
                            header("location:login.php");
    
                        } 
                        elseif (preg_match($regexstudent, $email)) {
                            $password= password_hash($password,PASSWORD_BCRYPT );
                            $userole= "student";
                            echo "heloo";
                            $statment = "INSERT INTO user(id, name, email, password, user_role) VALUES ('$id','$name','$email', '$password','$userole')";
                            Query($statment);
                            header("location:login.php?p='allowed'");
    
                            
                        } 
                        
                     
                        else { 
                            $_SESSION['email']= " \tEmail not from UIU";
                            header("location:signup.php");
                        }           
                    }
                    else{
                        $_SESSION['email']= " \tInvalid email";
                        header("location:signup.php");
                    }
                }
            
                else{
                    $_SESSION['email']= " \tPlease enter your email.";
                    header("location:signup.php");
                }
           
            }
            else{
                $_SESSION['id']= " \tPlease make sure your id is 9 digits.";
                header("location:signup.php");
            }
            
        }
        else{
            $_SESSION['id']= " \tAccount already in use";
                header("location:signup.php");

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