<?php

require("./database/index.php");

//pagesg logic  . . .
$query = "SELECT * FROM movie ORDER BY RAND () ";

$result = $conn->query($query);

$lcount = 0;

//displpay movie block of page 

while ($row2 = $result->fetch_assoc()) {

  if ((in_array("latest", array_map("trim", explode("-", $row2["category"]))))) {
    $lcount = $lcount + 1 ;
    $movie = $row2;
    include './component/moviecard/index.php';
    //col-   mobile view    col-md   tablet      col-larrge-  laptop
  }

}

?>






