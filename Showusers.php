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
    <title>Users</title>
</head>
<body>
<h1>Users</h1>
<a href="Regestration.php"><button class="btn btn-danger">Add User</button></a>
<hr>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>


    <?php
    /** Created by Phpstorm */
    $connected = mysqli_connect("localhost","root","","regsyt");
    $fetch = mysqli_query($connected, "select * from login");
    while ($row = mysqli_fetch_assoc($fetch)){
        extract($row);
        echo
        "<tr>
     <td>$name</td>
     <td>$email</td>
     <td>$password</td>
     <td><a href='Update.php?x=$id'><button class='btn btn-danger'>Update</button></a></td>
     <td><a href='Delete.php?x=$id'><button class='btn btn-success'>Delete</button></a></td>
</tr>";



    }
    ?>
