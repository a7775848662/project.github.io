<?php

echo '<div id="' .$movie['id'] . '"  class="poster col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2" style="margin-bottom: 25px; max-width:200px;">';

echo'<div style="-webkit-box-shadow: 0px 0in 0.75pc 4.5pt #999; border-top-right-radius:16px; border-top-left-radius: 16px; border-bottom-right-radius:16px; border-bottom-left-radius: 16px;">';

echo '<div style=" max-width: 200px; background-color:#4cb1c3; border-top-right-radius:16px; border-top-left-radius: 16px;"><b style="text-decoration : none ; font-size:12px;">' . $movie['lang'].'</b></div>';

echo '<a href="./download?id=' . $movie["id"] . '">';

echo '<img  class="img-fluid"  src="' . $movie["poster"] . '" style="height : 216px; width: 200px;"></svg>';

echo '<div style="margin-top: 5px;">';

if (substr_count($movie["name"], " - ") > 0) {

  $na = 0;

  echo '<a style="text-decoration : none ; color: whitesmoke;; " href="./download?id=' . $movie["id"] . '" class="card-text">' . explode(" - ", $movie["name"])[$na] . '</br><b style="color : red;">' . explode(" - ", $movie["name"])[$na + 1] . '</b></a></br>';

} else {

  echo '<a style="text-decoration : none ; color: whitesmoke;; " href="./download?id=' . $movie["id"] . '" class="card-text">' . $movie["name"] . '</br></a>';

}

echo '<br></div></a></div></div>';

?>