<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="images/ava.png">
    <link rel="stylesheet" href="css/cart.css">
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
    }cccc
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
</style>
<body>

<?php include 'header.php'?>
<?php include 'connection.php';
if(!isset($_SESSION['cart1'])){
    $_SESSION ['cart1'] = array();
}
$error = false;
$success = false;
if(isset($_GET['action'])){

    switch($_GET['action']){
        case "add":
           foreach($_POST['quantity'] as $id => $quantity){
               $_SESSION['cart1']['$id']= $quantity;
           }
            break;
        case "delete":
            if(isset($_GET['id'])){
                unset($_SESSION['cart1'][$_GET['id']]);
            }
                // header('location: cart.php');
            break;
        case "submit":
           if(isset($_POST['update_click'])){
                update_cart();
           } elseif ($_POST['order_click']){
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
                // var_dump($_POST);exit;
                if($error == false && !empty($_POST['quantity'])){ //lưu vào data
                    echo "fff";
                }
           }
            break;
    }
}
if(!empty($_SESSION['cart1'])){
    // var_dump("SELECT * FROM product WHERE id IN (".implode(",",array_keys($_SESSION['cart'])).")");exit;
    $product = mysqli_query($conn, "SELECT * FROM product WHERE id IN (".implode(",",array_keys($_SESSION['cart1'])).")");
    // var_dump($product);exit;
}
?>
    
<section id="blog-home" class="pt-5 mt-5 container3">
    <p class="font-weight-bold pt-5">Giỏ hàng</p>
    <hr>
</section>

<section id="cart-container" class="container3 my-5" style="align-items:center">

<form id="cart-form" action="cart2.php?action=submit" method="post">
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
            if(!empty($product)){
                $total = 0;
            while($row = mysqli_fetch_array($product)) { ?>
            <tr>
                <td><a href="cart2.php?action=delete&id=<?php echo $row['id']?>"><i class="fa-regular fa-trash-can"></i></a></td>
                <td><img src="images/<?php echo $row['image'];?>" alt=""></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo number_format($row['price'], 0, ".", ","); ?></td>
                <td><input type="number" name="quantity[<?php echo $row['id'];?>]" class="w-25 pl-1" value="<?= $_SESSION['cart1'][$row['id']]?>"></td>
                <td><?php echo number_format($row['price'] * $_SESSION['cart1'][$row['id']], 0, ".", ",")?></td>
            </tr>
         <?php   
        $total = $total + $row['price'] * $_SESSION['cart1'][$row['id']];
        
        
        }  ?>
        
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                <td><?php echo number_format($total, 0, ".", ","); ?></td>
                <td>
                <button type="submit" name="update_click" id="update_click" class="btn btn-outline-primary">Cập nhật</button>
                </td>
            </tr>
        <?php } ?>
  

        </tbody>
    </table>
    <?php if(!empty($error)) { ?>
    <div class="alert alert-primary" style="display:flex; justify-content:center" role="alert">
    <?= $error ; }?>
</div>
        <div class="col-md-12 col-sm-12 " style="padding-top: 50px">
            <div class="x_title">
                    <h2 align="center">Thông tin người nhận</h2>
            </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Họ tên người nhận</label>
            <input type="text" class="form-control" id="name" name="name">
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





  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <?php include 'footer.php' ?>
</body>
</html>