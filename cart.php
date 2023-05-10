<?php session_start();?>
<?php include 'connection.php';

if(!isset($_SESSION['cart2'])){
    $_SESSION ['cart2'] = array();
}
$error = false;
$success = false;
if(isset($_GET['action'])){
    function update_cart1($add = false){

        foreach ($_POST['quantity'] as $id => $quantity ){
            if($quantity == 0){
                unset($_SESSION['cart2'][$id]);
                // header('location: cart.php');
            } else {
                if($add && isset($_SESSION['cart2'][$id])){
                    $_SESSION['cart2'][$id] += $quantity;
                }else {
                    $_SESSION['cart2'][$id] = $quantity;
                }
            }
       }
    }
    switch($_GET['action']){
        case "add":
            update_cart1(true);
            break;
        case "delete":
            if(isset($_GET['id'])){
                unset($_SESSION['cart2'][$_GET['id']]);
            }
                header('location: cart.php');
            break;
        case "submit":
           if(isset($_POST['update_click'])){
                update_cart1();
           } elseif (isset($_POST['order_click'])){
               if(empty($_POST['name']))
                {
                   $error= "Bạn chưa nhập tên người nhận";
                } 
                elseif(empty($_POST['address']))
                {
                    $error = "Bạn chưa nhập địa chỉ nhận hàng";
                } 
                elseif(empty($_POST['phone']))
                {
                   $error = "Bạn chưa nhập số điện thoại";
                } 
                elseif (empty($_POST['quantity'])){
                    $error = "Không có sản phẩm nào cả :((";
                }
                if($error == false && !empty($_POST['quantity'])){ //lưu vào data
                    $product = mysqli_query($conn, "SELECT * FROM product WHERE id IN (".implode(",",array_keys($_POST['quantity'])).")");
                    $total = 0;
                    $orderproduct = array();
                    while ($row = mysqli_fetch_array($product)){
                        $orderproduct[] = $row;
                        $total += $row['price'] * $_POST['quantity'][$row['id']] ;
                        $update_amount = mysqli_query($conn, "UPDATE product SET amount = amount - {$_POST['quantity'][$row['id']]}, sold = sold + {$_POST['quantity'][$row['id']]} WHERE id = {$row['id']}");
                    }
                    $insertorder = mysqli_query($conn, "INSERT INTO `order` (`id`, `name_user`, `phone`, `address`, `total`, `created_time`, `last_update`) VALUES (NULL, '".$_POST['name']."', '".$_POST['phone']."', '".$_POST['address']."', ".$total.",  current_timestamp() ,  current_timestamp())");
                    $order_id = $conn->insert_id;
                    $insertstring = "";
                    foreach ($orderproduct as $key => $product){
                        $insertstring .= "(NULL, '".$order_id."', '".$product['id']."', '".$_POST['quantity'][$product['id']]."', '".$product['price']."',  current_timestamp(),   current_timestamp())";
                        if($key != count($orderproduct) - 1 ){
                            $insertstring .= ",";
                        }
                    }
                   
                    $insertorder = mysqli_query($conn, "INSERT INTO `order_detail` (`id`, `order_id`, `pro_id`, `quantity`, `price`, `created`, `updated`) VALUES ".$insertstring.";");
                    $success = "Đặt hàng thành công";
                    unset($_SESSION['cart2']);
                }
           }
            break;
    }
}
if(!empty($_SESSION['cart2'])){
   $product = mysqli_query($conn, "SELECT * FROM product WHERE id IN (".implode(",",array_keys($_SESSION['cart2'])).")");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cart.css">
           <!-- slide bar -->
    <link href="css/bootstrap2.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
    <link href="css/sidebars.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ed720e4b54.js" crossorigin="anonymous"></script> <!--THEM ICON!!!--> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .right2 form .btn2 button {
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
    a:hover{
        /* background-color: #cdb4db; */
        color: #cdb4db;
    }
    .nav-links li a {
    font-family: 'Font Awesome 5 Pro';
    }
    .pt-5, .py-5 {
        padding-top: 1rem!important;
    }
    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');body{background-color: #ffe8d2;font-family: 'Montserrat', sans-serif}.card{border:none}.logo{background-color: #eeeeeea8}.totals tr td{font-size: 13px}.footer{background-color: #eeeeeea8}.footer span{font-size: 12px}.product-qty span{font-size: 12px;color: #dedbdb}
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }
  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }
  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }
  .fa-cart-plus:before {
content: "\f217";
padding-right: 7px;
}
    .nav-link:hover{
        background: #ababf6;
    }
  section{padding: 1% 3%  ;}
  main {overflow-y: auto;}    
 
  .mt-5, .my-5 {
      margin-top: 0rem!important;
  }
 

  .col-md-8 {
          flex: 0 0 auto;
          width: 77.7777778%;
      }
