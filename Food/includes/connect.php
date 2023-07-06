<?php
$con=mysqli_connect('localhost','root','','ekhaja');
if(!$con){
    // echo "Connection Successful.";

    die(mysqli_error($con));
}

?>