<?php
session_start();
if (!isset($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"]) {
    header("Location: ../login/");
}
// Add movie logic
require("../../database/index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>movietime/add</title>

    <link href="assets/img/top1.jpg" rel="icon">
    <link href="assets/img/top1.jpg" rel="apple-touch-icon">

    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand mx-2" href="../">M-time</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mx-2 navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link <?php if (!isset($_GET["category"])) echo 'active'; ?> " href="../">Home</a></li>
            </ul>
        </div></br>

        <a class="btn btn-outline-success mx-2" href="../logout/" role="button">Logout</a>
    </nav></br>
    
    <?php
    if (isset($_POST["addMovie"])) {
        $id = uniqid();
        $name = $_POST["name"];
        $lang = $_POST["lang"];
        $ry = $_POST["ry"];
        // $category = strtolower($_POST["category"]);
        $category = strtolower(implode(" - ", $_POST["cats"]));
        $poster = $_POST["poster"];

        $sample = $_POST["sample"];

        $query = ' INSERT INTO `movie` (`id`, `name`, `lang`, `ry`, `category`, `poster`, `sample`) VALUES ("' . $id . '","' . $name . '","' . $lang . '","' . $ry . '","' . $category . '", "' . $poster . '","' . $sample . '")';
        $conn->query($query);

        echo '<div class="continer" style="text-align:center">';
        echo '<strong>' . $name . ' added Sucessfully . . . </strong>';
        echo '</div></br>';
    }
    ?>
    <?php include '../add/form.php' ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>