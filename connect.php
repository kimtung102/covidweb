<?php
    $connect = mysqli_connect("localhost","root","","covidweb");

    if($connect){
        mysqli_query($connect,"SET NAMES 'utf8'");
    }

?>