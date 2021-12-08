<!doctype html>
<html lang="en">
  <head>
    <title>Quản lí tài khoản</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel= "stylesheet" href="./assets/style/main.css"/>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light border-nav">
      <div class="container-fluid py-2">
        <a class="navbar-brand" href="#virus-case">
          <span class="logo ms-5">PTITCOVID manager</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMarkup" aria-controls="navbarMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarMarkup">
          <div class="navbar-nav me-5 text18">
          <a class="nav-link ms-2" href="./admin.php">Trang chủ</a>
          <a class="nav-link ms-2" href="./taikhoan.php">Quản lí tài khoản</a>
          <a class="nav-link ms-2" href="./kbytmanager.php">Quản lí Khai báo y tế</a>
          <a class="nav-link ms-2" href="./index.php">Đăng xuất</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- table -->
      <div>
          <h1 class="text-center my-5">Danh sách tài khoản</h1>
          <div class="container-lg">
              <div class="row justify-content-center">
                  <div class="col-md-10 table-responsive-lg text18">
                      <table class="table table-striped table-bordered align-middle">
                          <thead>
                              <tr>
                                  <th scope="col">STT</th>
                                  <th scope="col">Username</th>
                                  <th scope="col">Password</th>
                                  <th scope="col">Ngày tạo</th>
                                  <th scope="col">Cập nhật gần nhất</th>
                                  <th scope="col"></th>
                              </tr>
                          </thead>
                          <tbody>
                          <?php include './connect.php';
                              $sql = "SELECT * FROM user";
                              $users = mysqli_query($connect,$sql);
                              $index=0;
                              foreach($users as $user){ ?>
                              <tr>
                                  <th scope="row"><?php $index++; echo "$index";?></th>
                                      <td><?php echo $user['username'];?></td>
                                      <td><?php echo $user['password'];?></td>
                                      <td><?php echo $user['createdDate'];?></td>
                                      <td><?php echo $user['modifiedDate'];?></td>
                                      <td><div>
                                          <a href="modifytaikhoan.php?id=<?php echo $user['id'];?>" type="button" class="btn btn-success">Sửa</a>
                                          <a href="deletetaikhoan.php?id=<?php echo $user['id'];?>" type="button" class="btn btn-secondary ms-2">Xóa</a>
                                        </div>
                                      </td>
                              </tr>
                              <?php } ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>





    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>