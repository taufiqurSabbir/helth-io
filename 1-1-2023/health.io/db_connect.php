<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $Database= "healthportal";
define("servername", "localhost");
define("username", "root");
define("password", "");
define("Database", "healthportal");
// Create connection

$db = new mysqli(servername,  username, password, Database);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
    }


    function Query($statement){
        global $db;
        //require("db_connect.php");
        $result=mysqli_query($db ,  $statement);
        if(!$result){
            if(mysqli_connect_errno()){
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
                }
            
        }
        
        return $result;
        }
?> 