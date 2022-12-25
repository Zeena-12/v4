<?php include('search-filter.php') ?>
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
  <link rel="stylesheet" href="overridesA.css">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Browse</title>
</head>
<header>
<?php include('nav.php') ?>
</header>
<body>
<!-- cards -->
<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 g-4 mx-auto">
    <?php 
    if($error==0){
    foreach($query as $card){ ?>
    <div class="col">
      <div class="card mb-3 shadow-lg" style="margin-top:1rem;">
      <div>
        <img src="images/<?php echo "$card[4]"; ?>" class="card-img-top" alt="..." style="height:15rem;object-fit:cover;">
      </div>
        <div class="card-body">
          <h4> <?php echo "$card[1]";?></h4>
          
          <h6><i class="bi bi-star-fill" style="color:orange;"></i> Rating: <?php  echo bcdiv("$card[5]","1"); ?></h6>
          <h6> Type: <?php echo "$card[2]";?></h6>
          <h6>Price:  <?php echo "$card[3]";?> BD</h6>
          <a class="btn btn-primary mb-1 " href="view.php?id=<?php echo "$card[0]";?>&rating=<?php echo "$card[5]";?>" role="button">View Place</a>
        </div>
      </div>
    </div>
 <?php
    }
  }
  // if user type misspelled keyword
  else{ include("./not-found.php");}
    ?>   
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
