<?php
session_start();
$username = $_SESSION["user"];
if(!$username){
  header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>ptitcovid</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style/main.css">
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/vn/vn-all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light border-nav">
      <div class="container-fluid py-2">
        <a class="navbar-brand" href="#virus-case">
          <span class="logo ms-5">PTITCOVID</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMarkup" aria-controls="navbarMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarMarkup">
          <div class="navbar-nav me-5 text18">
            <span class= nav-link>Xin chào, <?php 
            echo "$username";
            ?></span>
          <a class="nav-link ms-2" href="./admin.php">Trang chủ</a>
          <a class="nav-link ms-2" href="./taikhoan.php">Quản lí tài khoản</a>
          <a class="nav-link ms-2" href="./kbytmanager.php">Khai báo y tế</a>
          <a class="nav-link ms-2" href="./index.php">Đăng xuất</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- thong ke -->
      <section id="virus-case">
        <div class="container-lg">
          <div class="row justify-content-center mt-5">
            <div class="col-lg-6 text-center">
              <span class="title">Tổng số ca nhiễm: </span>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <span class="title title-light fw-bold">1.000.897</span>
            </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-lg-6 text-center">
              <span class="title">Số ca tử vong:</span>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <span class="title fw-bold">22.849</span>
            </div>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-lg-6 text-center">
              <span class="title">Số ca hồi phục:</span>
            </div>
          </div>
          <div class="row justify-content-center mb-5">
            <div class="col-lg-6 text-center">
              <span class="title title-main fw-bold">845.948</span>
            </div>
          </div>
        </div>
      </section>
   
      <!-- thong ke vaccine -->
      <section id="vaccine" class="background">
        <div class="container-fluid">
          <div class="text-center vaccine-header mb-5">Vaccine</div>
        <div class="row justify-content-between">
          <div class="col-lg-5 text-start">
            <span >Tình hình vaccine trên toàn thế giới</span>
            <div id="map"></div>
          </div>
          <div class="col-lg-7 text-start">
            <span>Tình hình vaccine trên toàn thế giới</span>
            <div id="container-chart"></div>
          </div>
         </div>
        </div>
      </section>

      <!-- tin tuc -->
      <section id="news" class="background">
        <div class="text-center vaccine-header">Tin tức</div>
          <div class="container-lg ">
            <div id="carouselId" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="container">
                    <div class="row justify-content-center align-items-center">
                      <div class="col-auto"><img src="./assets/image/news1.jpg" alt="First slide"></div>
                      <div class="col-5">
                        <h2>Tiêm 4 mũi vắc xin, người phụ nữ vẫn nhiễm Covid-19</h2>
                        <p class="label-text">Dù đã tiêm đến 4 mũi vắc xin nhưng một người phụ nữ ở Đài Loan ((Trung Quốc)) vẫn bị nhiễm Covid-19. Trong 4 mũi vắc xin bà tiêm, có 2 mũi AstraZeneca và 2 mũi Pfizer.</p>
                        <a href="https://thanhnien.vn/tiem-4-mui-vac-xin-nguoi-phu-nu-van-nhiem-covid-19-post1399138.html">Chi tiết</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container">
                    <div class="row justify-content-center align-items-center">
                      <div class="col-auto"><img src="./assets/image/news2.jpg" alt="Second slide"></div>
                      <div class="col-5">
                        <h2>Tin Covid sáng 8-11: Hà Nội thêm 2 ổ dịch mới</h2>
                        <p class="label-text">Dù đã tiêm đến 4 mũi vắc xin nhưng một người phụ nữ ở Đài Loan ((Trung Quốc)) vẫn bị nhiễm Covid-19. Trong 4 mũi vắc xin bà tiêm, có 2 mũi AstraZeneca và 2 mũi Pfizer.</p>
                        <a href="https://thanhnien.vn/tiem-4-mui-vac-xin-nguoi-phu-nu-van-nhiem-covid-19-post1399138.html">Chi tiết</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container">
                    <div class="row justify-content-center align-items-center">
                      <div class="col-auto"><img src="./assets/image/news3.png" alt="Third slide"></div>
                      <div class="col-5">
                        <h2>Tiêm 4 mũi vắc xin, người phụ nữ vẫn nhiễm Covid-19</h2>
                        <p class="label-text">Dù đã tiêm đến 4 mũi vắc xin nhưng một người phụ nữ ở Đài Loan ((Trung Quốc)) vẫn bị nhiễm Covid-19. Trong 4 mũi vắc xin bà tiêm, có 2 mũi AstraZeneca và 2 mũi Pfizer.</p>
                        <a href="https://thanhnien.vn/tiem-4-mui-vac-xin-nguoi-phu-nu-van-nhiem-covid-19-post1399138.html">Chi tiết</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
          </div>
      </section>

      <!-- khai bao y te -->
      <section id="kbyt">
        <div class="container-lg">
          <div class="text-center vaccine-header mb-5">Khai báo y tế</div>
          <div class="row justify-content-center">
            <div class="col-lg-4">
              <img class= "img-fluid" src="./assets/image/mdhealth.png" alt="#">
            </div>
            <div class="col-lg-6">
              <h3 class="mb-4"><strong>Thông tin cá nhân</strong><span class="obligate"> *</span></h3>
              <form method="POST" action= "./kbyt.php" name="kbyt-form"> 
              <div class="row justify-content-center">
                <div class="col-lg-6 text-start"">
                  <div class="mb-3">
                    <label for="name" class="form-label label-text">Họ Tên <span class="obligate">*</span></label>
                    <input type="text" class="form-control form-control-lg" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label label-text">Giới tính <span class="obligate">*</span></label>
                    <input type="text" class="form-control form-control-lg" name="sex">
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label label-text">Điện thoại <span class="obligate">*</span></label>
                    <input type="text" class="form-control form-control-lg" name="phone">
                  </div>
                  <div class="mb-5">
                    <label for="name" class="form-label label-text">Email</label>
                    <input type="text" class="form-control form-control-lg" name="email">
                  </div>
                  <h3 class="mt-5 mb-4"><strong>Địa chỉ nơi ở hiện tại</strong><span class="obligate"> *</span></h3>
                  <div class="mb-3">
                    <label for="name" class="form-label label-text">Tỉnh thành <span class="obligate">*</span></label>
                    <input type="text" class="form-control form-control-lg" name="city">
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label label-text">Quận / huyện <span class="obligate">*</span></label>
                    <input type="text" class="form-control form-control-lg" name="district">
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label label-text">Phường / xã <span class="obligate">*</span></label>
                    <input type="text" class="form-control form-control-lg">
                  </div>
                </div>
                <div class="col-lg-6 text-start">
                  <div class="mb-3">
                    <label for="name" class="form-label label-text">Số CMND/CCCD/Hộ chiếu <span class="obligate">*</span></label>
                    <input type="text" class="form-control form-control-lg" name="CMND">
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <label for="DataList1" class="form-label"></label>
                        <input class="form-control form-control-lg" list="datalistOptions1" id="DataList1" placeholder="Ngày">
                        <datalist id="datalistOptions1">
                        <option value="1">
                        <option value="2">
                        <option value="3">
                        <option value="4">
                        <option value="5">
                        </datalist>
                    </div>
                    <div class="col-4">
                      <label for="DataList2" class="form-label"></label>
                        <input class="form-control form-control-lg" list="datalistOptions2" id="DataList2" placeholder="Tháng">
                        <datalist id="datalistOptions2">
                        <option value="1">
                        <option value="2">
                        <option value="3">
                        <option value="4">
                        <option value="5">
                        </datalist>
                    </div>
                    <div class="col-4">
                      <label for="DataList3" class="form-label"></label>
                        <input class="form-control form-control-lg" list="datalistOptions3" id="DataList3" placeholder="Năm">
                        <datalist id="datalistOptions3">
                        <option value="1997">
                        <option value="1998">
                        <option value="1999">
                        <option value="2000">
                        <option value="2001">
                        </datalist>
                    </div>
                  </div>
                </div>
                <div class="mb-4">
                  <label for="name" class="form-label label-text">Số nhà, phố, tổ dân phố/thôn/đội <span class="obligate">*</span></label>
                  <input type="text" class="form-control form-control-lg">
                </div>

                <div class="card mt-4">
                  <div class="card-body">
                    <div class="card-border">
                      <p class="card-text label-text">Sáng nay, việc thẩm vấn được TAND Hà Nội thực hiện riêng rẽ với từng bị cáo. Bị cáo Hoà là người duy nhất giữ nguyên lời khai, thừa nhận hành vi như cáo trạng. Theo đó, Hoà giới thiệu Vũ với ông Linh, cũng là người gợi ý <span class="obligate">*</span></p>
                    </div>
                    <div class="d-flex flex-row mt-3">
                      <div class="form-check label-text me-3">
                        <input class="form-check-input" type="radio" name="radio1" value="0" checked id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Không
                        </label>
                      </div>
                      <div class="form-check label-text">
                        <input class="form-check-input" type="radio" name="radio1" value="1" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Có
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card mt-4">
                  <div class="card-body">
                    <div class="card-border">
                      <p class="card-text label-text">Sáng nay, việc thẩm vấn được TAND Hà Nội thực hiện riêng rẽ với từng bị cáo. Bị cáo Hoà là người duy nhất giữ nguyên lời khai, thừa nhận hành vi như cáo trạng. Theo đó, Hoà giới thiệu Vũ với ông Linh, cũng là người gợi ý <span class="obligate">*</span></p>
                    </div>
                    <div class="d-flex flex-row mt-3">
                      <div class="form-check label-text me-3">
                        <input class="form-check-input" type="radio" name="radio2" value="0" checked id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Không
                        </label>
                      </div>
                      <div class="form-check label-text">
                        <input class="form-check-input" type="radio" name="radio2" value="1" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Có
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <button type="submit" class="btn-custom mt-4 label-text">Gửi tờ khai</button>
              </form>
            </div>
          </div>
        </div>
      </section>
<!-- ve dau trang -->
      <div class="border-home-link"><a class="nav-link text-center home-link" href="#virus-case">
        <span>Trang chủ</span>
      </a></div>

<!-- footer -->
      <section id="footer">
          <div class="container-xxl">
            <div class="row justify-content-between">
              <div class="col-lg-2 flex-column d-flex">
                <a class="nav-item mb-3" href="#virus-case"><strong>Trang chủ</strong></a>
                <a class="nav-item mb-3" href="#">Giới thiệu</a>
                <a class="nav-item mb-3" href="#">F&Q</a>
                <a class="nav-item mb-3" href="#">Về chúng tôi</a>
                <a class="nav-item mb-3" href="#">Điều khoản</a>
              </div>

              <div class="col-lg-4">
                <p class="nav-item"><strong>Vị trí</strong></p>
                <div class="">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.988390095208!2d105.81945407552648!3d21.0227387040898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSGFub2ksIEhvw6BuIEtp4bq_bSwgSGFub2ksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1636130508447!5m2!1sen!2s" width="380" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>

              <div class="col-lg-4">
                <p class="nav-item"><strong>Liên hệ</strong></p>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="name" class="form-label">Tên</label>
                      <input type="text" class="form-control form-control-lg" id="name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control form-control-lg" id="email">
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="comment" class="form-label">Bình luận</label>
                  <textarea class="form-control form-control-lg" id="comment" rows="4"></textarea>
                </div>
                <div class="text-end"><button type="submit" class="btn btn-send mb-5">Gửi</button></div> 
                
                <div class="d-flex flex-row justify-content-end mt-4">
                  <div>
                    <a href="#"><span class="iconify icon" data-icon="akar-icons:instagram-fill"></span></a>
                  </div>
                  <div>
                    <a href="#"><span class="iconify icon2 ms-5" data-icon="ant-design:facebook-filled"></span></a>
                  </div>
                  <div>
                    <a href="#"><span class="iconify icon ms-5" data-icon="akar-icons:pinterest-fill"></span></a>
                  </div>
                  <div>
                    <a href="#"><span class="iconify icon ms-5" data-icon="akar-icons:twitter-fill"></span></a>
                  </div>
                  <div>
                    <a href="#"><span class="iconify icon2 ms-5" data-icon="akar-icons:youtube-fill"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
      </section>
<!-- login-modal -->
      <section id="login-modal">
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body mb-3">
                <div class="title_login mb-5 mt-4"><h1>Đăng nhập</h1></div>
                <div class="container-fluid">
                  <div class="row justify-content-center">
                    <div class="col-md-6">
                      <form method = "POST" action= "./loginsubmit.php" name = "login-form">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Username:</label>
                          <input type="text" class="form-control" id="recipient-name" name = "username-l">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Password:</label>
                          <input class="form-control" id="message-text" name = "password-l"></input>
                        </div>
                        <div class="row justify-content-between mb-5">
                          <div class="col-md-auto ms-2"><a href="#">Quên mật khẩu?</a></div>
                          <div class="col-md-auto me-2"><a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Đăng kí</a></div>
                        </div>
                        <div class="row justify-content-center mt-5">
                          <div class="col-md-6">
                            <div class="d-flex flex-column">
                              <button type="submit" class="btn-custom-modal">Đăng nhập</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> 
              </div>   
            </div>
          </div>
        </div>
      </section>

      <!-- register-modal -->
      <section id="register-modal">
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body mb-3">
                <div class="title_login mb-5 mt-4"><h1>Đăng ký</h1></div>
                <div class="container-fluid">
                  <div class="row justify-content-center">
                    <div class="col-md-6">
                      <form method="POST" action="./registersubmit.php" name="register-form">
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Username:</label>
                          <input type="text" class="form-control" id="recipient-name" name="username-r">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Password:</label>
                          <input type="password" class="form-control" id="message-text" name="password-r"></input>
                        </div>
                        <div class="mb-5">
                          <label for="message-text" class="col-form-label">Confirm password:</label>
                          <input type="password" class="form-control" id="message-text" name="confirmpassword"></input>
                        </div>
                        <div class="row justify-content-center mt-5">
                          <div class="col-md-6">
                            <div class="d-flex flex-column">
                              <button type="submit" class="btn-custom-modal mb-2">Đăng Ký</button>
                              <div class="btn-custom-modal2 text-center"  data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal"><span style="line-height : 30px">Về đăng nhập</span></div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> 
              </div>

            </div>
          </div>
        </div>
      </section>

      <p class="text-center text-secondary">@Designed by Nguyen Kim Tung</p>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="./chart.js"></script>
    <script src="./map.js"></script>
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>