<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  

  <!-- ICON -->

  <script src="https://kit.fontawesome.com/ed720e4b54.js" crossorigin="anonymous"></script> <!--THEM ICON!!!--> 
</head>
<body>
<style>
  /* LIÊN HỆ*/
/* LIÊN HỆ*/
/* LIÊN HỆ*/
/* LIÊN HỆ*/
/* LIÊN HỆ*/
/* LIÊN HỆ*/
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
.content1{
  position: relative;
  margin: 150px auto;
  text-align: left;
  padding: 0 20px;
  
}
.content1 .text{
  font-size: 2.5rem;
  font-weight: 600;
  color: #fff;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.content1 p{
  font-size: 1.0625rem;
  font-weight: 600;
  color: #fff;
  line-height: 25px;
}
footer{
  position:relative;
  bottom: 1px;
  width: 100%;
  background: rgb(46, 46, 46);
  /* background-image: url('../images/footer.jpg'); */
  background-size: 500%;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.main-content{
  display: flex;
  position:relative;
  bottom: 1px;
  width: 100%;
  background: rgb(46, 46, 46);
  /* background-image: url('../images/footer.jpg'); */
  background-size: 500%;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.bottom{
  position:relative;
  float:left;
  bottom: 1px;
  width: 100%;
  background: rgb(46, 46, 46);
  /* background-size: 500%; */
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.main-content .box{
  flex-basis: 50%;
  padding: 20px 10px;
}
.box h2{
  font-size: 1.125rem;
  font-weight: 600;
  text-transform: uppercase;
  color: white; /* màu chữ tiêu đề*/
  margin-left: 20px;
  
}
.box .content1{
  margin: 20px 0 0 0;
  position: relative;
}
.box .content1:before{
  position: fixed;
  content: '';
  top: -20px;
  height: 20px;
  width: 100%;
  background: #1a1a1a;
}
.box .content1:after{
  position: absolute;
  content: '';
  height: 2px;
  width: 15%;
  background: -webkit-linear-gradient(90deg,#8338ec,#3a86ff, #ffc6ff);
  top: 0px; /* gạch ngang*/
  left: 24px;
}
.left .content1 p{
  text-align:justify;
  padding-top:20px;
}
.left .content1 .social{
  margin: 20px 0 0 0;
}
.left .content1 .social a{
  padding: 0 2px;
}
.left .content1 .social a span{
  height: 40px;
  width: 40px;
  background: -webkit-linear-gradient(100deg,#3a86ff, #ffc6ff);
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  transition: 0.3s;
  color:rgb(255, 255, 255);
}
.left .content1 .social a span:hover{
  background: #ffffff; /* icon fb ins ytb*/
  color:rgb(0, 0, 0);
}
.place{
  padding-top: 20px;
}
.center .content1 .fas{
  font-size: 1.4375rem;
  background: #1a1a1a;
  height: 45px;
  width: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
  cursor: pointer;
  color: white;
}
.center .content1 .fas:hover{
  background: -webkit-linear-gradient(100deg,#3a86ff, #ffc6ff);
  /* email , location , phone*/
}
.center .content1 .text{
  font-size: 1.0625rem;
  font-weight: 500;
  padding-left: 10px;
}
.center .content1 .phone{
  margin: 15px 0;
}
.right2 .email{
  padding-top: 20px;
}
.right2 form .text{
  font-size: 1.0625rem;
  margin-bottom: 2px;
  color: #fffafa;
  padding:0;
}
.right2 form .msg{
  margin-top: 10px;
}
.right2 .msg textarea{
  padding-top: 10px;
}
.right2 form input, .right2 form textarea{
  width: 100%;
  font-size: 1.0625rem;
  background: #151515;
  padding-left: 10px;
  border: 1px solid #222222;
  color:rgb(255, 255, 255); /* màu chữ trong khung*/
}
.right2 form input:focus,
.right2 form textarea:focus{
  outline-color: #3498db;
}
.right2 form input{
  height: 35px;
}
.right2 form .btn2{
  margin-top: 10px;
}
.right2 form .btn2 button{
  height: 40px;
  width: 100%;
  border: none;
  outline: none;
  /* background: #cfbaf0; */
  background: -webkit-linear-gradient(10deg,#8338ec,#3a86ff);
  font-size: 1.0625rem;
  font-weight: 500;
  cursor: pointer;
  transition: .3s;
  color: white;
}
.right2 form .btn2 button:hover{
  background: rgb(255, 255, 255);
  color: black;
}
.bottom center{
  padding: 5px;
  font-size: 0.9375rem;
  background: #151515;
}
.bottom center span{
  color: #ffffff;
}
.bottom center a{
  color: #ffc6ff;
  
}
.bottom center a:hover{
  text-decoration: underline;
}
/* LIÊN HE SMALL SCREEN */
@media screen and (max-width: 960px) {
  footer{
    position: relative;
    bottom: 0px;
  }
  .main-content{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .main-content .box{
    margin: 5px 0;
  }
}
/* RUN TO TOP */
/* RUN TO TOP */
/* RUN TO TOP */
/* RUN TO TOP */
/* RUN TO TOP */
/* RUN TO TOP */
/* RUN TO TOP */
 .to-top {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  font-size: 26px;
  width: 50px;
  height: 50px;
  background-color: #fff;
  color: #333;
  cursor: pointer;
  outline: none;
  border: 3px solid #333;
  border-radius: 50%;
  transition-duration: 0.1s;
  transition-timing-function: ease-in-out;
  transition-property: background-color, color;
}
.to-top:hover, .to-top:focus {
  background-color: #333;
  color: #fff;  
}

@media(max-width: 992px) {
 
  .to-top { font-size: 22px; width: 40px; height: 40px; bottom: 15px; right: 15px; }
}
@media(max-width:768px) {
 
  .to-top { font-size: 18px; width: 32px; height: 32px; bottom: 6px; right: 6px; }
}

/* Animations */
.btnEntrance {
  animation-duration: 0.3s;
  animation-fill-mode: both;
  animation-name: btnEntrance;
}

@keyframes btnEntrance {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

.btnExit {
  animation-duration: 0.25s;
  animation-fill-mode: both;  
  animation-name: btnExit;
}

@keyframes btnExit {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }
}
#alert
{
  height: auto;
  width: 100%;
  background: #30b5bbfa;
  padding: 0 15px;
  font-size: 19px;
  line-height: 40px;
  margin: 10px 0;
  color: #fff;
  border-radius: 4px;
text-align:-webkit-center;
}
</style>
<!-- Lien heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->
<!-- Lien heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->
<!-- Lien heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->
<!-- Lien heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->
<!-- Lien heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->
<body>
<div class="main-content">
    <div class="left box">
      <h2>THÔNG TIN</h2>
      <div class="content1">
        <p>Biutyphunshop là một thương hiệu thời trang dành cho nữ giới. Thời trang mang phong cách đặc trưng Pháp sang trọng, thanh lịch và quyến rũ từ các bộ trang phục công sở nhẹ nhàng đến các bộ đầm dạ hội, đầm dạo phố</p>
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
          <span class="text"><b>shopbiutyphun@gmail.com</b></span>
        </div>
      </div>
    </div>

    
    <div class="right2 box">
      <h2>LIÊN LẠC</h2>
      <div class="content1">
        <form method="post" class="contact-form">
          <div class="email">
            <div class="text">Email *</div>
            <input type="email" name="email" id="email"required>
          </div>
          <div class="msg">
            <div class="text">Message *</div>
            <textarea name="message" rows="2" cols="25" required></textarea>
          </div>
          <div class="btn2">
          <button type="submit" name="submit" id="submit" value="Send">Send</button>
          </div>
          <?php include_once ("sentMail.php"); ?> 
       <?php
            if(isset($_POST['submit'])){
              if($error == false) {?>
                <div id="alert">
					<?php echo "Gửi mail thành công"; ?>
				</div>
                <?php
                }
              }
            ?>
        </form>

                 
            
    
      </div>
    </div>
  </div>
  <div class="bottom">
    <center>
      <span class="credit">Created By <a href="#">Biutiphunshop</a> | </span>
      <span class="far fa-copyright"></span><span> 2022 All rights reserved.</span>
    </center>
  </div> 
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
