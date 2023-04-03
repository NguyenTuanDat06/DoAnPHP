<?php
include_once '../config/db_data.php';
$idsp = $_GET['idsp'];
$sqldm = " SELECT * FROM theloai";
$querydm = mysqli_query($conn,$sqldm);

$sql = "SELECT * FROM thucan WHERE MaThucAn = $idsp";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);

if(isset($_POST['submit'])){
    $tensp = $_POST['tensanpham'];
    $loaisp = $_POST['loaisanpham'];
    $mota = $_POST['mota'];
    $giaban = $_POST['giaban'];
    $soluong = $_POST['soluong'];
    $hinh = $_POST['pic'];
if(isset($tensp) && isset($loaisp) && isset($mota) && isset($giaban) && isset($soluong) && isset($hinh)){
    $sql = " UPDATE thucan SET MaLoai ='$loaisp',TenThucAn ='$tensp',MoTa ='$mota',Hinh ='/public/images/$hinh',GiaBan ='$giaban',SoLuongTon ='$soluong' WHERE MaThucAn = $idsp";
    $query = mysqli_query($conn,$sql);
    echo '<div class="wrapper">
            <div class="content-page">
                 <div class="container-fluid add-form-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                <center class="alert alert-danger"> Sửa thành công</center>
                                <button><a href="adminlayout.php?act=dsSP">Quay Lại</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                </div>';
}
}
?>
<div class="wrapper"><div class="content-page">
<div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Thêm Sản Phẩm</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Loại Sản Phẩm</label>
                                        <select name="loaisanpham" class="selectpicker form-control" data-style="py-0">
                                            <?php
                                            while($rowdm = mysqli_fetch_array($querydm)){
                                            ?>
                                            <option
                                                <?php
                                                    if($row['MaLoai']==$rowdm['MaLoai']){
                                                        echo 'selected = "selected"';
                                                    }
                                                ?>
                                             value="<?php echo $rowdm['MaLoai']; ?>"> <?php echo $rowdm['TenLoai']; ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div> 
                                </div>  
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Tên Sản Phẩm</label>
                                        <input type="text" name="tensanpham" value="<?php if(isset($_POST['TenThucAn'])){ echo $_POST['TenThucAn'];}else{echo $row['TenThucAn'];}?>" class="form-control" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Giá Bán</label>
                                        <input type="text" name="giaban" value="<?php if(isset($_POST['GiaBan'])){ echo $_POST['GiaBan'];}else{echo $row['GiaBan'];}?>" class="form-control" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label>Số Lượng</label>
                                        <input type="text" name="soluong" value="<?php if(isset($_POST['SoLuongTon'])){ echo $_POST['SoLuongTon'];}else{echo $row['SoLuongTon'];}?>" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hình Ảnh</label>
                                        <input type="file" class="form-control image-file" name="pic"  >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô Tả</label>
                                        <textarea name="mota" class="form-control" rows="4"><?php if(isset($_POST['MoTa'])){ echo $_POST['MoTa'];}else{echo $row['MoTa'];}?></textarea>
                                    </div>
                                </div>
                            </div>                            
                            <button name="submit" type="submit" class="btn btn-primary mr-2">Sửa Sản Phẩm</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
    </div>
        </div>