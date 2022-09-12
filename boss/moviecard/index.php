
<?php

echo '<div id="' . $row["id"] . '" class="col-6 col-md-4 col-lg-2 shadow p-3 mb-2" style="height:400px; width:180px;>';
echo '<a href="./details?id=' . $row["id"] . '"><div>';

echo '<a class="btn btn-danger btn-sm mb-3 mx-2" href="./delete/?id=' . $row["id"] . '" role="button">Delete</a>';
echo '<a class="btn btn-warning btn-sm mb-3 mx-2" href="./update/?id=' . $row["id"] . '" role="button">Edit</a>';

echo '<img  class="img-fluid"  src="' . $row["poster"] . '" style="height : 216px; width: 200px;"></svg>';

echo '<div class="card-body" style="display: inline-block;">';
echo '<p><a style="text-decoration : none ; color: whitesmoke; " class="card-text">' . $row["name"] .  '</br> https://movietime.ml </a></p>';
echo '</div></div></a></div>';

?>