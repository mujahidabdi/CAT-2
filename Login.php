<?php
require_once ('Connect.php');
$Connected = mysqli_connect("localhost","root","","regsyt");
if(isset($_POST)& !empty($_GET)){
    $username = $_GET['username'];
    $password = $_GET['password'];
    $select = "SELECT username  FROM `login` WHERE username ='$username'";
    $result = mysqli_query($Connected,$select);
    $count = mysqli_num_rows($result);

    if ($count ==1){
        $select2 ="SELECT password FROM `login` WHERE password ='$password'";
        $result2 = mysqli_query($Connected,$select2);
        $count2 = mysqli_num_rows($result2);
        if ($count2==1){
            echo "Welcome ". $username;
            header("location:Showusers.php");
        }
        else{
            echo "Invalid credentials";
        }
    }else{
        echo "Invalid credentials";
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
    <title>Login</title>
</head>
<body>
<div class="login-box">
    <form class="form-signin" method="post" action="Login.php">
        <h2>Login</h2>
        <img src="Images/user.jpg" width="50" height="50" alt=""><br>  <div class="textbox">
            <input type="text" name="username" class="form-control" placeholder="username" required><br>
        <div class="textbox">
            <input type="password" name="password" id="inputpassword" class="form-control" placeholder="Password" required><br>

        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <br>
        <a class="btn btn-lg btn-primary btn-block" href="Showusers.php">Regester</a><br>
    </form>

</div>

</body>
</html>
