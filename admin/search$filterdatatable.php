<?php 
include_once("connection2.php"); 


$result = mysqli_query($conn, "SELECT * FROM product ORDER BY id DESC" );
mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--THEM ICON!!!-->
    <script src="https://kit.fontawesome.com/ed720e4b54.js" crossorigin="anonymous"></script>  
    <script src="https://use.fontawesome.com/9ea6af6279.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
  </head>
  <style>
  body{
  background: white;
}  
*{
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
  }
  body{
    align-content: center;
    padding:0;
    margin:0;
    overflow-x: hidden;
    position: relative;
    /* overflow: hidden; */
  }
  body{
    width:100%;
  }
  img{
    width:100%;
    height:100%;
  }
  .table thead th {
    vertical-align: middle;
    text-align: center;
  }
  .pagination-circle .page-item:first-child .page-link, .pagination-circle .page-item:last-child .page-link {
    border-radius: 0;
    border: 0;
      }
      .page-link:not(:disabled):not(.disabled) {
    cursor: pointer;
    border: 0;
    }
    .nav-sm ul.nav.child_menu li {
      display:none;
    }
    .page-link:hover {
        z-index: 2;
        color: #ffffff;
        text-decoration: none;
        background-color: #0080ff;
        border-color: #dee2e6;
    }
    .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4), .input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu), .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3), .input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
        height: 40px;
    }
    .top_search .form-control {
        border-radius: 8px 0px 0px 8px;
        /* height: 40px; */
    }
    .top_search .input-group-btn button {
        border-radius: 0px 8px 8px 0px;
        height: 40px;
    }
    .form{
      width:100%;
      display:flex;

    }
  </style>

  <body>
    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tên sản phẩm</th>
                          <th>Loại sản phẩm</th>
                          <th>Ngày tạo</th>
                          <th>Cập nhật</th>
                          <th>Giá bán</th>
                          <th>Số lượng</th>
                          <th>Màu</th>
                          <th>Size</th>
                          <th>Mô tả</th>
                          <th>Ảnh</th>
                          <th>Sửa</th>
                          <th>Xóa</th>
                        </tr>
                      </thead>


                      <tbody>
          
                       <?php 
                      while($row = mysqli_fetch_array($result)){
                        
                      ?>
                        <tr>
                          <td> <?= $row['id'] ?> </td>
                          <td><?= $row['name'] ?></td>
                          <td><?= $row['type'] ?></td>
                          <td><?= date('d/m/Y ', strtotime($row['create_at'])) ?></td>
                          <td><?= date('d/m/Y ') ?></td>
                          <td><?= number_format($row['price']) ?></td>
                          <td><?= $row['amount'] ?></td>
                          <td><?= $row['color'] ?></td>
                          <td><?= $row['size'] ?></td>
                          <td><?= $row['mota'] ?></td>
                          <td style="width:100px;">
                            <img src="../images/<?= $row['image']; ?>" />
                          </td>
                          <td>
                            <a href="edit.php?idsanpham=<?php echo $row['id'];?>">Sửa</a></td>
                          <td>
                          <a onclick = "return Del('<?php echo $row['name'];?>')"href="delete.php?idsanpham=<?php echo $row['id'];?>">Xóa</a></td>
                    
                        </tr><?php }?>
                        </tbody>
                    
                     
                          
                    </table>
					
					



    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js"></script>
    <!-- iCheck -->
    <script src="js/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>


  </body>
</html>