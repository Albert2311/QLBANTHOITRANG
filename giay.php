<?php 
include_once("controller.php"); 
?>
<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];

if($email != false && $password != false){
    $query = "SELECT * FROM usersInfo WHERE email = '$email' AND password = '$password'";
    $run_query = mysqli_query($conn , $query);
    if($run_query){
        $fetch_data = mysqli_fetch_assoc($run_query);
        $status = $fetch_data['status'];
        if($status != "Verified"){
            header("location: code.php");
        }
    }
}else{
    header('location: dangnhap.php');
}
// ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--FILE-->
	<link rel="stylesheet" href="css/giay.css">
  <link rel="shortcut icon" href="images/ava.png">
  <!-- FONT CHỮ -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> -->
  <link rek="stylesheet" type="text/css" href="fontawesome-free-6.1.1-web/css/all.min.css">
  <!-- ICON -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--icon-->
  <script src="https://kit.fontawesome.com/ed720e4b54.js" crossorigin="anonymous"></script> <!--THEM ICON!!!--> 
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/9ea6af6279.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- THƯ VIỆN jQuery-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <title>BEAUTYFULSHOP- GIÀY</title>
</head>
<style>
   @media only screen and (max-width: 1270px) {
    .row{
      justify-content:center;
    }
  }
</style>
<body>
    <!--dang nhap tai khoan-->
  <div class="header_navbar" >  
    <div class="header_navbar1">
    <!--vào cửa hàng-->
  <div class="header__navbar1__notify header__notify-item--has qrcode-view">
  <a href="" class="header__navbar-icon-link ">
    <i class="fa-solid fa-qrcode"></i>Vào cửa hàng</a>
    <div class="qrcode">
      <img src="images/qrcode.png" alt="" class="qrcode_img">
    </div>
</div>
    <!-- thông báo -->
<div class="header__navbar1__notify header__notify-item--has"> 
    <a href="tintuc.php" class="header__navbar-icon-link  ">
      <i class="fa-solid fa-bell"></i>Thông báo </a>  
    <div class="header__notify">
      <div class="header__notify-header">
        <h3>Thông báo mới</h3>
      </div>
      <ul class="header__notify-list">
        <!-- TB 1 -->
        <li class="header__notify-item header__notify-item--view">
            <a href="" class="header__notify-link">
                <img src="images/tb1.png" alt="" class="header__notify-img">
                <div class="header__notify-info">
                  <span class="header__notify-name">Happy Women’s Day - Ưu đãi 20% Tất Cả Sản Phẩm Mới</span>
                  <span class="header__notify-descrip"> Trao gửi yêu thương đến phái đẹp không chỉ bằng những quan tâm chân thành...</span>
                </div>
            </a>
        </li>



        <!-- TB 2 -->
        <li class="header__notify-item header__notify-item--view">
          <a href="" class="header__notify-link">
              <img src="images/tb2.png" alt="" class="header__notify-img">
              <div class="header__notify-info">
                <span class="header__notify-name">Free Shipping - Mua sắm online miễn phí vận chuyển</span>
                <span class="header__notify-descrip"> Bùng nổ BLACK FRIDAY giảm lên đến 50%, Biutyphunshop tiếp tục dành tặng ...</span>
              </div>
          </a>
      </li>

        <!-- TB 3 -->
        <li class="header__notify-item header__notify-item--view">
          <a href="" class="header__notify-link">
              <img src="images/tb3.png" alt="" class="header__notify-img">
              <div class="header__notify-info">
                <span class="header__notify-name">Surprise Sale - Giá Đặc Biệt Chỉ Từ 275.000đ</span>
                <span class="header__notify-descrip"> Khởi đầu tháng mới, sẵn sàng đón ngay đợt ưu đãi bất ngờ từ  với loạt giày, túi, ví... </span>
              </div>
          </a>
      </li>


      </ul>
      <footer class="header__notify-footer">
        <a href="tintuc.php" class="header__notify-footer-btn">
          Xem tất cả
        </a>
      </footer>

    </div>
    </div>
    </div>
    <!-- ĐĂNG KÝ + ĐĂNG NHẬP + GIỎ HÀNG -->
    <!-- ĐĂNG KÝ + ĐĂNG NHẬP + GIỎ HÀNG -->
    <!-- ĐĂNG KÝ + ĐĂNG NHẬP + GIỎ HÀNG -->
    <!-- ĐĂNG KÝ + ĐĂNG NHẬP + GIỎ HÀNG -->
    <!-- ĐĂNG KÝ + ĐĂNG NHẬP + GIỎ HÀNG -->
    <div class="header_navbar2 ">
                     <!-- AVATAR -->
