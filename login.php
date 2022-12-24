<?php

  try{
    require('connection.php');
    // $rs=$db->query("SELECT * FROM users");
    // $user=0;
    // foreach($rs as $row){
    //   if($row[4]==$_POST['email'] && $row[5]==$_POST['password']){
    //     $_SESSION['userMode']=$row[0];
    //     echo "Done";
    //     echo "Done";
    //     echo "Done";
    //     echo "Done";
    //     echo "Done";
    //     // header("location:home.php?mode=user");
        
        
    //   }
    // }

    
  }

  catch(PDOException $e){
    die("Error: ".$e->getMessage());
  }



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

  <title>Login</title>
</head>

<body>

  <main class="container py-5"><form action="" method="post" class="container" style="max-width: var(--breakpoint-md);">
      <div class="card">
        <h4 class="card-header">Login</h4>
        <div class="card-body">
          <div class="form-group row">
            <label class="col-md-3 col-form-label" for="inputEmail_">Email</label>
            <div class="col-md-9">
              <input type="email" class="form-control" id="inputEmail_" name="email" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 cold-form-label" for="inputPassword4">Password</label>
            <div class="col-md-9">
              <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" type="checkbox" id="c99">
              <label class="custom-control-label" for="c99">
                Remember me
              </label>
            </div>
          </div>
          <div class="form-group">Don't have an account yet? <a href="./register.html">Sign up</a> </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary"><a href="./home.php?mode=user" style="color: white;">Sign in</a></button>
          </div>
        </div>
      </div>
    </form>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"
          integrity="sha384-i61gTtaoovXtAbKjo903+O55Jkn2+RtzHtvNez+yI49HAASvznhe9sZyjaSHTau9"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
          integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
          integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
          crossorigin="anonymous"></script>
</body>

</html>
