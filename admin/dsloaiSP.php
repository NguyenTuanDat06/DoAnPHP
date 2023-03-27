<?php
    include_once "adminlayout.php";
    include_once '../config/db_data.php';
        $sql = " SELECT * From theloai ";
        $query = mysqli_query($conn,$sql);
?>
    <div class="wrapper"><div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Danh Sách Loại Sản Phẩm</h4>
                    </div>
                    <a href="#" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Thêm Loại Sản Phẩm</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>Mã Loại</th>
                            <th>Tên Loại</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                    <?php 
    while($row = mysqli_fetch_array($query))
    {
?>
                        <tr>
                            <td><?php echo $row['MaLoai']; ?></td>
                            <td><?php echo $row['TenLoai']; ?></td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="#"><i class="ri-pencil-line mr-0"></i></a>
                                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php
    }
      ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
      </div>

