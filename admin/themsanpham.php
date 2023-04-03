<?php
include_once '../config/db_data.php';
$sqldm = " SELECT * FROM theloai";
$querydm = mysqli_query($conn,$sqldm);

if(isset($_POST['submit'])){
    $tensp = $_POST['tensanpham'];
    $loaisp = $_POST['loaisanpham'];
    $mota = $_POST['mota'];
    $giaban = $_POST['giaban'];
    $soluong = $_POST['soluong'];
    $hinh = $_POST['pic'];
if(isset($tensp) && isset($loaisp) && isset($mota) && isset($giaban) && isset($soluong) && isset($hinh)){
    $sql = "INSERT INTO thucan(MaLoai,TenThucAn,MoTa,Hinh,GiaBan,SoLuongTon) VALUES ('$loaisp','$tensp','$mota','/public/images/$hinh','$giaban','$soluong');";
    $query = mysqli_query($conn,$sql);
    echo '<div class="wrapper">
            <div class="content-page">
                 <div class="container-fluid add-form-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                <center class="alert alert-danger"> thêm thành công</center>
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
                                            <option value="<?php echo $rowdm['MaLoai']; ?>"> <?php echo $rowdm['TenLoai']; ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div> 
                                </div>  
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label>Tên Sản Phẩm</label>
                                        <input type="text" name="tensanpham" class="form-control" data-errors="Please Enter Name." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Giá Bán</label>
                                        <input type="text" name="giaban" class="form-control" data-errors="Please Enter Price." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">                                    
                                    <div class="form-group">
                                        <label>Số Lượng</label>
                                        <input type="text" name="soluong" class="form-control" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hình Ảnh</label>
                                        <input type="file" class="form-control image-file" name="pic">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô Tả</label>
                                        <textarea name="mota" class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>                            
                            <button name="submit" type="submit" class="btn btn-primary mr-2">Thêm Mới Sản Phẩm</button>
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