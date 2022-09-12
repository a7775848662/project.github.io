<?php
//pagesg logic  . . .
$i = 0;
echo "<div class='continer-fluid' style='text-align: center;'>";
echo '';
echo "</br>";
//paging logic

//prev
if ($page > 1) {
  echo "<button class='btn-outline-info round'> <a style='text-decoration : none ; color:Black;' href='?" . $getpage . "&page=" . ($page - 1) . "'><b>Prev</b></a></button>  ";//-1
}

//pages
for ($i = 1; $i <= $total_pages; $i++) {
  if ($i == $page) {
    if ($i > 1) {
      if ($i > 2) {
        echo "<button class='btn-outline-warning'> <a style='text-decoration : none ; color:Black;' href='?" . $getpage . "&page=" . ($i - 2) . "'><b>" . ($i - 2) . "</b></a></button> "; //-2
      }
      echo "<button class='btn-outline-warning'> <a style='text-decoration : none ; color:Black;' href='?" . $getpage . "&page=" . ($i - 1) . "'><b>" . ($i - 1) . "</b></a></button> "; //-1
    }
    echo "<button class='btn-outline-warning active' > <a style='text-decoration : none ; color:Black;' href='?" . $getpage . "&page=" . $i . "'><b>" . $i . "</b></a></button> "; //1
    if ($i < $total_pages) {
      echo "<button class='btn-outline-warning' > <a style='text-decoration : none ; color:Black;' href='?" . $getpage . "&page=" . ($i + 1) . "'><b>" . ($i + 1) . "</b></a></button> "; //2
      if (($i + 1) < $total_pages) {
        echo "<button class='btn-outline-warning' > <a style='text-decoration : none ; color:Black;' href='?" . $getpage . "&page=" . ($i + 2) . "'><b>" . ($i + 2) . "</b></a></button> "; //3
      }
    }
  }
}

//Next
if ($page < $total_pages) {
  echo "  <button class='btn-outline-info round'> <a style='text-decoration : none ; color:black;' href='?" . $getpage . "&page=" . ($page + 1) . "'><b>Next</b></a></button>";//2
}



?><style>
  .btn-outline-warning,
  .btn-outline-info {
    border-radius: 50%;
  }
</style>