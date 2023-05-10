<?php 
include_once("controller.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--FILE-->
	<link rel="stylesheet" href="css/chitietsp.css">
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
  <title>Chi tiết sản phẩm áo kiểu peplum tay phồng</title>
  <!-- =============link bootstrap cho chi tiết sp=============== -->
  <link rel="stylesheet" 
  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://font.googleleapis.com/css2? family=Poppins:wght@300;400;500;600;700&display=swap" 
  rel="stylesheet">
</head>
<style>
  .rown{
  padding-left:90px;
}
</style>
<body>
  <!-- Trang chi tiết sản phẩm ============== -->
<?php include_once ('header.php');?>
<?php include_once('connection.php');
// var_dump($_GET['id']);exit;
$result = mysqli_query($conn, "SELECT * FROM product WHERE id = " .$_GET['id']);
$product = mysqli_fetch_assoc($result);
// var_dump($product);exit;

?>
<div class="hero">
  <div class="rown">
    <div class="column">
      <div class="sliderr">
        <div class="product">
         <img src ="images/<?php echo $product['image'];?>" id="color"  onclick="clickme(this)">
         <img src ="images/<?php echo $product['image2'];?>" id="color"  onclick="clickme(this)">
         <img src ="images/<?php echo $product['image'];?>" id="color"  onclick="clickme(this)">
         <img src ="images/<?php echo $product['image2'];?>" id="color"  onclick="clickme(this)">
        </div>
        <div class="preview">
          <img src="images/<?php echo $product['image']?>" alt="" id="imagesbox">
        </div>
      </div>
    </div>
  </div>
  <div class="phai">
    <br>
    <br>
    <br>
    <h2><?php echo $product['name'];?></h2>
    <hr>
    <br>
    <div class="product-card-price">
      <!-- <span><del>391.000</del></span> -->
      <h3>Giá: <span class="curr-price"><?php echo number_format($product['price'], 0, ".", ","); ?></span>
    </div>
    <br>
    <div class="product-card-price">
      <!-- <span><del>391.000</del></span> -->
      <h3>Size:  <?php echo $product['size'];?>   
     
    </div>
    <br>
    <div class="product-card-price">
      <!-- <span><del>391.000</del></span> -->
      <h3>Màu:  <?php echo $product['color'];?>   
     
    </div>
    <br>
    <h3>Mô tả: <br> <?php echo $product['mota'];?></h4>
<br>

  <form id="add-to-cart" action="cart.php?action=add" method="post" >
    <div class="quantily">
      <p>Số lượng: </p>
      <input min=1 max=<?php echo $product['amount'];?> type="number" value="1" name="quantity[<?php echo  $product['id']?>]"> 
    </div>
    <br>
    <div class="btn-box">
      <!-- <button class="cart-btn">Thêm giỏ hàng</button> -->
        <button type="submit" class="buy-btn">Mua ngay</button>
  </form>

    </div>
    <br>
    <br>
  </div>
</div>
<script>
  $('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})
</script>
<!-- Javascript cho đổi ảnh -->
<script>
  function clickme(smallImg){
    var fullIng = document.getElementById("imagesbox");
    fullIng.src = smallImg.src; 
  }
</script>

<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <!-- ================= Liên hệ =================== -->
    <!-- ================= Liên hệ =================== -->
      <!-- ================= Liên hệ =================== -->
        <!-- ================= Liên hệ =================== -->
          <!-- ================= Liên hệ =================== -->
            <!-- ================= Liên hệ =================== -->
              <!-- ================= Liên hệ =================== -->
                <!-- ================= Liên hệ =================== -->
                  <!-- ================= Liên hệ =================== -->

  <div class="main-content">
    <div class="left box">
      <h2>THÔNG TIN</h2>
      <div class="content1">
        <p>CodinNepal is a YouTube channel where you can learn web designing, web development, ui/ux designing, html css tutorial, hover animation and effects, javascript and jquery tutorial and related so on.</p>
        <div class="social">
          <a href="https://www.facebook.com/beautilshop">
            <span class="fab fa-facebook-f"></span></a>
          <a href="#">
            <span class="fab fa-twitter"></span></a>
          <a href="https://www.instagram.com/beauty.__.shop/">
            <span class="fab fa-instagram"></span></a>
          <a href="https://www.youtube.com/channel/UCRXiA3h1no_PFkb1JCP0yMA">
            <span class="fab fa-youtube"></span></a>
        </div>
      </div>
    </div>

    <div class="center box">
      <h2>ĐỊA CHỈ</h2>
      <div class="content1">
        <div class="place">
          <span class="fas fa-map-marker-alt"></span>
          <span class="text"><b>Hồ Chí Minh, Việt Nam</b></span>
        </div>
        <div class="phone">
          <span class="fas fa-phone-alt"></span>
          <span class="text"><b>086 190032100</b></span>
        </div>
        <div class="email">
          <span class="fas fa-envelope"></span>
          <span class="text"><b>Beautyphun@gmail.com</b></span>
        </div>
      </div>
    </div>

    <div class="right box">
      <h2>LIÊN LẠC</h2>
      <div class="content1">
        <form action="#">
          <div class="email">
            <div class="text">Email *</div>
            <input type="email" required>
          </div>
          <div class="msg">
            <div class="text">Message *</div>
            <textarea rows="2" cols="25" required></textarea>
          </div>
          <div class="btn">
            <button type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="bottom">
    <center>
      <span class="credit">Created By <a href="http://127.0.0.1:5500/%C4%90%E1%BB%92%20%C3%81N%20NH%C3%93M/1BEAUTYFUL.html?#">Biutiphunshop</a> | </span>
      <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
    </center>
  </div>
</body>
</html>