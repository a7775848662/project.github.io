<?php

// Add movie logic



require("../../database/index.php");



//total data 26 (date name)

//25 values



if (isset($_POST["upmovie"])) {



    $id = $_GET["id"];



    $name = $_POST["name"];

    $ry = $_POST["ry"];



    $lang = $_POST["lang"];



    $category = strtolower(implode(" - ", $_POST["upcats"]));



    $poster = $_POST["poster"];



 

    $sample = $_POST["sample"];





    //24 values



    $query = ' UPDATE `movie` SET `name`= "' . $name . '"  WHERE  `id` ="' . $id . '" ';

    $conn->query($query);

    $query = ' UPDATE `movie` SET `ry`= "' . $ry . '"  WHERE  `id` ="' . $id . '" ';

    $conn->query($query);



    $query = ' UPDATE `movie` SET `lang`= "' . $lang . '"  WHERE  `id` ="' . $id . '" ';

    $conn->query($query);






    $query = ' UPDATE `movie` SET `poster`= "' . $poster . '"  WHERE  `id` ="' . $id . '" ';

    $conn->query($query);




    $query = ' UPDATE `movie` SET `category`= "' . $category . '"  WHERE  `id` ="' . $id . '" ';

    $conn->query($query);




   
    $query = ' UPDATE `movie` SET `sample`= "' . $sample . '"  WHERE  `id` ="' . $id . '" ';

    $conn->query($query);



    //popup

    //if ($row["category"] == "marathi") {



  echo "<script>

         $(window).load(function(){

             $('#movieUpdated').modal('show');

         });

    </script>";



} ?>



<?php include './form.php'; ?>



<div class="modal fade" id="movieUpdated" tabindex="-1" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

          <h4 class="modal-title" id="myModalLabel">Your Movie is Updated...!!</h4>

      </div>

      <div class="modal-body">

          <p></p>                     

      </div>    

    </div>

  </div>

</div>