</style>
</style>
<body>
  
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>

</svg>
<main class="d-flex flex-nowrap">
  <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Biutyphunshop</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="main.php" class="nav-link link-dark" aria-current="page">
        <i class="fa-solid fa-house"></i>
          Trang chủ
        </a>
      </li>
      <li>
        <a href="cart.php" class="nav-link link-dark">
        <i class="fa-solid fa-cart-shopping"></i>
          Giỏ hàng
        </a>
      </li>
      <li>
        <a href="tintuc.php" class="nav-link link-dark">
        <i class="fa-solid fa-bell"></i>
          Thông báo
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      
        <img src="images/ava.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong> <?php 
    if(isset($_SESSION['name'])){
        echo $_SESSION['name'];
    }
    ?></strong>

     
    </div>
  </div>

    
  <section id="cart-container" class="container3 my-5" style="align-items:center">
  <!-- <section id="blog-home" class="pt-5 mt-5 container3"> -->
    <p class="font-weight-bold pt-5">Giỏ hàng</p>
    <hr>
<form id="cart-form" action="cart.php?action=submit" method="post">
    <table width="100%">
        <thead>
            <tr>
                <td>Xóa</td>
                <td>Ảnh</td>
                <td>Sản phẩm</td>
                <td>Giá</td>
                <td>Số lượng</td>
                <td>Tổng tiền</td>
            </tr>
        </thead>

        <tbody>
            <?php 
            if(!empty($product) && isset($_SESSION['cart2'])){
            $total = 0;
            while($row = mysqli_fetch_array($product)) { ?>
            <tr>
                <td><a href="cart.php?action=delete&id=<?php echo $row['id']?>"><i class="fa-regular fa-trash-can"></i></a></td>
                <td><img src="images/<?php echo $row['image'];?>" alt=""></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo number_format($row['price'], 0, ".", ","); ?></td>
<!-- số lượng -->
                <td><input type="number" min=0 max=<?php echo $row['amount'];?> name="quantity[<?php echo $row['id'];?>]" class="w-50 pl-1" value="<?= $_SESSION['cart2'][$row['id']]?>"></td>
<!-- total -->
                <td><?php echo number_format($row['price'] * $_SESSION['cart2'][$row['id']], 0, ".", ",")?></td>
            </tr>
         <?php   
        $total += $row['price'] * $_SESSION['cart2'][$row['id']];
        
        
        }  ?>
        
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                <td><?php echo number_format($total, 0, ".", ","); ?></td>
                <td>
               
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="padding-top:15px;">
                <button type="submit" name="update_click" id="update_click" class="btn btn-outline-primary">Cập nhật</button>
                </td>
            </tr>
        <?php } ?>
  

        </tbody>
    </table>
    <?php if(!empty($error)) { ?>
    <div class="alert alert-danger" style="display:flex; justify-content:center" role="alert">
<?= $error ; ?>
</div>
<?php }else if(!empty($success)){?>
    <div class="alert alert-primary" style="display:flex; justify-content:center" role="alert">
    <?php echo $success;?>
    <!-- <a href="printbill-u.php">Xem đơn hàng</a> -->
<?php
}?> 
</div>
        <div class="col-md-12 col-sm-12 " style="padding-top: 50px">
            <div class="x_title">
                <h2 align="center">Thông tin người nhận</h2>
            </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Họ tên người nhận</label>
            <input type="text" class="form-control" id="name" name="name" >
          </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputAddress">Địa chỉ</label>
          <input type="text" class="form-control" id="address" name="address">
        </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Số điện thoại</label>
            <input type="text" class="form-control" id="phone" name="phone">
          </div>
        </div>

        <div class="form-row">
        <button type="submit" name="order_click" class="btn btn-primary" align="center">Đặt hàng</button>
        </div>
    </form>
</section>
</center>  
</main>




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  <!-- slide bar -->
<script src="js/bootstrap2.bundle.min.js"></script>
<script src="js/sidebars.js"></script>

</body>
</html>