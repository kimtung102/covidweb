<?php
    include './connect.php';

    $id= $_GET["id"];

    $sql="DELETE FROM user WHERE id=$id";
    $query= mysqli_query($connect,$sql);

    if($query){
        header("Location: taikhoan.php");
    }
?>