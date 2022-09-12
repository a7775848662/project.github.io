<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>BookHub</title>
</head>

<body style="background-color: #778899;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand mx-2" href="../../">book-time</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="mx-2 navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link <?php if (!isset($_GET["category"])) echo 'active'; ?> " href="../../index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="https://ttttttt.me/ganamovie">Contact</a></li>
      </ul>
    </div>
  </nav>
  <?php
  require("../../database/index.php");
  if (isset($_POST["rsubmit"])) {

    $rid = uniqid();
    $rname = $_POST["rname"];
    $remail = $_POST["remail"];
    $rmname = $_POST["rmname"];
    $mry = $_POST["mry"];
    $feedback = $_POST["feedback"];
    $date = date("d/m/Y");

    $query_r = 'INSERT INTO rmovies (rid, rname, remail , rmname , mry , feedback , date) VALUES("' . $rid . '","' . $rname . '","' . $remail . '","' . $rmname . '","' . $mry . '","' . $feedback . '","' . $date . '");';
    $conn->query($query_r);

    echo '<br><div class="continer-fluid" style="text-align:center; font-size : 18px;">';
    echo '<b>' . $rmname . ' (' . $mry . ')</b> submitted<br>Response within 24hr. Please Join Telegram for updates..<br><br>';
    echo '<button class="btn-primary"><a href="https://ttttttt.me/ganamovie" type="button" style="text-decoration : none ; color:whitesmoke;">Join Telegram</a></button>';
    echo '</div>';
  }
  ?>
<br>
  <div id="RequestDiv" class="container-fluid" style="text-align : center;">
    <form action="./" id="requestform" method="post" enctype="multipart/form-data">
      <div style=" margin: auto; width: 80%;">

        <div class="form-group" style=" margin-bottom:15px;">
          <input type="text" class="form-control" name="rname" id="rname" placeholder="Enter your name" style="color:red;" required>
        </div>

        <div class="form-group" style="margin-bottom:15px;">
          <input type="email" class="form-control" name="remail" id="rmail" placeholder="Enter email" style="color:red;" required>
        </div>

        <div class="form-group" style="margin-bottom:15px;">
          <input type="text" class="form-control" name="rmname" id="rmname" placeholder="Enter Book name" style="color:red;" required>
        </div>

        <div class="form-group" style="margin-bottom:15px;">
          <input type="number" class="form-control" id="releaseYear" name="mry" placeholder="Enter release year" style="color:red;">
        </div>

        <div class="form-group" style="margin-bottom:15px;">
          <textarea type="text" class="form-control" placeholder="Your Response is Valuable to US." name="feedback" style="color:red;"></textarea>
        </div>

      </div></br>

      <button class="btn-success btn-lg" type="Submit" name="rsubmit">Submit Request</button>

    </form>
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>