<?php
require("../database/index.php");
$id = $_GET["id"];
$query = 'SELECT * FROM movie WHERE id="' . $id . '";';
$result = $conn->query($query);
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <title>Download <?php echo $row["name"]; ?> </title>

        <!-- Favicons -->
        <link href="../assets/img/top1.jpg" rel="icon">
        <link href="../assets/img/top1.jpg" rel="apple-touch-icon">

        <style>
            div.continer-fluid {
                border-radius: 0.03125in;
                text-align: center;
                border-radius: 0.03125in;
                -webkit-box-shadow: 0px 0in 0.75pc 4.5pt #999;
            }

            div.col-md-12 {
                -webkit-box-shadow: 0px 0in 0.75pc 4.5pt #999;
            }
        </style>
    </head>

    <body style="color: whitesmoke ; background-color: #171717">
    <?php include './navbar/index.php' ;?></br>

        <div class="container-fluid" style="margin-left 300px;">
            
            <div class="row">
                <div class="col col-md-8">
                    </br>
                    <?php
                    //Movie Info
                    echo '<div class="comtiner continer-fluid" style="font: size 5vw;  ">';

                    echo '<table class=" table-borderless table-sm w-auto"><tbody>';
                    echo '';
                    echo '<tr><td></td></tr>';
                    //name
                    echo '<tr><td><strong>Name</strong><i></td><td> <b>:<b> <td>';
                    $na = 0;
                    echo '<td><!------->'  . explode(" - ", $row["name"])[$na];
                    $name = explode(" - ", $row["name"])[$na];
                    echo '</td></tr>';

                    //Lang
                    echo '<tr><td><strong>Language</strong><i></td><td> <b>:<b> <td><td><!------->' . $row["lang"] . '</td></tr>';

                    //Year
                    echo '<tr><td><strong>Released Year</strong><i></td><td> <b>:<b> <td><td><!------->' . $row["ry"] . '</td></tr>';

                    //size
                    //echo '<tr><td><strong>Quality</strong><i></td><td> <b>:<b> <td><td><!------->' . $row["quality"] . ' - <i style="color:red;">' . $row['type'] . '</td></tr>';
                    //echo '<tr><td><strong>Size</strong><i></td><td> <b>:<b> <td><td><!------->' . $row["size"] . '</i></td></tr>';
                    //if ($row["zipsize"] != NULL) {
                       // echo '<tr><td><strong>Complete Zip</strong><i></td><td> <b>:<b> <td><td><!------->' . $row["zipsize"] . '</td></tr>';
                    //}
                    echo '<tr><td></td></tr>';
                    echo '</tbody></table></div>';
 
                    include './links.php';
                    ?>
                </div>
            </div>
 
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
<?php
}
?>

    </html>