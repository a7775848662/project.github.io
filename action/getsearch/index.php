  <?php
  require("./database/index.php");
  //pagesg logic  . . .
  $record_per_page = 24;
  if (isset($_GET["spage"])) {
    $spage = $_GET["spage"];
  } else {
    $spage = 1;
  }
  //print_r($data);
  //search working ... 
  $query1 = "SELECT * FROM movie ORDER BY id DESC";
  $result1 = $conn->query($query1);
  echo '<a style="text-align : center " > Search Results For  : <b style="color:red;">' . $_GET["search"] . '</b></a></br></br>';
  $count_search = 0;






  while ($row1 = $result1->fetch_assoc()) {
    if ((strpos(strtolower($row1["name"]), strtolower($_GET["search"])) !== false) OR (strpos(strtolower($row1["name"]), strtolower($_GET["search"])) !== false)) {
      $search_data[] = $row1; // store results in array
      $count_search = $count_search + 1;
    }
  }

  if ($count_search > 0) {
    $total_pages_search = ceil($count_search / 24);
    $start = ($spage - 1) * $record_per_page;
    $last = 24;
    $i = 0;

    foreach (array_slice($search_data, $start, $last) as $movie) {
      include './component/moviecard/index.php';
    }

    echo "<div class='continer-fluid' style='text-align: center;'>";
    echo '';
    echo "</br>";
    //paging logic

    //prev
    if ($spage > 1) {
      echo "<button class='btn-outline-info round'> <a style='text-decoration : none ; color:Black;' href='?search=" . $_GET["search"] . "&spage=" . ($spage - 1) . "'><b>Prev</b></a></button>";
    }

    //pages
    echo '';
    for ($i = 1; $i <= $total_pages_search; $i++) {
      if ($i == $spage) {
        if ($i > 1) {
          if ($i > 2) {
            echo ' ';
            echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?search=" . $_GET["search"] . "&spage=" . ($i - 2) . "'><b>" . ($i - 2) . "</b></a></button>";
          }
          echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?search=" . $_GET["search"] . "&spage=" . ($i - 1) . "'><b>" . ($i - 1) . "</b></a></button>";
        }
        echo ' ';
        echo "<button class='btn-outline-warning active' > <a style='text-decoration : none ; color:Black;' href='?search=" . $_GET["search"] . "&spage=" . $i . "'><b>" . $i . "</b></a></button>";
        if ($i < $total_pages_search) {
          echo ' ';
          echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?search=" . $_GET["search"] . "&spage=" . ($i + 1) . "'><b>" . ($i + 1) . "</b></a></button>";
          if (($i + 1) < $total_pages_search) {
            echo ' ';
            echo "<button class='btn-outline-warning ' > <a style='text-decoration : none ; color:Black;' href='?search=" . $_GET["search"] . "&spage=" . ($i + 2) . "'><b>" . ($i + 2) . "</b></a></button>";
          }
        }
      }
    }

    //Next
    if ($spage < $total_pages_search) {
      echo ' ';
      echo "<button class='btn-outline-info round'> <a style='text-decoration : none ; color:black;' href='?search=" . $_GET["search"] . "&spage=" . ($spage + 1) . "'><b>Next</b></a></button>";
    }



    echo '</div>';
  } else {
    echo '<div class="contine-fluid">';
    echo '<table class=" table-borderless table-sm w-auto">';
    echo '<tbody><tr><td>If There is No results</td></tr>';
    echo '<tr><td>1. Please try with specific name.</td></tr>';
    echo '<tr><td>2. Request This Movie using below Button. </td></tr>';
    echo '<tr><td>3. Join Telegram </td></tr>';
    echo '<tr><td>THANK YOU... And Keep Sharing Site.</td></tr></tbody>';
    echo '</table></div>';
  }

  ?>

  <style>
    .btn-outline-warning,
    .btn-outline-info {
      border-radius: 50%;
    }
  </style>