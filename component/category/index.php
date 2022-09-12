<?php
require("./database/index.php");

//pagesg logic  . . .
$record_per_page = 24;
if (isset($_GET["catpage"])) {
  $catpage = $_GET["catpage"];
} else {
  $catpage = 1;
}

//print_r($data);
$start = (($catpage - 1) * $record_per_page) ;
$last = 24;
$query2 = "SELECT * FROM movie ORDER BY id DESC";
$result2 = $conn->query($query2);
$count_cat = 0;
$cat_data = array(); // array to store subdata

//fetching info from db
while ($row2 = $result2->fetch_assoc()) {
  if (!(in_array(strtolower($_GET["category"]), array_map("trim", explode("-", strtolower($row2["category"])))))) {
    //col-   mobile view    col-md   tablet      col-larrge-  laptop
    continue;
  }
  $cat_data[] = $row2; // stpre results in array
  $count_cat = $count_cat + 1;
}


// required pages
$total_catpages = ceil($count_cat / 24);

//echo 'record'.$count_cat;
//echo 'page'.$total_pages;


//getting categories movie in limit of 24
foreach (array_slice($cat_data, $start, $last) as $movie) {
  include './component/moviecard/index.php';
}
  # pages	
  echo "<div class='continer-fluid' style='text-align: center;'>";
  echo '';
  echo "</br>";

//paging logic
if ($catpage > 1) {
  echo "<button class='btn-outline-info round'> <a style='text-decoration : none ; color:Black;' href='?category=".$_GET["category"]."&catpage=" . ($catpage - 1) . "'><b>Prev</b></a></button>";
}


echo '';
for ($i = 1; $i <= $total_catpages; $i++) {
  if ($i == $catpage) {
    if ($i > 1) {
      if ($i > 2) {
        echo ' ';
        echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?category=".$_GET["category"]."&catpage=" . ($i - 2) . "'><b>" . ($i - 2) . "</b></a></button>";
      }
      echo ' ';
      echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?category=".$_GET["category"]."&catpage=" . ($i - 1) . "'><b>" . ($i - 1) . "</b></a></button>";
    }
    echo ' ';
    echo "<button class='btn-outline-warning active' > <a style='text-decoration : none ; color:Black;' href='?category=".$_GET["category"]."&catpage=" . $i . "'><b>" . $i . "</b></a></button>";
    if ($i < $total_catpages) {
      echo ' ';
      echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?category=".$_GET["category"]."&catpage=" . ($i + 1) . "'><b>" . ($i + 1) . "</b></a></button>";
      if (($i + 1) < $total_catpages) {
        echo ' ';
        echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?category=".$_GET["category"]."&catpage=" . ($i + 2) . "'><b>" . ($i + 2) . "</b></a></button>";
      }
    }
  }
}


//Next
if ($catpage < $total_catpages) {
  echo ' ';
  echo "<button class='btn-outline-info round'> <a style='text-decoration : none ; color:black;' href='?category=".$_GET["category"]."&catpage=" . ($catpage + 1) . "'><b>Next</b></a></button>";
}
echo '</div>';
























































?>








<style>


  .btn-outline-warning,


  .btn-outline-info,


  .round{border-radius: 50%;}


</style>


