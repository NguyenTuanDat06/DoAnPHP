<?php
include_once "header.php";
?>
<?php
ob_start();
include_once 'config/db_data.php';
if (isset($_POST['submit'])){
    $tenkh = $_POST['tenkh'];
    $email = $_POST['email'];
    $mk = $_POST['psw'];
    $xnmk = $_POST['psw-re'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    if(isset($tenkh) && isset($email) && isset($mk) && isset($xnmk)&& isset($diachi) && isset($sdt)){
        echo '<center class="alert alert-danger"> Không Được Để Trống </center>'; 
        if($mk != $xnmk)
        {
			    echo '<center class="alert alert-danger"> Mật Khẩu Xác Nhận Không Khớp </center>'; 
        }
        else{
          if(isset($email)){
            $sql = " SELECT * FROM khachhang WHERE Email='$email'";
            $query = mysqli_query($conn,$sql);
            $rows = mysqli_num_rows($query);
            if($rows>0){
              echo '<center class="alert alert-danger"> tài khoản Email đã tồn tại </center>';
            }
            else{
              if(count($sdt) != 10){
                echo '<center class="alert alert-danger"> Số Điện Thoại Phải là 10 Số </center>';
                }
                else{
                include_once('config/db_data.php');
                $sql = "INSERT INTO khachhang(TenKH,Email,MatKhau,DiaChi,DienThoai,LoaiTV) VALUES('$tenkh', '$email', '$mk', '$diachi', '$sdt', '2' );";
                $query = mysqli_query($conn,$sql);
                header('location: index.php');
                }
          }
      }
    }
  }
}
    ?>

<link href="public/css/style2.css" rel="stylesheet"/>
<form action="register.php" method="post" >
   <div class="container">
     <h1>Đăng Ký</h1>
     <p>Xin hãy nhập biểu mẫu bên dưới để đăng ký tài khoản</p>
     <hr>
    <label><b>Nhập Họ Tên</b></label>
     <input type="text" name="tenkh" >
    <label><b>Nhập Email</b></label>
     <input type="text" name="email" >
    <label><b>Nhập mật khẩu</b></label>
     <input type="password" name="psw" >
    <label><b>Xác Nhận Mật Khẩu</b></label>
     <input type="password" name="psw-re" >
    <label><b>Nhập Địa Chỉ</b></label>
     <input type="text" name="diachi" >
    <label><b>Nhập Số Điện Thoại</b></label>
     <input type="text" name="sdt" >
    <div class="clearfix">
       <button name ="submit" class="signupbtn">Đăng Ký</button>
     </div>
   </div>
 </form>

 <?php
        include_once "footer.php";
?>