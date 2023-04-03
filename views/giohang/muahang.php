<?php
    if(isset($_SESSION['giohang'])){
        $arrid = array();
        foreach($_SESSION['giohang'] as $id => $sl){
            $arrid[]=$id;
        }
        $strid = implode(',',$arrid);
        $sql = "SELECT * From thucan Where MaThucAn IN($strid) ORDER BY MaThucAn DESC";
        $query = mysqli_query($conn,$sql);
?>
<div class="page-head">
	<div class="container">
		<h3>Xác Nhận Đơn Hàng</h3>
	</div>
</div>
<form id="giohang" method = "post">
<div class="checkout">
	<div class="container">
		<h3>Giỏ Hàng Của Bạn</h3>
		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>Tên Sản Phẩm</th>
						<th>Hình Ảnh</th>
						<th>Giá Bán</th>
						<th>Số Lượng</th>
						<th>Giá Tổng Tiền</th>
					</tr>
				</thead>
				<?php
					$totalPriceAll = 0;
					while($row=mysqli_fetch_array($query)){
						$totalPrice = $row['GiaBan']*$_SESSION['giohang'][$row['MaThucAn']];
						$img = $row['Hinh'];
				?>
				<tr class="rem1">
						<td class="invert"><?php echo  $row['TenThucAn']; ?></td>
						<td class="invert-image"><?php echo "<img width=50 height=50 src=$img>" ?></td>
						<td class="invert"><?php echo  $row['GiaBan']; ?></td>
						<td class="invert">
							 <div class="quantity">                           
								<input name="sl[<?php echo $row['MaThucAn']?>]" type="number" class="entry value text-center" value="<?php echo  $_SESSION['giohang'][$row['MaThucAn']] ?>"></input>
							</div>
						</td>
						<td class="invert"><?php echo  $totalPrice; ?></td>
				</tr>
					<?php
                    $totalPriceAll += $totalPrice;
					}?>
                <tr >
						<td>Tổng Giá Trị Đơn Hàng</td>
                        <td colspan="3"></td>
                        <td><b><span><?php echo $totalPriceAll; ?></span></b></td>
				</tr>    
			</table>			
		</div>
	</div>
</div>
</form>	
<?php

?>
<div id="custom-form" class="container ">
    <form method="post">
        <div class="form-group">
            <label>Tên Khách Hàng</label>
            <input required type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input required type="text" class="form-control" name="mail">
        </div>
        <div class="form-group">
            <label>Số Điện Thoại</label>
            <input required type="text" class="form-control" name="sdt">
        </div>
        <div class="form-group">
            <label>Đỉa chỉ nhận hàng</label>
            <input required type="text" class="form-control" name="add">
        </div>
        <button class="btn btn-default" name="submit"><a href="index.php?act=hoanthanh">Mua Hang</a></button>
    </form>
</div>
<?php } ?>