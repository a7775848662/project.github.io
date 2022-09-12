<?php

include '../../database/index.php';

session_start();
if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"]) {
    // Redirect to admin Page
    header("Location: ../");
}

if (isset($_POST["login"])) {

    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

    $sql = "SELECT sno FROM admin WHERE username = '$myusername' and pass = '$mypassword'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION["isLoggedIn"] = true;
         header("Location: ../");
      }else {
        echo '<div class="continer" style="text-align:center;">';
        echo "<div id='alert' name='alert' class='alert alert-dismissible fade show' role='alert' style='text-align:center;'>";
        echo  "</br></br><strong> Please enter a valid username or password . . .</strong>";
        echo "</div></div>";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movietime/Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>

    <link href="../../assets/img/top.jpg" rel="icon">
    <link href="../../assets/img/top.jpg" rel="apple-touch-icon">
    <style>
        .login-dark , .alert {
            height: 750px;
        }
        /*form box*/
        .login-dark form {
            max-height : 500px;
            width : 350px;
            padding: 40px;
            border-radius: 4px;
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            color: #fff;
        }
        .login-dark .illustration {
            text-align: center;
            padding: 15px 0 20px;
            font-size: 100px;
            color: #2980ef;
        }
        .login-dark form .btn-primary {
            background: #214a80;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none;
        }
    </style>
</head>


<body style="background: #1e2833;">
    <div class="login-dark continer-fluid">
        <form method="post" action="./">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="username" required autocomplete="off"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required autocomplete="off"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" name="login" type="submit">Log In</button></div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>