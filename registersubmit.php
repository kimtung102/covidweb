<?php


    include "./connect.php";

    if(isset($_POST["submit"]) && $_POST["username-r"] != '' && $_POST["password-r"] != '' && $_POST["confirmpassword"] != ''){
        $username = $_POST["username-r"];
        $password = $_POST["password-r"];
        $confirm = $_POST["confirmpassword"];

        $sql = "SELECT * FROM user WHERE username ='$username'";
        $old = mysqli_query($connect,$sql);
        if(mysqli_num_rows($old)>0){
            setcookie('registerresult','0',time() + 500);
            header("Location: index.php");
        } else{
            $sql = "INSERT INTO user (username , password) VALUES ('$username','$password')";
            $new = mysqli_query($connect,$sql);
            setcookie('registerresult','1',time() + 500);
        }
    } else {
        setcookie('registerresult','0',time() + 500);
    }
    header("Location: index.php");

    //     if($add){
    //         setcookie('registerresult','1',time() + 5);
    //     } else {
    //         setcookie('registerresult','0',time() + 5);
    //     }
    // } else {
    //     setcookie('registerresult','0',time() + 5);
    // }
    // header("Location: index.php");
?>