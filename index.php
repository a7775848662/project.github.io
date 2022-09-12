<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="This is website to download movies and series ...">
  <meta name="keywords" content="Movies , Filmyzilla , Filmywap , vegamovies , Netflix , Amazone ,  meta tags, meta description, meta keywords, SEO, search engine optimization">
  
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Favicons -->
  <link href="assets/img/top1.jpg" rel="icon">
  <link href="assets/img/top1.jpg" rel="apple-touch-icon">

  <title>Digital Library</title>
</head>

<body style=" background-color: black; ">
  <center>
    <?php include './component/navbar/index.php'; ?>
    </br>
    <div class="alert-md alert-Primary alert-dismissible fade show" role="alert" style="background-color:#171717;">
      <!---------------alert------------->
      <div id="alert" class="alert alert-dismissible fade show" role="alert">
        <a style="text-decoration:none;"><strong>Welcome to VP ki Liabrary . . . </strong></a>
        </a>
      </div>
      <script type="text/javascript">
        setTimeout(function() {
          // Closing the alert
          $('#alert').alert('close');
        }, 5000);
      </script>
    </div>

    <div class="container container-fluid">
      <form class="d-flex" action="./" method="GET">
        <!------------------search bar------------------------>
        <input id="mname" class="form-control me-3" type="search" name="search" placeholder="Search for ...." aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
      </br>
      <br>
      <!----------------category--->
      <?php
      if (isset($_GET["category"])) {
        echo '<input type="hidden" name="category" value="' . $_GET["category"] . '">';
      }
      ?>
    </div>
    <!-- Movie Cards -->
    <div class="container">
      <div class="row">
        <?php
        $_color = 'black';
        require './database/index.php';
        // category . . .
        if (isset($_GET["category"])) {
          include './component/category/index.php';
        }
        //search
        elseif (isset($_GET["search"])) {
          include './action/getsearch/index.php';
        } else {
          //<!-----------getmovie----------------->
          include './action/getmovie/index.php';
        }
        ?>
      </div>
    </div>



  </center>
  <!--------------bootstrap-------------->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body></br><br>
<hr>

<div class="container" style="text-align: center">
  <button class="btn-danger"><a href="./action/Request/" style="text-decoration : none ; color:whitesmoke;" type="button">Request Book</a></button>
</div>


</html>