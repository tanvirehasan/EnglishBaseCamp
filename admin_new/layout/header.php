<?php
session_start();
if (!isset($_SESSION['admin_user'])) {
  echo "<script> location.replace('login.php')</script>";
} else {
  $userid = $_SESSION['admin_user'];
}
include "../controller/config/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Basecamp Study</title>
  <link rel="icon" type="image/x-icon" href="../assets/upload/brand/fvicon.png">
  <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/admin.css">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.tiny.cloud/1/4ji99lkzm49svloyysqo9xvmtu03b24c3gvvfby23di6bhfa/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
</head>

<body>
  <!-- Menu bar  -->
  <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-2" style="background:#2471A3;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0 px-3" href="#"> <img src="../assets/images/logo/logo.png" alt="" width="150px"> </a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link text-capitalize" href="logout.php"> <?= UserData() ?> | Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light">
        <div class="sidebar-sticky p-4">
          <h3>Admin Panel</h3>
          <ul class="list-unstyled ps-0">
            <li class="mb-1">
              <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#homes-collapse">
                Home
              </button>
              <div class="collapse" id="homes-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="slider.php" class="link-dark rounded">slider</a></li>
                  <li><a href="about_us.php" class="link-dark rounded">About</a></li>
                  <li><a href="our_clients.php" class="link-dark rounded">Our Clients</a></li>
                  <li><a href="team.php" class="link-dark rounded">Team</a></li>
                  <li><a href="news.php" class="link-dark rounded">Newsletter</a></li>
                </ul>
              </div>
            </li>

            <li class="mb-1">
              <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#services-collapse" aria-expanded="false">
                Services
              </button>
              <div class="collapse" id="services-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="services.php" class="link-dark rounded">New</a></li>
                  <li><a href="catagory.php" class="link-dark rounded">Service Catagorys</a></li>
                </ul>
              </div>
            </li>

            <li class="mb-1">
              <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#blog-collapse" aria-expanded="false">
                Blog & Resorce
              </button>
              <div class="collapse" id="blog-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="blog.php" class="link-dark rounded">New</a></li>
                  <li><a href="blog_catagory.php" class="link-dark rounded">Blog Catagory</a></li>
                </ul>
              </div>
            </li>


            <li class="mb-1">
              <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#blog-collapse" aria-expanded="false">
                Settings
              </button>
              <div class="collapse" id="blog-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="settings.php" class="link-dark rounded">New</a></li>
                  <li><a href="blog_catagory.php" class="link-dark rounded">Blog Catagory</a></li>
                </ul>
              </div>
            </li>




          </ul>
        </div>
      </nav>

      <div class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">