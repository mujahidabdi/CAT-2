<?php
/**
 * Created by PhpStorm.
 * User: MUJAHID
 * Date: 10/24/2018
 * Time: 9:02 PM
 */
$connected = mysqli_connect("localhost","root","","regsyt");
if (!$connected){
    die("connection failed: " . mysqli_connected_error());
}
 echo "connected successfully";
?>