<?php
session_start();
$iddm = $_GET['iddm'];
if(isset($iddm)){
include_once '../config/db_data.php';
$sql = " DELETE FROM theloai WHERE MaLoai = $iddm";
$query = mysqli_query($conn,$sql);
echo '
        <div class="wrapper">
            <div class="content-page">
                 <div class="container-fluid add-form-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                <center class="alert alert-danger"> Xóa Thành Công</center>
                                <button><a href="adminlayout.php?act=dsloaiSP">Quay Lại</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                </div>';
            }
?>