<?php
    $con = mysqli_connect('localhost','root','','tripole');
    if(!$con){
        die(mysqli_error("Error"+$con));
    }
?>
