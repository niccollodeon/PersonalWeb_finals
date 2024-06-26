<?php 

     //Connection to database
     
    $con = new mysqli('localhost', 'root', '', 'personal_web');

    if(!$con) {
    die(mysqli_error($con));
    }

?>