<?php


    include "./connect.php";

    if($_POST["username-r"] != '' && $_POST["password-r"] != '' && $_POST["confirmpassword"] != ''){
        $username = $_POST["username-r"];
        $password = $_POST["password-r"];
        $confirm = $_POST["confirmpassword"];
        $date = date('m/d/Y h:i:s a', time());

        $sql = "SELECT * FROM user WHERE username ='$username'";
        $old = mysqli_query($connect,$sql);
        if(mysqli_num_rows($old)>0){
            setcookie('registerresult','0',time() + 5);
            header("Location: index.php");
        } else{
            $sql = "INSERT INTO user (username , password, createdDate) VALUES ('$username','$password','$date')";
            $new = mysqli_query($connect,$sql);
            setcookie('registerresult','1',time() + 5);
            header("Location: index.php");
        }
    } else {
        setcookie('registerresult','0',time() + 5);
        header("Location: index.php");
    }
?>