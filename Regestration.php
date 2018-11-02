<?php
require_once ('Connect.php');
 if(isset($_POST) & !empty($_POST)){
     $Connected = mysqli_connect("localhost","root","","regsyt");
     if (!$Connected){
         echo "failed to regester";
     }else{
         $username = $_POST['username'];
         $email = $_POST['email'];
         $password = $_POST['password'];
         $insert = "INSERT INTO `login`(`id`, `username`, `email`, `password`) VALUES (null,'$username','$email','$password')";
         $query = mysqli_query($Connected,$insert);
         if ($query){
             echo "User Regestration successfully";
             header("Connect.php");
         }else{
             echo "User Regestration failed";
         }

     }

     }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Urembo.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Urembo.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <title>User Regestration</title>
</head>
<body>
<div class="regester-box">
    <form class="form-signin" method="post" action="Regestration.php">
        <h1 class="form-signin-heading">Please Regester</h1>
        <div class="textbox">
            <input type="text" name="username" class="form-control" placeholder="username" required><br>
        </div>
        <label for="inputEmail" class="sr-only">Email address</label><br>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br>
        <label for="inputpassword" class="sr-only">Password</label><br>
        <input type="password" name="password" id="inputpassword" class="form-control" placeholder="Password" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Regester</button>
        <br>
        <a class="btn btn-lg btn-primary btn-block" href="Login.php">Login</a><br>
    </form>

</div>

</body>
</html>


































