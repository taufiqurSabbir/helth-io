<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS LINK HERE -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="style/boostrap/bootstrap.min.css">
    <!-- OTHER LINKS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,900&family=Open+Sans:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style\Login_signup.css">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    require("db_connect.php");
    echo "<pre style='background-color:grey;'>";
    print_r($_SERVER["SCRIPT_FILENAME"]);
    echo "</pre>";
    
    ?>
    <!-- MENU SECTION STARTS-->
    <div class="board">
        <div id="login_page">
            <div class="logo">
                <a href="Homepage.html"><img src="images/logo.png" alt="file not found"></a>
            </div>
            <div class="form">
                <form action="login_validation_check.php" method="post" class="login_form">
                    <div class="body">
                        <div class="row">
                            <h3>LOGIN</h3>
                        </div>
                        <div class="row">
                            <input type="email" name="email" class="box" Placeholder="Enter Your Email">
                            <span class="target_danger" >
                            
                                <?php
                                    if(isset($_SESSION['email'])){
                                        echo $_SESSION['email'];
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
                                        unset($_SESSION['email']);

                                    }
                                ?>
                            </span>
                        </div>
                        <div class="row">
                            <input type="password" name="password"  class="pass" Placeholder="Enter Your Password">
                            <span class="target_danger">
                                <?php
                                    if(isset($_SESSION['password'])){
                                        echo $_SESSION['password'];
                                        echo '<style type="text/css">
                                        .target_danger {
                                            color:white; 
                                            background-color:#BB4406;
                                             width:12rem; 
                                             border-radius:8%;}
                                        .box{
                                             border-color:red;
                                            }
                                        </style>';
                                        unset($_SESSION['password']);

                                    }
                                ?>
                        </div>
                        <div class="row">
                            <button type="submit" class=" btn btn-success key" name="access">LOGIN</button>
                        </div>
                        <div class="row">
                            <p>Are you new? Do you want to <span><a href=""> Signup?</a></span></p>
                        </div>
                    </div>

                </form>
                

            </div>
            <div class="photoframe">
                <img src="images/signup_photo.png" alt="">
            </div>
            

            </div>
        </div>

        





    </div>
    <!-- MENU SECTION ENDS -->

    <!-- HEADING OF PAGE -->

    <!-- BOOTSRAP JS -->
    <script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>