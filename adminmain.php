<?php

include('connection/config.php');
include('session.php');
?>


<!DOCTYPE html>
<html lang="en">
 
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 <link rel="icon" href="image/logo.png"/>
    <title>Sistem i-Green</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Halaman Utama</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item   ">
              <a class="nav-link" href="sisa_pepejal.php">Pengurusan Sisa Pepejal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pembersihan_awam.php">Pengurusan Pembersihan Awam</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white">Sistem I-Green </h1>
          
        </div>
      </div>
    </header>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="p-5">
               <a href="sisa_pepejal.php">
              <img class="img-fluid rounded-circle" src="image/susu.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-5">
              <h2 class="display-4"><a href="sisa_pepejal.php">Pengurusan Sisa Pepejal</a></h2>
              <p> Pengurusan Sisa Pepejal Majlis Perbandaran Kluang 2017 </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="p-5">
               <a href="lupus_buku.php">
              <img class="img-fluid rounded-circle" src="image/sapu.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-5">
              <h2 class="display-4"><a href="pembersihan_awam.php">Pembersihan Awam</a></h2>
              <p> Pembersihan Awam Majlis Perbandaran Kluang 2017 </p>
            </div>
          </div>
        </div>
      </div>
    </section>
<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"><center><p>Hak Cipta Terpelihara &copy; 2017<a href="http://www.mpkluang.gov.my/" target="_parent"> Majlis Perbandaran Kluang</a></p></center>
    </div></p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
