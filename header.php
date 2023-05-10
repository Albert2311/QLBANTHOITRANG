

  <script src="https://kit.fontawesome.com/ed720e4b54.js" crossorigin="anonymous"></script> <!--THEM ICON!!!--> 
<style>
@import url('https://fonts.googleapis.com/css2?family=Inspiration&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,600;1,300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@1,300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap');

/* @media all and (min-width: 1280px){} */
*{
  padding:0;
  margin:0;
  /* scroll-behavior: smooth; */
}
body{
  background-color:#ffffff;
  align-content: center;
  padding:0;
  margin:0;
  overflow-x: hidden;
  position: relative;
  background-color: #fff;
  overflow-x: hidden;
  /* overflow: hidden; */
}
/* dịnh dạng toàn bộ */
.container33 {
  width:100%;
  height:100%;
  margin:0;
  padding:0;
  border:0;
} 
/*thanh quang ba*/
.header33 {
  background-image: linear-gradient(145deg,#94d2bd,#f1c0e8);
  font-size: 12px;
  width: 100%;
  transition: 0.3s;
  position: relative;
  text-align: center;
  padding: 10px 0 10px 0; /* giãn cách chữ trong khung*/
  color: #ffffff;
  
}
/* header2*/
.header33_navbar1{
  display: flex;
  justify-content: left;
  height: 30px;  
  width: 45%;
  font-size: 13px;
  font-weight: 300;
  padding-left: 60px;
}
.header33_navbar2 {
    display: flex;
    height: 30px;
    width: 55%;
    /* padding-right: 10px; */
    align-items: flex-start;
    justify-content: flex-end;
  }
.header33_navbar2 h3{
  display:flex;
  width:100%;
}
/* AVA USERS */
/* AVA USERS */
/* AVA USERS */
/* AVA USERS */
.ava{
  width:36%;
  height:30px;
  display:flex;
}
.user-text{
  width: 60%;
  display: flex;
  align-items: center;
  justify-content: center;
  align-content: center;
}

/* AVATAR */
/* AVATAR */
/* AVATAR */
/* AVATAR */
/* AVATAR */
.profile-pic-div{
  height: 30px;
  width: 31px;
  border-radius: 50%;
  overflow: hidden;
  border: 1px solid grey;
}

#photo{
  height: 100%;
  width: 100%;
}

#file{
  display: none;
}

#uploadBtn{
  height: 100%;
  width: 3%;
  position: absolute;
  bottom: 0;
  left: 90%;
  transform: translateX(-50%);
  text-align: center;
  
  cursor: pointer;
  display: none;
}
/* ĐĂNG NHẬP ĐĂNG KÝ--------------- */
/* ĐĂNG NHẬP ĐĂNG KÝ--------------- */
/* ĐĂNG NHẬP ĐĂNG KÝ--------------- */
/* ĐĂNG NHẬP ĐĂNG KÝ--------------- */
/* ĐĂNG NHẬP ĐĂNG KÝ--------------- */
.header33_navbar {
  display: flex;
  /* align-content:center; 
  background-color: #00F494;*/
  position: sticky;
  z-index: 100;
  height: 30px;  
  width: 100%;
  text-align: right;
  justify-content:space-between;
  /* padding-bottom:90px; */
  /* float:right; */
}
.header33_navbar-list {
  list-style: none;
  padding-left: 3px;
  margin-top: 4px;
}
.header33__navbar-icon-link{
  display:flex;
  align-items:center;
  align-content: center;
  justify-content: center;
  flex-wrap: nowrap;
  flex-direction: row;
  font-size: 13px; /* kích thước icon*/ 
  /* padding-right: 10px; giãn cách cái icon */
  color: black; /*màu chữ*/
  text-decoration: none;
  width: 100px;
  height:30px;
  }
  .header33__navbar-icon-link:hover{
  color: #023e8a; /* đổi màu khi input*/
  }

  .header33_navbar-item {
    margin: 100px 8px;
    position: relative;   
  }   
  .header33_navbar-item,
  .header33_navbar-item-link {
   display: inline-block;
   font-size: 1.4rem;
   color: var(--white-color);
   text-decoration: none;
   font-weight: 300;
  }
  
  /*định dạng icon*/
  .fa-solid{ /*định dạng icon*/  
  color: black;
  font-size: 15px;
  padding: 5px; /* khoảng cách các icon*/
  /* margin-bottom:10px;  */
  }
  .fa,
  .fa::before{
  content: "\f291";
  font-size: 15px; /*kích thước icon*/
  color: black;
  padding-right: 5px;
  }

