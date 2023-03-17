<?php
ob_start();
session_start();
include_once 'config/db_data.php';

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$mk = $_POST['psw'];

	if(isset($email) && isset($mk)){
		$sql = " SELECT * FROM khachhang WHERE Email='$email' AND MatKhau ='$mk'";
		$query = mysqli_query($conn,$sql);
		$rows = mysqli_num_rows($query);
		if($rows>0){
			$_SESSION["email"] = $email;
			$_SESSION["psw"] = $mk;
			header("Location: index.php");
		}
		else{
			echo '<center class="alert alert-danger"> tài khoản không tông tại hoặc bạn k có quyền truy cập </center>';
		}
	}
}
?>
    <?php
        include_once "header.php";
    ?>

<link href="public/css/style2.css" rel="stylesheet"/>
 <!-- header -->
<form action="login.php" method="post" >
   <div class="container">
     <h1>Đăng Nhập</h1>
     <p>Xin hãy nhập biểu mẫu bên dưới để đăng nhập</p>
     <hr>
    <label><b>Email</b></label>
     <input type="text" name="email" placeholder="Nhập Email" >
    <label><b>Mật Khẩu</b></label>
     <input type="password" name="psw" placeholder="Nhập Mật Khẩu">
    <div class="clearfix">
       <button name ="submit" class="signupbtn">Đăng Nhập</button>
     </div>
   </div>
 </form>

 <!-- footer -->
<?php
        include_once "footer.php";
    ?>



 