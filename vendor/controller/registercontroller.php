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
              if(strlen($sdt) != 10){
                echo '<center class="alert alert-danger"> Số Điện Thoại Phải là 10 Số </center>';
                }
                else{
                include_once('config/db_data.php');
                $sql = "INSERT INTO khachhang(TenKH,Email,MatKhau,DiaChi,DienThoai,LoaiTV) VALUES('$tenkh', '$email', '$mk', '$diachi', '$sdt', '2' );";
                $query = mysqli_query($conn,$sql);
                echo '<center class="alert alert-danger"> đăng kí thành công</center>';
                }
          }
      }
    }
  }
}