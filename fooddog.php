<?php
include 'config/db_data.php';
$sql = "SELECT * From thucan Where MaLoai = 1";
$query = mysqli_query($conn,$sql);
?>
<div class="page-head">
	<div class="container">
		<h3>Thức Ăn Cho Chó</h3>
	</div>
</div>
<?php 
    while($row = mysqli_fetch_array($query))
    {
    $img = $row['Hinh'];
?>
<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<?php echo "<img width=100 height=500 src=$img>" ?>	
					</div>
					<div class="item-info-product">
						<h4 > <?php echo  $row['TenThucAn']; ?></h4>
						<div class="info-product-price">
							<span class="item_price">
                                <?php echo $row['GiaBan']; ?>
                            </span>
							<br> <h4>số lượng</h4>
                            <span class="item_price">
                              <?php  echo $row['SoLuongTon']; ?>
                            </span>
						</div>							
					</div>
				</div>
			</div>
            <?php
            }
            ?>