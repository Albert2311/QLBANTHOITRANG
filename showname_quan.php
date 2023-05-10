<div class="row" id="banchay">
  <!-- SẢN PHẨM 1 -->
  <?php 
  include_once("connection.php");
  if(isset($_GET['all'])){
    $result = mysqli_query($conn, "SELECT * FROM product WHERE type = 'Quần' " );
  }
 else{
  $result = mysqli_query($conn, "SELECT * FROM product WHERE name LIKE '%{$_GET['name']}%' AND type = 'Quần' " );
  }
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




