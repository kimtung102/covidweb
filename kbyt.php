
<?php
    session_start();
    include "./connect.php";

    $username = $_SESSION['user'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $CMND = $_POST['CMND'];
    $city = $_POST['city'];
    $question1 = $_POST['radio1'];
    $question2 = $_POST['radio2'];
    $district = $_POST['district'];
    $date = date('m/d/Y h:i:s a', time());

    $sql = "INSERT INTO kbyt (username, name, sex,phone,email,CMND,question1,question2,city,district,createdDate)
     VALUES ('$username','$name','$sex','$phone','$email','$CMND','$question1','$question2','$city','$district','$date')";

    $add = mysqli_query($connect,$sql);

    if($add){
        echo "yes";
    }else{
        echo "no";
    }
?>