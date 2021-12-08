
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
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style/main.css">
  </head>
  <body>
    <h1 class = "text-center my-5"><?php if($add){
        echo "Khai báo y tế thành công";
    }else{
        echo "Khai báo thất bại";
    } ?></h1>

    <div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-auto ">
            <a class="btn-custom fs-5  text-decoration-none" href="./index2.php">Về trang chủ</a>
        </div>
    </div>
    </div>
      

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>