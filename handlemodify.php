<?php
    session_start();
    include './connect.php';

    $id = $_SESSION["id"];
    $username = $_POST["username-m"];
    $password = $_POST["password-m"];
    $date = date('m/d/Y h:i:s a', time());

    $sql = "UPDATE user SET username = '$username', password = '$password', modifiedDate='$date' WHERE id=$id";
    $query = mysqli_query($connect,$sql);
    if($query){
        header("Location: taikhoan.php");
    }
?>