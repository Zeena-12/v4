<?php
require('connection.php');
try {
    $id = $_GET['id'];
    $query = $db->query("SELECT * FROM places WHERE pid = $id");
    $queryComment = $db->query("SELECT user.fname,com.description, com.rating
     FROM users user, comments com  WHERE
      pid =$id AND user.uid=com.uid");

} catch (PDOException $e) {
    die($e->getMessage());
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="overridesA.css">
</head>
<header>
    <!-- navbar -->
</header>

<body>
    <div class="container mt-5">
        <?php while ($row = $query->fetch(PDO::FETCH_OBJ)) { ?>
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="images/<?php echo "$row->image"; ?>" class="img-fluid img-thumbnail h-100">
                </div>
                <div class="col-12 col-md-8">
                    <h1><?php echo "$row->name"; ?></h1>
                    <p><i class="bi bi-star-fill" style="color:orange;"></i> Rating: <?php echo  bcdiv($_GET['rating'],"1");?></p>
                    <div class="text-wrap text-break">
                        <h4><?php echo "$row->description"; ?></h4>
                    </div>
                    <h4><?php echo "$row->category"; ?></h4>
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h3>Date</h3>
                            <div class="row gap-1 mx-1">
                                <input type="radio" class="btn-check" name="date" id="22">
                                <label class="btn btn-outline-secondary col-2" for="22">22</label>
                                <input type="radio" class="btn-check" name="date" id="23">
                                <label class="btn btn-outline-secondary col-2" for="23">23</label>
                                <input type="radio" class="btn-check" name="date" id="24" disabled>
                                <label class="btn btn-outline-secondary col-2" for="24">24</label>
                                <input type="radio" class="btn-check" name="date" id="25">
                                <label class="btn btn-outline-secondary col-2" for="25">25</label>
                                <input type="radio" class="btn-check" name="date" id="26">
                                <label class="btn btn-outline-secondary col-2" for="26">26</label>
                            </div>
                            <h3>Period: 1hr</h3>
                            <div class="row gap-1 mx-1">
                                <input type="radio" class="btn-check" name="period" id="8AM">
                                <label class="btn btn-outline-secondary col-3" for="8AM">8AM</label>
                                <input type="radio" class="btn-check" name="period" id="2PM">
                                <label class="btn btn-outline-secondary col-3" for="2PM">2PM</label>
                                <input type="radio" class="btn-check" name="period" id="7PM" disabled>
                                <label class="btn btn-outline-secondary col-3" for="7PM">7PM</label>
                            </div>
                            <h3 class="mt-3">Price: <?php echo "$row->price"; ?> BD</h3>
                            <button type="button" class="btn btn-secondary">
                                <a href="print.html" style="text-decoration: none; color:black">Book now </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php
        }
?>
<div class="container mt-5 mx-auto">
    <div class="row mx-auto">
        <?php 
        foreach ($queryComment as $comment) { ?>
            <div class="card col-12 col-md-6 col-lg-3 m-1">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $comment[0];?></h5>

                    <p class="card-text"><?php echo $comment[1]; ?></p>
                    <p> Rating: <?php echo $comment[2]; ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>