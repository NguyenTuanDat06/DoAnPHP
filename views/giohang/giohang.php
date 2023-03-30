<?php
    if(isset($_SESSION['giohang'])){
		if(isset($_POST['sl'])){
			foreach($_POST['sl'] as $id => $sl){
				if($sl == 0){
					unset($_SESSION['giohang'][$id]);
				}else
					if($sl>0){
						$_SESSION['giohang'][$id] = $sl;
				}
			}
		}

        $arrid = array();
        foreach($_SESSION['giohang'] as $id => $so_luong){
            $arrid[]=$id;
        }
        $strid = implode(',',$arrid);
        $sql = "SELECT * From thucan Where MaThucAn IN($strid) ORDER BY MaThucAn DESC";
        $query = mysqli_query($conn,$sql);
?>
<div class="page-head">
	<div class="container">
		<h3>Check Out</h3>
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
						<th>Xóa</th>
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
						<td class="invert-closeb">
							<div class="rem">
								<a href="views/giohang/xoahang.php?idfood=<?php echo $row['MaThucAn'] ?>">Xóa</a>
							</div>
						</td>
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
					}?>
			</table>			
		</div>
		<button><a onclick="document.getElementById('giohang').submit();" href="#">Cập Nhập Giỏ Hàng</a></button> 
		<button><a href="views/giohang/xoahang.php?idfood=0">Xóa Hết Giỏ Hàng</a></button>
	</div>
</div>
</form>	
<?php
}else
{
    echo '<script>alert("Giỏ Hàng Bạn Trống")</script>';
}?>