<div class="ava">

    <div class="user-text">
    <?php 
    if(isset($_SESSION['name'])){
        echo $_SESSION['name'];
    }
    ?>
 </div>
 <div class="profile-pic-div">
    <img src="images/login-icon.png" id="photo">
    <input type="file" id="file"> 
    <label for="file" id="uploadBtn"></label>
    <script src="js/change-ava.js"></script>
 </div>
</div>


         
<!-- ĐĂNG XUẤT -->
      <a href="logout.php" class="header__navbar-icon-link">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        <p>Đăng xuất</p></a>
          <!--giỏ hàng-->
      <a href="cart.php" class="header__navbar-icon-link">
        <i class="fa-solid fa-basket-shopping"></i>
        <p>Giỏ hàng</p></a>
</div>
  </div>
    <!--THANH NGANG MENU-->  
    <!--THANH NGANG MENU--> 
    <!--THANH NGANG MENU--> 
    <!--THANH NGANG MENU--> 
    <!--THANH NGANG MENU--> 
    <nav>
      <div class="wrapper">
        <div class="logo-name">
          <img  src="images/king.png" class="logo"> </img>
              <element class="name">Biutiphunshop</element>
        </div>
        <input type="radio" name="slider" id="menu-btn">
        <input type="radio" name="slider" id="close-btn">
        <ul class="nav-links">
          <label for="close-btn" class="btn close-btn">
            <i class="fas fa-times"></i></label>
          <!-- TRANG CHỦ -->
          <li><a href="main.php" class="desktop-item">Trang chủ</a></li>
            
          <!-- QUẦN -->
          <li>
            <a href="quan.php" class="desktop-item">Quần</a>
            <input type="checkbox" id="showMega">
            <label for="showDrop" class="mobile-item">Quần</label>
            <div class="mega-box">
              <div class="content">
                <div class="row">
                  <img src="images/quan1.png" alt="">
                </div>
                <div class="row">
                  
                  <ul class="mega-links">
                    <li><a href="quan.php">Quần Jean</a></li>
                    <li><a href="quan.php">Quần Short</a></li>
                    <li><a href="quan.php">Quần tây</a></li>
                  </ul>
                </div>
                </div>
              </div>
            </li>
            <!-- ÁO -->
          <li>
            <a href="ao.php" class="desktop-item">Áo</a>
            <input type="checkbox" id="showMega">
            <label for="showDrop" class="mobile-item">Áo</label>
            <div class="mega-box">
              <div class="content">
                <div class="row">
                  <img src="images/poster.png" alt="">
                </div>
                <div class="row">
                    <ul class="mega-links">
                    <li><a href="ao.php">Croptop</a></li>
                    <li><a href="ao.php">Áo thun</a></li>
                    <li><a href="ao.php">Áo sơ mi</a></li>
                    <li><a href="ao.php">Áo khoác</a></li>
                    <li><a href="ao.php">Áo kiểu</a></li>
                    <li><a href="ao.php">Áo Blazer</a></li>
                    </ul>
                </div>
                
              </div>
            </div>
          </li>
          <!-- ĐẦM/VÁY -->
            <li>
            <a href="dam-vay.php" class="desktop-item">Đầm/Váy</a>
            <input type="checkbox" id="showMega">
            <label for="showDrop" class="mobile-item">Đầm/Váy</label>
            <div class="mega-box">
              <div class="content">
                <div class="row">
                  <img src="images/damvay2.png" style="height:320px"alt="">
                </div>
                <div class="row">
                    <ul class="mega-links">
                    <li><a href="dam-vay.php">Đầm dự tiệc</a></li>
                    <li><a href="dam-vay.php">Đầm sơ mi</a></li>
                    <li><a href="dam-vay.php">Đầm công sở</a></li>
                    <li><a href="dam-vay.php">Đầm maxi</a></li>
                    <li><a href="dam-vay.php">Chân váy</a></li>
                  </ul>
                </div>
               </div>
            </div>
          </li>
          <!-- GIÀY -->
          <li>
            <a href="giay.php" class="desktop-item">Giày</a>
            <input type="checkbox" id="showMega">
            <label for="showDrop" class="mobile-item">Giày</label>
            <div class="mega-box">
              <div class="content">
                <div class="row">
                  <img src="images/Giay.png" alt="">
                </div>
                <div class="row">
                 <ul class="mega-links">
                    <li><a href="giay.php">Sneakers</a></li>
                    <li><a href="giay.php">Giày cao gót</a></li>
                    <li><a href="giay.php">Sandals</a></li>
                </ul>
                </div>
              </div>
            </div>
          </li>
  
          <!-- PHỤ KIỆN -->
          <li>
            <a href="phukien.php" class="desktop-item">Phụ kiện</a>
            <input type="checkbox" id="showMega">
            <label for="showDrop" class="mobile-item">Phụ kiện</label>
              <div class="mega-box">
              <div class="content">
                <div class="row">
                  <img src="images/phukien.jpg" alt="">
                </div>
                <div class="row">
                    <ul class="mega-links">
                      <li><a href="phukien.php">Túi xách</a></li>
                      <li><a href="phukien.php">Mắt kính</a></li>
                      <li><a href="phukien.php">Vòng cổ</a></li>
                      <li><a href="phukien.php">Bông tai</a></li>
                      <li><a href="phukien.php">Nón</a></li>
                  </ul>
                </div>
               
              </div>
            </div>
          </li>

          </ul>
            <div class="searching"> 
              <div class="searchbox">
                    <input type="text" class="searchbox__input" placeholder="Search..." />
                    <svg class="searchbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17s-17-7.626-17-17S14.61,6,23.984,6z">
                    </svg>
                </div>
            </div>
              <label for="menu-btn" class="btn menu-btn">
                <i class="fas fa-bars"></i>
              </label>

          </div>
        
    </nav>
    <!-- SECTION -->
    <!-- SECTION -->
    <!-- SECTION -->
    <!-- SECTION -->
    <!-- SECTION -->
    <!-- SECTION -->
    <!-- SECTION -->
     <!-- hero section -->
     <div class="hero">
      <div class="slider">
          <div class="container1">
              <!-- slide item -->
              <div class="slide active">
                  <div class="info">
                      <div class="info-content">
                          <h2 class="top-down trans-delay-0-2">
                              SANDALS
                          </h2>
                          <p class="top-down trans-delay-0-4">
                            Sandals lấy cảm hứng từ thể thao thời thượng. Quai phối kẻ sọc năng động. 
                            Gót trụ cao 7cm và đế có rãnh chống trượt. Chất liệu da cao cấp tổng hợp.
                            Giày phù hợp đi mọi dịp, như đi làm, đi chơi, đi tiệc
                          </p>
                          <div class="top-down trans-delay-0-6">
                              <a href="#banchay">
                              <button class="btn-flat btn-hover">
                                  <span>Xem ngay bên dưới</span>
                              </button>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="img top-down">
                      <img src="images/caogot-2.png" alt="">
                  </div>
              </div>
              <!-- end slide item -->
              <!-- slide item -->
              <div class="slide">
                  <div class="info">
                      <div class="info-content">
                          <h2 class="top-down trans-delay-0-2">
                              SNEAKERS
                          </h2>
                          <p class="top-down trans-delay-0-4">
                            Giày sneakers kiểu dáng năng động, trẻ trung Phần đế phối màu bắt mắt, 
                            tông màu nổi bật mang lại nét cá tính Chất liệu microfiber và polyester cao cấp, 
                            phù hợp mang nhiều dịp: đi làm, đi học hay dạo phố
                          </p>
                          <div class="top-down trans-delay-0-6">
                              <a href="#banchay">
                              <button class="btn-flat btn-hover">
                                  <span>Xem ngay bên dưới</span>
                              </button>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="img right-left">
                      <img src="images/giay-2.png" style="padding-bottom:30%" alt="">
                  </div>
              </div>
              <!-- end slide item -->
              <!-- slide item -->
              <div class="slide">
                  <div class="info">
                      <div class="info-content">
                          <h2 class="top-down trans-delay-0-2">
                              GIÀY <br>CAO GÓT
                          </h2>
                          <p class="top-down trans-delay-0-4">
                            Thiết kế giày cao gót đắp chéo phối quai tinh tế, thanh lịch. Chất liệu da tổng hợp bền đẹp, 
                            dễ vệ sinh. Gót hình học cách điệu, cao 7cm, cùng rãnh chống trượt dưới đế cho bước chân tự tin, thoải mái
                          </p>
                          <div class="top-down trans-delay-0-6">
                              <a href="#banchay">
                              <button class="btn-flat btn-hover">
                                  <span>Xem ngay bên dưới</span>
                              </button>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="img left-right">
                      <img src="./images/caogot-3.png" style="padding-bottom:20%" alt="">
                  </div>
              </div>
              <!-- end slide item -->
          </div>
          <!-- slider controller -->
          <button class="slide-controll slide-next">
              <i class='bx bxs-chevron-right'></i>
          </button>
          <button class="slide-controll slide-prev">
              <i class='bx bxs-chevron-left'></i>
          </button>
          <!-- end slider controller -->
      </div>
      </div>
  <script src="js/slide-dam-vay.js"></script>
  <!-- end hero section -->
