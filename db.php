<?php

$connection = mysqli_connect("localhost","root","","crud_project");

if(!$connection){
    die(mysqli_error($connection));
}


?>