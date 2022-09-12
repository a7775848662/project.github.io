<div class="container continer-fluid">



    <form class="form" action="./" method="post" enctype="multipart/form-data">

        <div class="input-group">

            <div class="col-md-12 col-12 col-lg-12">

                <input type="text" class="form-control" name="name" id="name" placeholder="Book name" required>

            </div>

        </div></br>



        <div class="input-group">

            <div class="col-md-6 col-6 col-lg-6">

                <input type="text" class="form-control" id="ry" name="ry" placeholder=" Release year" required>

            </div>

            <div class="col-md-6 col-6 col-lg-6">

                <input type="text" class="form-control" id="lang" name="lang" placeholder="Language" required>

            </div>

        </div></br>




        <div class="input-group">

            <div class="col-md-4 col-6 col-lg-2"><input type="checkbox" name="cats[]" value="Latest" />Latest</div>

        </div></br>



        <div class="input-group">

            <div class="col-md-12 col-12 col-lg-12">

                <input type="text" placeholder="poster link" name="poster" id="poster" class="form-control" required>

            </div>

        </div></br>

        <div class="input-group">

            <div class="col-md-12 col-12 col-lg-12">

                <input type="text" placeholder="Sample Link" name="sample" class="form-control">

            </div>

        </div></br><br>



        <div class="continer" style="text-align:center;">

            <button type="submit" name="addMovie" class="btn btn-primary my-3">Add Book</button>

        </div>

    </form>



</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>