<?php

session_start();

if (!isset($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"]) {

    header("Location: ./login/");

}

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>BookStore/admin</title>



    <link href="../assets/img/top1.jpg" rel="icon">

    <link href="../assets/img/top1.jpg" rel="apple-touch-icon">





</head>



<body style="background-color: #171711;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a class="navbar-brand mx-2" href="../">M-time</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="mx-2 navbar-nav mr-auto">

                <li class="nav-item"><a class="nav-link active" href="../">Home</a></li>

                <li class="nav-item"><a class="nav-link" href="https://tttttt.me/ganamovies">Contact</a></li>

            </ul>

        </div></br>

        <a class="btn btn-outline-success mx-2" href="./add/" role="button">Add</a>

        <a class="btn btn-outline-secondary mx-2" href="./logout/" role="button">Logout</a>

    </nav>



    <div class="album py-4" style="background-color: #171711; color:whitesmoke">

        <div class="container">

            <form class="d-flex" action="./" method="GET">

                <!------------------search bar------------------------>

                <input id="mname" class="form-control me-2" type="search" name="search" placeholder="Search for ...." aria-label="Search">

                <button class="btn btn-outline-primary" type="submit">Search</button>

            </form></br>



            <div class="row">

                <?php

                require("../database/index.php");

                $page_q = " SELECT * FROM movie ORDER BY id DESC ";

                $page_re = mysqli_query($conn, $page_q);

                $total_re = mysqli_num_rows($page_re);

                echo "<a style='font-size:18px'><b> WE added total   $total_re  upto date...</b></a>";

                echo "<hr>";

                $query = "SELECT * FROM rmovies ORDER BY rid DESC";

                $res = $conn->query($query);



                ?>

                <div class="container container-fluid">

                    <table class="table" style="color:white">

                        <thead>

                            <tr>

                                <th></th>

                                <th>Name</th>

                                <th>Book</th>

                                <th>Release Year</th>

                                <th>Date </th>

                            </tr>

                        </thead>



                        <tbody><?php

                                while ($rowr = mysqli_fetch_assoc($res)) { ?><tr>

                                    <td><?php echo '<a class="btn btn-sm btn-danger" href="./delete/?rmname=' . $rowr["rmname"] . '" role="button">Delete</a>'; ?></td>

                                    <td><?php echo $rowr['rname']; ?></td>

                                    <td><?php echo $rowr['rmname']; ?></td>

                                    <td><?php echo $rowr['mry']; ?></td>

                                    <td><?php echo $rowr['date']; ?></td>

                                </tr><?php } ?>

                        </tbody>

                    </table>

                </div><br><br>

                <hr>



                <?php

                $query = "SELECT * FROM movie  ORDER BY id DESC";

                $result = $conn->query($query);

                if ($result->num_rows > 0) {

                    if (isset($_GET["search"])) {

                        while ($row = $result->fetch_assoc()) {

                            if ((strpos(strtolower($row["name"]), strtolower($_GET["search"])) !== false)) {

                                include './moviecard/index.php';

                            }

                        }

                    } else {

                        $count = 0;

                        while ($row = $result->fetch_assoc()) {

                            if ($count > 23) {

                                break;

                            }

                            include './moviecard/index.php';

                            $count = $count + 1;

                        }

                    }

                }

                ?>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>



</html>