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

?>
    <!-- MENU SECTION STARTS-->
    <style type="text/css">
        .target_danger {
            color:white; 
            background-color:#BB4406;
            width:12rem; 
            border-radius:8%;
        }
        .box{
        border-color:red;
        }
    </style>
        <?php
            if(isset($_SESSION['error'])){?>
                <div class="alert alert-success" role="alert">
                <?= $_SESSION['error'];?>
                </div>
                <?php
            unset($_SESSION['error']);

            }
        ?> 
    <div class="board">
        <div id="signup_page">
            <div class="logo">
                <a href="Homepage.html"><img src="images/logo.png" alt="file not found"></a>
            </div>
            <div class="form">
                <form action="signup_validation.php" method="post" class="signup_form">
                    <div class="body">

                        <div class="row">
                            <h3>SIGNUP</h3>
                        </div>
                        <div class="row">

                            <input type="text" name="id" Placeholder="ID">

                            <?php
                                if(isset($_SESSION['id'])){?>
                                    <div class="alert alert-success" role="alert">
                                    <?= $_SESSION['id'];?>
                                    </div>
                                    <?php
                                unset($_SESSION['id']);

                                }
                            ?> 
                        </div>
                        <div class="row">
                            <div class="col" style="padding-left: 0rem;">
                                <input type="text" name="firstname" Placeholder="First Name">
                            </div>
                            <div class="col" style="padding-left: 0rem;">
                                <input type="text" name="lastname" Placeholder="Last Name">
                            </div>

                        </div>
                        <div class="row">
                        <?php
                                if(isset($_SESSION['name'])){?>
                                    <div class="alert alert-success" role="alert">
                                    <?= $_SESSION['name'];?>
                                    </div>
                                    <?php
                                unset($_SESSION['name']);

                                }
                            ?> 
                        </div>
                        <div class="row">

                            <input type="email" name="email" class="box" Placeholder="Enter Your Email">
                            <span class="target_danger">
                            <?php
                                if(isset($_SESSION['email'])){?>
                                    <div class="alert alert-success" role="alert">
                                    <?= $_SESSION['email'];?>
                                    </div>
                                    <?php
                                unset($_SESSION['email']);

                                }
                            ?> 
                        </div>
                        <div class="row">
                            <input type="password" name="password" Placeholder="Enter Your Password">
                            <span class="target_danger">

                            <?php
                                if(isset($_SESSION['password'])){?>
                                    <div class="alert alert-success" role="alert">
                                    <?= $_SESSION['password'];?>
                                    </div>
                                    <?php
                                unset($_SESSION['password']);

                                }
                            ?> 
                        </div>
                        <div class="row">
                            <button type="submit" class=" btn btn-success key" name="access">REGISTER</button>
                        </div>
                        <div class="row">
                            <p>Do you want to<span><a href=""> Login?</a></span></p>
                        </div>

                    </div>

                </form>

            </div>
            <div class="photoframe">
                <img src="images/signup_photo.png" alt="">
            </div>


        </div>
    </div>

    <!-- <div id="signup_page">
<div class="logo"></div>
<div class="signup_form">

</div>
<div class="photoframe"></div>
<div class="login_link">

</div>
</div> -->






    </div>
    <!-- MENU SECTION ENDS -->

    <!-- HEADING OF PAGE -->

    <!-- BOOTSRAP JS -->
    <script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>