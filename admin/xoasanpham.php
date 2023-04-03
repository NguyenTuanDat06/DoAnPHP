<?php
session_start();
$idsp = $_GET['idsp'];
if(isset($idsp)){
include_once '../config/db_data.php';
$sql = " DELETE FROM thucan WHERE MaThucAn = $idsp";
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
                                <button><a href="adminlayout.php?act=dsSP">Quay Lại</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                </div>';
            }
?>