<!-- end hero section -->

<!-- LIST PRODUCT -->
<!-- LIST PRODUCT -->
<!-- LIST PRODUCT -->
<!-- LIST PRODUCT -->
<!-- LIST PRODUCT -->
<!-- LIST PRODUCT -->
<div class="container">
<div class="section" id="list_pro">
  <div class="row" id="banchay">
<!-- SẢN PHẨM 1 -->
<?php 
  include_once("connection.php");
  $result = mysqli_query($conn, "SELECT * FROM product WHERE type = 'Giày' " );
  while($row = mysqli_fetch_array($result)){
?>
<div class="row_list">
      <div class="product-card">
        <div class="product-card-img">
        <a href="detail.php?id=<?php echo $row['id']?>">
        <img src="images/<?php echo $row['image'];?>" alt=""> 
         <img src="images/<?php echo $row['image2'];?>" alt="">
  </a>
        </div>
        <div class="product-card-info">
        <div class="product-btn">
        <a href="detail.php?id=<?php echo $row['id']?>">
            <button class="btn-flat1 btn-hover1 btn-cart-add">Xem ngay</button>
  </a>
            <button onclick="Toggle1()" id="btnh1" class="btn-flat1 btn-hover1 btn-cart-add">
              <i class='bx bxs-heart'></i>
            </button>
           
            <button class="btn-flat1 btn-hover1 btn-cart-add">
              <i class='bx bxs-cart-add'></i>
            </button>
        </div>
            <div class="product-star" style="color:#ffb703">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
            </div>
            <div class="product-card-name">
            <?php echo $row['name']; ?>
            </div>
            <div class="product-card-price">
              
              <span class="curr-price"> <?php echo number_format($row['price'], 0, ".", ","); ?></span>
            </div>
        </div>
      </div>
</div>  
<?php } ?>   
</div>  

