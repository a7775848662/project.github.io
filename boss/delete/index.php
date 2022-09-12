<?php



session_start();

if (!isset($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"]) {

    header("Location: ../login/");

}

require("../../database/index.php");





//delete movie

if (isset($_GET["id"])) {

    $delid = $_GET["id"];

    $query = 'DELETE FROM movie WHERE name="' . $delid . '";';

    $conn->query($query);

}





//delete requests

if (isset($_GET["rmname"])) {

    $name = $_GET["rmname"];

    $query = 'DELETE FROM rmovies WHERE rmname="' . $name . '";';

    $conn->query($query);

}





header("Location: ../");

?>



?>