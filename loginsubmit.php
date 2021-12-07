
<?php
    session_start();   
    include './connect.php';

    
    $username = $_POST["username-l"];
    $password = $_POST["password-l"];

    $sql1 = "SELECT * FROM user WHERE username= '$username'";
    $checkusername = mysqli_query($connect,$sql1);
    $sql2 = "SELECT * FROM user WHERE password= '$password'";
    $checkpass = mysqli_query($connect,$sql2);

    if($checkusername = $username && $checkpass=$password){
        $_SESSION["user"] = $username;
        header('Location: index2.php');
    } else {
        echo "that bai";
    }

    if($username == "admin" && $password == "admin"){
        $_SESSION["user"] = $username;
        header('Location: admin.php');
    }

?>