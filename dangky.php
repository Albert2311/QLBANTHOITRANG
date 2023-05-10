<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<body lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--FILE-->
    <link rel="stylesheet" href="css/dang-ky.css">
	<link rel="shortcut icon" href="images/ava.png">
  <!-- ICON -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--icon-->
  <script src="https://kit.fontawesome.com/ed720e4b54.js" crossorigin="anonymous"></script> <!--THEM ICON!!!--> 
  <script src="https://use.fontawesome.com/9ea6af6279.js"></script>

  <!-- THƯ VIỆN jQuery-->
 

  <title>ĐĂNG KÝ</title>
</head>
<style>
	.container{
		height: -webkit-fill-available;
	}
</style>
<body>

	<div class="container">
	
		<div class="login-content">
		<form action="dangky.php" method="POST" autocomplete="off">
        <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert">
					<?php echo $displayErrors; ?>
					
				</div>
                <?php
                }
            }
            ?> 
				<img src="images/login-icon.png">
				<h2 class="title">ĐĂNG KÝ</h2>
				<!-- HỌ TÊN -->
				<div class="input-hoten">
				<!-- HỌ -->	
				<div class="input-div2 one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
							<h5>Họ</h5>
							<input type="text" name="fname" class="input" required>
					</div>
				 </div>
				 <!-- TÊN -->
				 <div class="input-div2 one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
							<h5>Tên</h5>
							<input type="text" name="lname" class="input" required>
					</div>
				 </div>
				</div>
				 <!-- EMAIL -->
           		<div class="input-div one">
           		   <div class="i">
					  <i class="fa-solid fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" name="email" class="input" required>
           		   </div>
           		</div>
				   <!-- PASSWORD -->
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mật khẩu</h5>
           		    	<input type="password" name="password" class="input" required>
            	   </div>
            	</div>
				<!-- NHẬP LẠI PASSWORD -->
				<div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Nhập lại mật khẩu</h5>
						 <input type="password" name="confirmPassword" class="input" required>
				 	</div>
			    </div>
			<div class="radio">
			<input type="radio" name="gender" id="Nam" value="Nam" required><label for="Nam">Nam</label>
            <input type="radio" name="gender" id="Nữ" value="Nữ" required><label for="Nữ">Nữ</label>
            <input type="radio" name="gender" id="Khác" value="Khác" required><label for="Khác">Khác</label><br>
            </div>
				<a href="dangnhap.php">Đã có tài khoản?</a>
            	<input type="submit" name="signup" class="btn" value="Đăng ký">
			
            </form>
        </div>
    </div>




<script>
    const inputs = document.querySelectorAll(".input");
function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}
function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
</script>
</body>
</html>