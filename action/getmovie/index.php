<?php
require("./database/index.php");
//include './component/cursorer/inedx.html';

//pagesg logic  . . .
$record_per_page = 24;
$page = ' ';
if (isset($_GET["page"])) {
  $page = $_GET["page"];
} else {
  $page = 1;
  include './action/getmovie/latest/index.php';
}


$start = ($page - 1) * $record_per_page;

$query = "SELECT * FROM movie ORDER BY id DESC LIMIT $start,$record_per_page"; //ORDER BY RAND ()
$result = $conn->query($query);


//displpay movie block of page 
while ($row = $result->fetch_assoc()) {
  if (in_array('18plus', array_map("trim", explode("-", $row["category"]))) or in_array('latest', array_map("trim", explode("-", $row["category"])))) {
    continue;
  }
  $movie = $row;
  //col-   mobile view    col-md   tablet      col-larrge-  laptop
  include './component/moviecard/index.php';
}

//font-size: 8px ; text-align : center ; color : green
$page_query = " SELECT * FROM movie ORDER BY id DESC ";
$page_result = mysqli_query($conn, $page_query);
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records / $record_per_page);

# pages	
echo "<div class='continer-fluid' style='text-align: center;'></br>";
//paging logic
if ($page > 1) {
  echo "<button class='btn-outline-info round'> <a style='text-decoration : none ; color:Black;' href='?page=" . ($page - 1) . "'><b>Prev</b></a></button>";
}

for ($i = 1; $i <= $total_pages; $i++) {
  if ($i == $page) {
      if ($i > 1) {
        if ($i > 2) {
          echo ' ';
          echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?page=" . ($i - 2) . "'><b>" . ($i - 2) . "</b></a></button>";
        }
        echo ' ';
        echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?page=" . ($i - 1) . "'><b>" . ($i - 1) . "</b></a></button>";
      }
      echo ' ';
      echo "<button class='btn-outline-warning active' > <a style='text-decoration : none ; color:Black;' href='?page=" . $i . "'><b>" . $i . "</b></a></button>";
      if ($i < $total_pages) {
        echo ' ';
        echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?page=" . ($i + 1) . "'><b>" . ($i + 1) . "</b></a></button>";
        if (($i + 1) < $total_pages) {
          echo ' ';
          echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?page=" . ($i + 2) . "'><b>" . ($i + 2) . "</b></a></button>";
        }
     }
   }
 }

if ($page < $total_pages) {
  echo ' ';
  echo "<button class='btn-outline-info round'> <a style='text-decoration : none ; color:black;' href='?page=" . ($page + 1) . "'><b>Next</b></a></button>";
}


echo '</div>';
?>
<style>
  .btn-outline-warning,
  .btn-outline-info {
    border-radius: 50%;
  }
</style>