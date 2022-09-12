<?php

session_start();

if (!isset($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"]) {

    header("Location: ../login/");

}



// Add movie logic

require("../../database/index.php");



$upid = $_GET["id"];

$query = ' SELECT * FROM `movie` WHERE  `id` ="' . $upid . '" ';

$queryrun = mysqli_query($conn, $query);

$data = mysqli_fetch_array($queryrun);

$id = $upid;



?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>BookHub/admin/update</title>



    <link href="../../assets/img/top.jpg" rel="icon">

    <link href="../../assets/img/top.jpg" rel="apple-touch-icon">



</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="text-align: center;">

        <a class="navbar-brand mx-2" href="../">M-time</a>

        <a class="btn btn-outline-success mx-2" href="../logout/" role="button">Logout</a>

    </nav></br>



    <div class="container continer-fluname">

    <?php echo '<form class="form-update" action="./?id=' . $data["id"] . '" method="post" enctype="multipart/form-data">';

    ?>

        <div class="input-group">

            <div class="col-md-6 col-6 col-lg-6">

                <label for="id">Id</label><input type="text" name="id" name="id" value="<?= $data['id'] ?>" class="form-control">

            </div>

            <div class="col-md-6 col-6 col-lg-6">

                <label for="ry">Realese Year</label><input type="text" name="ry" name="ry" value="<?= $data['ry'] ?>" class="form-control">

            </div>

        </div><br>



        <div class="input-group">

            <div class="col-md-6 col-6 col-lg-6">

                <label for="name">Movie Name</label><input type="text" name="name" name="name" value="<?= $data['name'] ?>" class="form-control">

            </div>

            <div class="col-md-6 col-6 col-lg-6">

                <label for="name">Language</label><input type="text" name="lang" name="lang" value="<?= $data['lang'] ?>" class="form-control">

            </div>

        </div></br>



        <div class="input-group">

            <div class="col-md-12 col-12 col-lg-12">

                <label for="name">Poster</label><input type="text" name="poster" name="poster" value="<?= $data['poster'] ?>" class="form-control">

            </div>

        </div></br>





        <div class="input-group">

            <div class="col-md-6 col-6 col-lg-6"><label for="name">Category</label><input type="text" name="upcats[]" value="<?= $data['category'] ?>" class="form-control"></div>

        </div></br>



        <div class="input-group">

            <div class="col-md-4 col-6 col-lg-2"><input type="checkbox" name="upcats[]" value="Latest" selected />Latest</div>

            
        </div></br>





        <div class="input-group">

            <div class="col-md-12 col-12 col-lg-12"> <label for="name">Sample Link</label>

                <input type="text" name="sample" name="sample" value="<?= $data['sample'] ?>" class="form-control" autocomplete=”off”>

            </div>

        </div></br>



            <?php echo '<button type="submit" name="upmovie" class="btn btn-primary my-3" href="./update/?id=' . $data['id']  . '"> Save Changes</button>' ?>



        </form>

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>







</body>







<style>

    form.form-update,

    .div.input-group,

    .div.col-md-6.col-6.col-lg-6,

    .lable {

        color: red;

    }

</style>



</html>