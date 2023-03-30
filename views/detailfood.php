<?php
include 'config/db_data.php';
$idsp = $_GET['idfood'];
$sql = "SELECT * From thucan where MaThucAn = $idsp";
$query = mysqli_query($conn,$sql);
?>
<div class="page-head">
	<div class="container">
		<h3>Chi Tiết Sản Phẩm</h3>
	</div>
</div>
<?php 
    while($row = mysqli_fetch_array($query))
    {
    $img = $row['Hinh'];
?>
<div>
<hr />
<dl class="dl-horizontal">
	<dt>
		<label class="control-label col-md-2" style="font-size :19px">Tên Thức Ăn</label>

	</dt>
	<dd>
		<h4 style="font-size: 18px;" > <?php echo  $row['TenThucAn']; ?></h4>
	</dd>
	<hr />
	<dt>
		<label class="control-label col-md-2" style="font-size :19px">Mô Tả</label>
	</dt>
	<dd>
	<h4 style="font-size: 18px;" > <?php  echo $row['MoTa']; ?> </h4>
	</dd>
	<hr />
	<dt>
		<label class="control-label col-md-2" style="font-size :19px">Hình Ảnh</label>
	</dt>
	<dd>
	<?php echo "<img width=500 height=500 src=$img>" ?>	
	</dd>
	<hr />
	<dt>
		<label class="control-label col-md-2" style="font-size :19px">Giá Bán</label>
	</dt>
	<dd>
	<h4 style="font-size: 18px;" > <?php  echo $row['GiaBan']; ?> </h4>
	</dd>
	<hr />
	<dt>
		<label class="control-label col-md-2" style="font-size :19px">Số lượng Còn :</label>
	</dt>
	<dd>
	<h4 style="font-size: 18px;" > <?php  echo $row['SoLuongTon']; ?> </h4>
	</dd>
	<hr />
	<button> <a href="#">Quay Lại</a></button>	
</dl>
<?php
	}
?>