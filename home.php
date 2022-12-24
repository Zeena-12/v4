<?php 
include('livesearch.php');
include('search-filter.php'); 
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="./custom.css"> -->
  <!-- <link rel="stylesheet" href="./bootstrap.min.css"> -->
  <link rel="stylesheet" href="./overridesA.css">


  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <title>Home</title>
</head>

<header>
  <!-- Navbar -->
 <?php include('nav.php') ?>
</header>
<body>

  <!-- jumbotron -->
  <!-- <div class="container py-5 align-items-center text-center"> -->
     <div class="container align-items-center text-center" style="max-width: var(--breakpoint-md);">
  <div class="jumbotron bg-transparent mb-5">
   
    <div class="img mx-auto" style="width: 20rem;">
      <img src="images/Gaming-home2.svg" alt="">
    </div>
     <h1 class="display-4">WELCOME GEMER X</h1>
    <hr class="my-4 bg-white">
    <p class="lead">our center is designed to deliver a professional gaming experience for all levels, from the casual player to competitive gamer </p>
    <a class="btn btn-primary btn-lg" href="./browse2.php" role="button">Pricing</a>
  </div>
  <!-- </div> -->
  <!-- cards -->
  <h4 class="display-5 d-block text-white my-drop-shadow text-center mb-5">GATEGORIES</h4>
  <div class="row row-cols-1 row-cols-md-2 g-4 mx-auto" style="width: 50rem;">
    
    <div class="col">
      <div class="card mb-3">
        <img src="images/vr.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">VR Games</h5>
          <p class="card-text">VR gaming is going strong, with new models. We provide the latest VR games.</p>
          <a class="btn btn-outline-light " href="./browse2.php?cateroy=vr" role="button">View Places</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="images/pc.JPG" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title ">PC Games</h5>
          <p class="card-text">Enjoy with the latest games, with best Widows PC. Our prices are the best.</p>
          <a class="btn btn-outline-light " href="./browse2.php?cateroy=gaming" role="button">View Places</a>

        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="images/biliard.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Biliard</h5>
          <p class="card-text">Enjoy billiard with your friends and family, with convenient our places</p>
          <a class="btn btn-outline-light" href="./browse2.php?cateroy=billiard" role="button">View Places</a>

        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="images/room.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Private Rooms </h5>
          <p class="card-text">Now you can stream without interruption, and with more privacy</p>
          <a class="btn btn-outline-light" href="./browse2.php?cateroy=billiard" role="button">View Places</a>
        </div>
      </div>
    </div>
  </div> 
   

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"
          integrity="sha384-i61gTtaoovXtAbKjo903+O55Jkn2+RtzHtvNez+yI49HAASvznhe9sZyjaSHTau9"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
          integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
          integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
          crossorigin="anonymous"></script>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script src="./liveSearch.js"></script>

</body>

</html>