<!-- end class row -->
</div>
<!-- END CLASS SECTION -->
</div>
<!-- end container -->
<!-- FILTER -->
<!-- FILTER -->
<!-- FILTER -->
<!-- FILTER -->
<!-- FILTER -->
<!-- FILTER -->
<!-- FILTER PRICE -->
<script>
  function filter_price(price){
    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("list_pro").innerHTML = this.responseText;
            } 
        }; 
        var path = "";
        if(price == -1){
          path = `showprice_giay.php?all`; 
        }
        else if(price < 1000000){
          path = `showprice_giay.php?duoi=${price}`;
        }   else{
          path = `showprice_giay.php?tren=${price}`;
        }
        xhttp.open("GET", path, true);
        xhttp.send();

  }
</script>

<div class="container-fluid">
  <div class="row" id="fs_app">
      
      <section class="col-12" id="fs_header_bar">
          <div class="row">
              <div class="col-10" id="fs_page_title"> Filters</div>
          </div>
      </section>

      <section class="col-12" id="fs_distance_body">
          <span class="heading">Giá sản phẩm  </span>
            <div class="contents">
              <ul>
                  <li>
                      <span>Dưới 500.000</span>
                      <?php include_once('connection.php');
                        $result = mysqli_query($conn, "SELECT * FROM product WHERE price < 500000 " );
                        if($row = mysqli_fetch_array($result)){
                        echo " <input onclick='filter_price(this.value)' value='500000' type='radio' radio='radio' name='price' id='price' class='text-right'></input>";
                      };?>
                    
                  </li>
                  <li class="active1">
                      <span>Dưới 700.000</span>
                      <?php
                      $result = mysqli_query($conn, "SELECT * FROM product WHERE price < 700000 " );
                        if($row = mysqli_fetch_array($result)){
                        echo " <input onclick='filter_price(this.value)' value='700000' type='radio' radio='radio' name='price' id='price' class='text-right'></input>";
                      };?>
                  </li>
                  <li>
                      <span>Dưới 1.000.000</span>
                      <?php
                      $result = mysqli_query($conn, "SELECT * FROM product WHERE price < 1000000 " );
                        if($row = mysqli_fetch_array($result)){
                        echo " <input onclick='filter_price(this.value)' value='999999' type='radio' radio='radio' name='price' id='price' class='text-right'></input>";
                      };?>
                  </li>
                  <li>
                      <span>Trên 1.000.000</span>
                      <?php
                      $result = mysqli_query($conn, "SELECT * FROM product WHERE price >= 1000000 " );
                        if($row = mysqli_fetch_array($result)){
                        echo " <input onclick='filter_price(this.value)' value='1000000' type='radio' radio='radio' name='price' id='price' class='text-right'></input>";
                      };?>
                  </li>
                  <li>
                      <span>Tất cả</span>
                      <?php
                      $result = mysqli_query($conn, "SELECT * FROM product  " );
                        if($row = mysqli_fetch_array($result)){
                        echo " <input onclick='filter_price(this.value)' value='-1' type='radio' radio='radio' name='price' id='price' class='text-right'></input>";
                      };?>
                  </li>
              </ul>
          </div>
      </section>
      <!-- END FILTER PRICE -->
      <!-- FILTER NAME -->