/* QR CODE */
/* QR CODE */
/* QR CODE */
/* QR CODE */
/* QR CODE */
/* QR CODE */
/* QR CODE */
/* QR CODE */
.qrcode{
  display:none;
  position:relative;
  display:flex;
  width: 70px;
  left: -30px;
  top: 0;
  padding: 8px;
  border-radius: 50px;
  /* background-color: #000000; */
}
.qrcode_img{
  height: 100%;
  width: 250%;
  display: none;
}
.qrcode-view:hover .qrcode_img{
  display: block;
}
/*LOGO TÊN SHOP*/
/*LOGO TÊN SHOP*/
/*LOGO TÊN SHOP*/
/*LOGO TÊN SHOP*/
/*LOGO TÊN SHOP*/
.logo-name {
  height: 80px; 
  font-size: 40px;
  width: 400px;
  /*left: calc(10% - 110px); vị trí icon
  top:115px;
  align-items: center;  
  background-color: #023e8a;*/
  float: left;  
}
.logo-name .logo{
  height :80px;
  width: 90px;
  margin-top: 0px;
}
.logo-name .name{
  /* font-size: 43px;
  font-family: Pacifico;*/
  vertical-align:20px; /*vị trí tên shop middle */
  font-size: 43px;
  font-family: Pacifico;
  background: -webkit-linear-gradient(70deg,#8338ec,#3a86ff, #ffc6ff); /* chuyển màu chữ*/
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-size: 300%;
  background-position: -100%;  
  color: transparent;
  animation: animatedText 4s  reverse;
  animation-iteration-count: infinite;
}
@keyframes animatedText{
  to{
    background-position: 100%; 
  }
}
@media screen and (max-width:375px){
  .logo-name .name {
    font-size: 32px;
}
}
/* THÔNG BÁOOOOOOOOOOOOOOOOOOOOOOOOO */
/* THÔNG BÁOOOOOOOOOOOOOOOOOOOOOOOOO */
/* THÔNG BÁOOOOOOOOOOOOOOOOOOOOOOOOO */
/* THÔNG BÁOOOOOOOOOOOOOOOOOOOOOOOOO */
/* THÔNG BÁOOOOOOOOOOOOOOOOOOOOOOOOO */
.header__notify{
  /* position:absolute; */
  flex-direction: row;
  flex-wrap: wrap;
  align-items: flex-start;
  z-index: 3000;
  top:100%;
  right:0;
  width:330px;
  height: 20px;
  /* background-color:rgb(187, 50, 50); */
  font-size: 1.5rem;
  /* border: 1px solid #D3D3D3; */
  transform-origin: 90% top left ;/* hướng chuyển động*/
  animation: header__notifygrowth ease-in 0.25s;
  display: none;
  /* cursor: default; không bấm vào được */
}
.header__notify::before{
  content:"";
  border: 20px;
  border-style: solid;
  border-width: 20px 30px;
  border-style: solid;
  color: #eceffc ; /* position:sticky ; */
  display:flex;
  margin-top: -24px; 
  margin-left: 35px;
  width: 5px;
  height: 0px; /* color:#ffadad; */
  border-left: 25px solid rgba(0, 0, 0, 0);
  border-right: 25px solid rgba(0, 0, 0, 0) ;
  border-top: 25px solid rgba(0, 0, 0, 0) ;
  border-bottom: 25px solid #555 transparent;
}
@keyframes header__notifygrowth{
    from{
      opacity: 0;
      transform: scale(0);
    }
    to{
      opacity: 1;
      transform: scale(1)
    }
}
.header__notify-header{
  height:40px;
  background: -webkit-linear-gradient(70deg,#f2ecfa,#e9f1fd);
  display: flex;
  border-radius: 20px 20px 0px 0px;
  border-bottom: 1px solid #c9c9c9;
  cursor:text;
}
.header__notify-header h3{
  background: -webkit-linear-gradient(10deg,#005f73,#0060fc,#ef476f); /* chuyển màu chữ*/
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin: 0px 0 0 20px;
  font-weight: 1200;
  font-size: 1.5rem;
  line-height: 40px;
  /* user-select: none; */ /*copy chữ*/
  font-family: 'Cormorant', serif;
}

.header__notify-list{
    padding-left:0;
    /* background-color:#94d2bd; */
    width: 330px;
}
.header__notify-item{
  display: flex;
  padding:6px;
  border-bottom: 1px solid #c7c7c7;
}
.header__notify-item--has:hover .header__notify{
  display: block;
}
.header__notify-item:hover{
  background: whitesmoke;
}
.header__notify-item--view{
  background: -webkit-linear-gradient(70deg,#f2ecfa,#e9f1fd);
  
}
.header__notify-link{
  display: flex;
  text-decoration: none;
  
}
.header__notify-img{
  width: 30%;
  object-fit: contain;
  
}
.header__notify-info{
  margin-left: 12px;

}
.header__notify-name{
  display: flex;
  font-size: 1rem;
  color: var(--text--color);
  font-weight: 900;
  line-height: 1.2rem;
  text-align: left;
  font-family: 'Cormorant', serif;
}
.header__notify-descrip{
  display: block;
  font-size: 0.75rem;
  line-height: 1rem;
  color:rgb(122, 122, 134);
  text-align: left;
  font-family: 'Cormorant', serif;
}
.header__notify-footer{
  display:flex;
  font-size: 19px;
  background: -webkit-linear-gradient(70deg,#f2ecfa,#e9f1fd);
  text-align:center;
  justify-content: center;
  font-family: 'Cormorant', serif;
  border-radius: 0px 0px 20px 20px;
}
.header__notify-footer-btn{
  text-decoration: none;
  color: var(--text-color);
  padding: 5px 48px;
  margin: auto;
  font-weight: 400;
}
.header__notify-footer-btn:hover{
  text-decoration:underline;
  color: blue;
  
}
@media screen and (max-width: 500px) {
  .header_navbar1 p{
    
    width: 100px;
  }
  .header_navbar2 p{
    display: none;
  }
}
/*THANH MENU NGANG*/
/*THANH MENU NGANG*/
/*THANH MENU NGANG*/
/*THANH MENU NGANG*/
/*THANH MENU NGANG*/
nav{
  position: sticky;
  top: 0;
  display:block;
  z-index: 99;
  width: 100%;
  float:left;
  background: #ffffff;
  opacity: 0.9;
  border-top: 1px solid black;
}
nav .wrapper{
  position: relative;
  max-width: 100%;
  padding: 0px 10px;
  height: 70px;
  line-height: 70px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content:space-around;
  /* opacity: 0.9; */
}
.wrapper .logo a{
  color: #f2f2f2;
  font-size: 30px;
  font-weight: 600;
  text-decoration: none;
}
.wrapper .nav-links{
  display: inline-flex;
}
.nav-links li{
  list-style: none;
}
.nav-links li a{
  color: #000000;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 9px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.nav-links li a:hover{
  background:#ffadad;
  color:rgb(255, 255, 255);
  /* background: -webkit-linear-gradient(70deg,#8338ec,#3a86ff, #ffc6ff); chuyển màu chữ */

}
.nav-links .mobile-item{
  display: none;
}
.nav-links .drop-menu{
  position: absolute;
  background: #242526;
  width: 180px;
  line-height: 45px;
  top: 85px;
  opacity: 0;
  visibility: hidden;
  margin-left: -40px;
  box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}
.nav-links li:hover .drop-menu,
.nav-links li:hover .mega-box{
  transition: all 0.3s ease;
  top: 57px;
  opacity: 1;
  visibility: visible;
}
.drop-menu li a{
  width: 100%;
  display: block;
  padding: 0 0 0 0px;
  font-weight: 400;
  border-radius: 0px;
  text-align: center;
}
.mega-box{
  position: absolute;
  left: 0;
  width: 55%;
  margin-left: 20pc;
  top: 85px;
  opacity: 0;
  visibility: hidden;
}
.mega-box .content{
  background: #242526;
  padding: 17px 25px;
  padding-bottom: 20px;
  display: flex;
  width: 100%;
  justify-content: center;
  box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}
.mega-box .content .row{
  width: calc(65% - 30px);
  line-height: 45px;
}
.content .row img{
  width: 260px;
  height: 100%;
  object-fit: cover;
  padding-left: 50px;
  }
.content .row header{
  color: #f2f2f2;
  font-size: 20px;
  font-weight: 500;
  padding-left: 40px;
}
.content .row .mega-links{
  margin-left: 0px;
  margin-right: 20px; /* khung hover*/
  border-left: 1px solid rgba(255,255,255,0.09);
}
.row .mega-links li{
  padding: 0 20px;
}
.row .mega-links li a{
  padding: 3px 90px;
  color: #d9d9d9;
  font-size: 17px;
  display: block;
  text-align: center;
}
.row .mega-links li a:hover{
  color: #f2f2f2;
}
.wrapper .btn{
  color: rgb(175, 174, 248); /*màu dấu chéo*/
  font-size: 20px;
  cursor: pointer;
  display: none;
}
.wrapper .btn.close-btn{
  position: absolute;
  right: 30px;
  top: 10px;
}
/* THANH CÔNG CỤ SMALL SCREEN */
/* THANH CÔNG CỤ SMALL SCREEN */
/* THANH CÔNG CỤ SMALL SCREEN */
/* THANH CÔNG CỤ SMALL SCREEN */
/* THANH CÔNG CỤ SMALL SCREEN */
@media screen and (max-width: 1150px) {
  .searching .searchbox{
    display:none;
  }
  .wrapper .btn{
    display: block;
  }
  .wrapper .nav-links{
    position: fixed;
    height: 100vh;
    width: 100%;
    max-width: 350px;
    top: 0;
    left: -100%;
    background: #242526;
    display: block;
    padding: 50px 10px;
    line-height: 50px;
    overflow-y: auto;
    box-shadow: 0px 15px 15px rgba(0,0,0,0.18);
    transition: all 0.3s ease;
  }
  /* custom scroll bar*/ 
  ::-webkit-scrollbar {
    width: 10px;
  }
  ::-webkit-scrollbar-track {
    background: #242526;
  }
  ::-webkit-scrollbar-thumb {
    background: #3A3B3C;
  }
  #menu-btn:checked ~ .nav-links{
    left: 0%;
  }
  #menu-btn:checked ~ .btn.menu-btn{ /*khung đen*/
    display: none;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  #close-btn:checked ~ .btn.menu-btn{
    display: block;
  }
  .nav-links li{
    margin: 15px 10px;
  }
  .nav-links li a{
    padding: 0 20px;
    display: block;
    font-size: 20px;
  }
  .nav-links .drop-menu{
    position: static;
    opacity: 1;
    top: 65px;
    visibility: visible;
    padding-left: 20px;
    width: 100%;
    max-height: 0px;
    overflow: hidden;
    box-shadow: none;
    transition: all 0.3s ease;
  }
  #showDrop:checked ~ .drop-menu,
  #showMega:checked ~ .mega-box{
    max-height: 100%;
  }
  .nav-links .desktop-item{
    display: none;
  }
  .nav-links .mobile-item{
    display: block;
    color: #f2f2f2;
    font-size: 20px;
    font-weight: 500;
    padding-left: 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: all 0.3s ease;
    text-align: center;
  }
  .nav-links .mobile-item:hover{
    background: #f3a7a7;
  }
  .drop-menu li{
    margin: 0;
  }
  .drop-menu li a{
    border-radius: 5px;
    font-size: 18px;
  }
  .mega-box{
    position: static;
    top: 65px;
    opacity: 1;
    visibility: visible;
    padding: 0 20px;
    max-height: 0px;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  .mega-box .content{
    box-shadow: none;
    flex-direction: column;
    padding: 20px 20px 0 20px;
  }
  .mega-box .content .row{
    width: 100%;
    margin-bottom: 15px;
    border-top: 1px solid rgba(255,255,255,0.08);
  }
  .mega-box .content .row:nth-child(1),
  .mega-box .content .row:nth-child(2){
    border-top: 0px;
  }
  .content .row .mega-links{
    border-left: 0px;
    padding-left: 15px;
  }
  .row .mega-links li{
    margin: 0;
  }
  .content .row header{
    font-size: 19px;
  }
}
nav input{
  display: none;
}

.body-text{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  text-align: center;
  padding: 0 30px;
}
.body-text div{
  font-size: 45px;
  font-weight: 600;
}
/* THANH TÌM KIẾM*/ 
/* THANH TÌM KIẾM*/ 
/* THANH TÌM KIẾM*/ 
/* THANH TÌM KIẾM*/ 
/* THANH TÌM KIẾM*/ 
/* THANH TÌM KIẾM*/ 
.searching {
  width: 20vw;
  height: 70px;
  /*display: flex;
  position:absolute;
  left: calc(40% - 120px); vị trí icon
  background-color: #0e69e0;*/
  float:left;
  align-items: center;
  justify-content: center;
  }
.searchbox {
  position: relative;
  display: block;
  width: 100%;
  max-width: 36px;
  transition: 0.4s linear;
  overflow: hidden; 
  margin-top: 15px;
}
.searchbox__input {
  display: block;
  appearance: none;
  width: 90%; /* độ rộng khi input!!!!!!!!!!!!!*/
  height: 13px;
  border: none;
  outline: none;
  border-radius: 50px;
  background-color: #24233A;
  padding: 18px;
  color: #24233A;
  font-size: 13px;
  cursor: pointer;
  transition: 0.2s linear;
  box-sizing: border-box;
}
.searchbox__input::placeholder {
  color: #24233A;
}
.searchbox__icon {
  position: absolute;
  right: calc(35px / 2);
  top: 50%;
  transform: translate(50%, -50%);
  width: 20px;
  height: 20px;
  pointer-events: none;
}
.searchbox__icon path {
  fill: #ffeb36;
  transition: 0.4s linear;
}
.searchbox:focus-within {
  max-width: 300px;
}
.searchbox:focus-within .searchbox__input {
  background-color:#fbf8cc;
  padding-right: 20px;
  /*box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.4);*/
}
.searchbox:focus-within .searchbox__icon path {
  fill: #24233A;
}

.logo-name .logo {
    height: 83px;
    width: 90px;
    margin-top: -58px;
}




  
  .user-text {
    padding-right: 12px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    align-content: center;
  }
  .ava{
    width: 62%;
    height: 30px;
    display: flex;
    justify-content: flex-end;
  }

  #photo{ 
    height: 100%;
    width: 100%;
  }
  #uploadBtn {
    height: 100%;
    width: 3%;
    position: absolute;
    bottom: 0;
    left: 84%;
    transform: translateX(-50%);
    text-align: center;
    cursor: pointer;
    display: none;
}
.header33__navbar-icon-link {
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
    flex-wrap: nowrap;
    flex-direction: row;
    font-size: 13px;
    color: black;
    text-decoration: none;
    width: 100px;
    height: 30px;
}
</style>
<body>

  <div class="container33">
    
    <!--dang nhap tai khoan-->
  <div class="header33_navbar" >  
    <div class="header33_navbar1">
    <!--vào cửa hàng-->
  <div class="header33__navbar1__notify header33__notify-item--has qrcode-view">
  <a href="" class="header33__navbar-icon-link ">
    <i class="fa-solid fa-qrcode"></i>Vào cửa hàng</a>
    <div class="qrcode">
      <img src="images/qrcode.png" alt="" class="qrcode_img">
    </div>
</div>
   <!-- thông báo -->
<div class="header__navbar1__notify header__notify-item--has" style="color:black"> 
    <a href="tintuc.php" class="header__navbar-icon-link ">
      <i class="fa-solid fa-bell"></i>Thông báo </a>  
    </div>
    </div>
    <!-- ĐĂNG KÝ + ĐĂNG NHẬP + GIỎ HÀNG -->
    <!-- ĐĂNG KÝ + ĐĂNG NHẬP + GIỎ HÀNG -->
    <!-- ĐĂNG KÝ + ĐĂNG NHẬP + GIỎ HÀNG -->
    <!-- ĐĂNG KÝ + ĐĂNG NHẬP + GIỎ HÀNG -->
    <!-- ĐĂNG KÝ + ĐĂNG NHẬP + GIỎ HÀNG -->
<div class="header33_navbar2 ">
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
      <a href="logout.php" class="header33__navbar-icon-link">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        Đăng xuất</a>
          <!--giỏ hàng-->
      <a href="cart.php" class="header33__navbar-icon-link">
        <i class="fa-solid fa-basket-shopping"></i>
        Giỏ hàng</a>
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
                    <li><a href="ao.php">Áo vest</a></li>
                    <li><a href="ao.php">Áo len</a></li>
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
                    <li><a href="giay.php">Sneaker</a></li>
                    <li><a href="giay.php">Giày cao gót</a></li>
                    <li><a href="giay.php">Giày Sandals</a></li>
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
                    <li><a href="phukien.php">Trang sức</a></li>
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
