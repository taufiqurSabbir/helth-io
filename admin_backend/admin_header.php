<?php
require_once "session.php";
require_once "redirect.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS LINK HERE -->
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="../style/boostrap/bootstrap.min.css">
  <link href="../style/admin_dashboard.css" rel="stylesheet">
  <!-- OTHER LINKS -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,900&family=Open+Sans:wght@500&display=swap"
    rel="stylesheet">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />



  <title>Document</title>
</head>

<body>


  <!-- BODY SECTION -->
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
        <div class="dropdown">
            <a href="admin_dashboard.php" class="dropdown-toggle list-group-item list-group-item-action py-2 ripple active "
              data-bs-toggle="dropdown" aria-expanded="false" aria-current="true">
              <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
              
            </a>
            <ul class="dropdown-menu" style="width:100%;">
            <li><a class="dropdown-item" href="admin_dashboard.php">See all users</a></li>
              
            </ul>
           
          </div>
          <div class="dropdown">
            <a href="campaign_table.php" class="dropdown-toggle list-group-item list-group-item-action py-2 ripple  "
              data-bs-toggle="dropdown" aria-expanded="false" aria-current="true">
              <i class="fa-solid fa-campground me-3"></i><span>Campaign</span>
            </a>
            <ul class="dropdown-menu" style="width:100%;">
            <li><a class="dropdown-item" href="add_campaign.php">Add Campaign</a></li>
              <li><a class="dropdown-item" href="campaign_table.php">Campaign Table</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <a href="Blood_post.php" class="dropdown-toggle list-group-item list-group-item-action py-2 ripple  "
              data-bs-toggle="dropdown" aria-expanded="false" aria-current="true">
              <i class="fa-solid fa-droplet me-3"></i><span>Blood post</span>
            </a>
            <ul class="dropdown-menu" style="width:100%;">
            <li><a class="dropdown-item" href="add_blood_post.php">Add Blood Post</a></li>
              <li><a class="dropdown-item" href="Blood_post.php">Blood Post Table</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <a href="Blog_table.php" class="dropdown-toggle list-group-item list-group-item-action py-2 ripple "
              data-bs-toggle="dropdown" aria-expanded="false" aria-current="true">
              <i class="fa-brands fa-blogger me-3"></i><span>Blogs</span>
            </a>
            <ul class="dropdown-menu" style="width:100%;" >
            <li><a class="dropdown-item" href="add_blog.php">Add Blogs</a></li>
            <li><a class="dropdown-item" href="blog_table.php">Blog table</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <a href="medicine_table.php" class="dropdown-toggle list-group-item list-group-item-action py-2 ripple "
              data-bs-toggle="dropdown" aria-expanded="false" aria-current="true">
              <i class="fa-solid fa-prescription-bottle-medical me-3"></i><span>Medicine</span>
            </a>
            <ul class="dropdown-menu" style="width:100%;">
              <li><a class="dropdown-item" href="add_med.php">Add Medicine</a></li>
              <li><a class="dropdown-item" href="medicine_table.php">Medicine table</a></li>
              <li><a class="dropdown-item" href="receipts_table.php">See Receipts</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <a href="policy_table.php" class="dropdown-toggle list-group-item list-group-item-action py-2 ripple "
              data-bs-toggle="dropdown" aria-expanded="false" aria-current="true">
              <i class="fa-solid fa-building-shield me-3"></i><span>Policy</span>
            </a>
            <ul class="dropdown-menu" style="width:100%;">
              <li><a class="dropdown-item" href="add_policy.php">Add Policiy</a></li>
              <li><a class="dropdown-item" href="policy_table.php">Policiy_table</a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="../images/logo.png" height="50" alt="MDB Logo"
            loading="lazy" />
        </a>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">

          <!-- Avatar -->
          <li><h6 class="mt-3">Hi! <?= $_SESSION['user_name'];?></h6></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
              id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="50".
                alt="Avatar" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="editprofile.php">My profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="settings.php">Settings</a>
              </li>
              <li>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->