<script>
  function filter_name(name){
    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("list_pro").innerHTML = this.responseText;
            } 
        }; 
        var path = "";
        if(name == 'all'){
          path = `showname_giay.php?all`; 
        }
        else{
          path = `showname_giay.php?name=${name}`;
        }
        xhttp.open("GET", path, true);
        xhttp.send();

  }
</script>    

      <section class="col-12" id="fs_time_body">
          <span class="heading"> Tên sản phẩm</span>
       <div class="contents">
              <ul>
                  <li>
                      <span>Sneakers</span>
                      <input onclick='filter_name(this.value)'  type="radio" name="filter_giay" value="Sneakers" class="text-right"></input>
                  </li>
                  <li>
                      <span>Giày cao gót</span>
                      <input onclick='filter_name(this.value)'  type="radio" name="filter_giay"  value="Giày cao gót" class="text-right"></input>
                  </li>
                  <li class="active1">
                      <span>Sandals</span>
                      <input onclick='filter_name(this.value)'  type="radio" name="filter_giay" value="Sandals" class="text-right"></input>
                  </li>
                  <li class="active1">
                      <span>Tất cả</span>
                      <input onclick='filter_name(this.value)' type="radio" name="filter_giay" value="all" class="text-right"></input>
                  </li>
              </ul>
          </div>
      </section>
   <!-- end FILTER NAME -->
      <!-- <section class="col-12" id="fs_rating">
          <span class="heading">
              By Rating
          </span>
          <div class="contents">
              <ul>
                  <li>
                      <span>
                          <i class="fa fa-star dark"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                      </span>
                      <input type="checkbox" class="text-right"></input>
                  </li>
                  <li>
                      <span>
                          <i class="fa fa-star dark"></i>
                          <i class="fa fa-star dark"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                      </span>
                      <input type="checkbox" class="text-right"></input>
                  </li>
              </ul>
          </div>
      </section> -->

  </div>
</div>
<!-- END FILTER -->
<?php include "footer.php"?>
<!-- RUN TO TOP -->
<!-- RUN TO TOP -->
<!-- RUN TO TOP -->
<!-- RUN TO TOP -->
<!-- RUN TO TOP -->
<!-- RUN TO TOP -->
<button class="to-top">
  <i class="fas fa-angle-double-up"></i>
</button>
<script src="js/back-to-top.js"></script>
</body>
</html>