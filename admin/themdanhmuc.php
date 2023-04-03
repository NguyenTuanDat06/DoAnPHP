<?php
include_once '../config/db_data.php';
    if(isset($_POST['submit'])){
        $tdm = $_POST['ten_dm'];
        if(isset($tdm)){
            $sql = " INSERT INTO theloai(TenLoai) VALUES('$tdm')";
            $query = mysqli_query($conn,$sql);
            echo '<div class="wrapper">
            <div class="content-page">
                 <div class="container-fluid add-form-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                <center class="alert alert-danger"> thêm thành công</center>
                                <button><a href="adminlayout.php?act=dsloaiSP">Quay Lại</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                </div>';
    }
}
?>
<div class="wrapper">
<div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Thêm Loại Sản Phẩm</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" method="post">
                            <div class="row">                                
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label>Tên Sản Phẩm</label>
                                        <input name="ten_dm" type="text" class="form-control" placeholder="Nhập Tên Sản Phẩm" required="">
                                    </div>
                                </div>                                                               
                            </div>                            
                            <button name="submit" class="btn btn-primary mr-2">Thêm</button>
                            <button type="reset" class="btn btn-danger">Làm Mới </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
    