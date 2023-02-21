<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db="practice";

    $mysqli_connect = mysqli_connect($host,$user,$password,$db);
    mysqli_set_charset($mysqli_connect,'utf8');
    
    if(!$mysqli_connect){
        echo mysqli_connect_error();
    exit;
    }
?>