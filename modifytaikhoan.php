<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <?php
      session_start();
      include './connect.php';

      if(isset($_GET["id"])){
        $id = $_GET["id"];
        $_SESSION["id"] = $id;
        $sql = "SELECT * FROM user WHERE id=$id";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result);
      }
      ?>

      <div>
        <h1 class="text-center my-5">Chỉnh sửa tài khoản</h1>
      <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-lg-3">
            <form method="POST" action="./handlemodify.php" name="register-form">
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label fs-4">Username:</label>
                    <input type="text" class="form-control p-2 fs-4" id="recipient-name" name="username-m" value="<?php echo $row['username'];?>">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label fs-4">Password:</label>
                    <input type="text" class="form-control p-2 fs-4" id="message-text" name="password-m" value ="<?php echo $row['password'];?>">
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-5">
                    <div class="d-flex flex-column">
                        <button type="submit" class="btn-custom-modal mb-2 fs-5">Lưu</button>
                    </div>
                    </div>
                </div>
            </form>
            </div>
          </div>
      </div>
      </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>