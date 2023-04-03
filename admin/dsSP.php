<script>
    function Xoadanhmuc(){
        var conf = confirm("bạn có muốn xóa không ?");
        return conf;
    }
</script>
<?php
    include_once "adminlayout.php";
    include_once '../config/db_data.php';
        $sql = " SELECT * From thucan ";
        $query = mysqli_query($conn,$sql);
?>
<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 1;
}
$rowsPerPage = 5;
$perRow = $page*$rowsPerPage - $rowsPerPage;
$sql = "SELECT * FROM thucan ORDER BY MaThucAn ASC LIMIT $perRow,$rowsPerPage";
$query = mysqli_query($conn,$sql);
$totalRows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM thucan"));
$totalPages =ceil($totalRows /$rowsPerPage);
$listPage = "";
for($i=1;$i<=$totalPages;$i++){
    if($page ==1){
        $listPage.='<li class="active"><a href="adminlayout.php?act=dsSP&page='.$i.'">'.$i.'</a></li>';
    }
    else{
        $listPage.='<li><a href="adminlayout.php?act=dsSP&page='.$i.'">'.$i.'</a></li>';
    }
}
?>
    <div class="wrapper"><div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Danh Sách Sản Phẩm</h4>
                    </div>
                    <a href="adminlayout.php?act=themsanpham" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Thêm Sản Phẩm</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                <table class="data-table table mb-0 tbl-server-info">
                    <thead class="bg-white text-uppercase">
                        <tr class="ligth ligth-data">
                            <th>Mã Loại</th>
                            <th>Tên Loại</th>
                            <th>Hình</th>
                            <th>Giá Bán</th>
                            <th>Số Lượng tồn</th>
                            <th>Acction</th>
                        </tr>
                    </thead>
                    <tbody class="ligth-body">
                    <?php 
    while($row = mysqli_fetch_array($query))
    {
        $img = $row['Hinh'];
?>
                        <tr>
                            <td><?php echo $row['MaThucAn']; ?></td>
                            <td><?php echo $row['TenThucAn']; ?></td>
                            <td><?php echo "<img width=100 height=100 src=$img>" ?>	</td>
                            <td><?php echo $row['GiaBan']; ?></td>
                            <td><?php echo $row['SoLuongTon']; ?></td>
                            <td>
                                <div class="d-flex align-items-center list-action">
                                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                                        href="adminlayout.php?act=suasp&idsp=<?php echo $row['MaThucAn'];?>"><i class="ri-pencil-line mr-0"></i></a>
                                    <a onclick="return Xoadanhmuc();" class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                                        href="adminlayout.php?act=xoasp&idsp=<?php echo $row['MaThucAn'];?>"><i class="ri-delete-bin-line mr-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php
    }
      ?>
                    </tbody>
                </table>
                <ul class="pagination" style="float: right;">
                    <?php
                        echo $listPage;
                        ?>
                </ul>
                </div>
            </div>
        </div>
    </div>
      </div>

