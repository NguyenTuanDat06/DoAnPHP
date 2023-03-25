<?php
include_once 'config/db_data.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Web</title>

<link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="public/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pignose css -->
<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="public/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="public/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="public/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="public/js/jquery.easing.min.js"></script>
</head>
<body>
<?php
if(isset($_SESSION['email']) && $_SESSION['email']!=""){
	echo '<div class="header">
			<div class="container">
			<ul>
				<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a>Xin Chào : '.$_SESSION['email'].'</a></li>
				<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href ="index.php?act=thoat">Thoát</a></li>
			</ul>
			</div>
		</div>';
	

}
else{
	?>
<!-- header -->
<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="login.php?act=login">Đăng Nhập</a></li>
			<li><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span><a href="index.php?act=register">Đăng Kí</a></li>
			<li><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span><a href="#">Quên Mật Khẩu</a></li>

		</ul>
	</div>
</div>
<?php } ?>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index"><img src="public/images/logo1.png"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form>
				<div class="search">
					<input type="search" value="Tìm Kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option >Tất Cả Sản Phẩm</option>
						<option >Thức Ăn Cho Chó</option>   
                        <option >Dụng Cụ Cho Chó</option>  
						<option >Thức Ăn Cho Mèo</option>
						<option >Dụng Cụ Cho Mèo</option>
					</select>
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a class="fb" ></a></li>
				<li><a class="twi" ></a></li>
				<li><a class="insta" ></a></li>
				<li><a class="you" ></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
                    <li class=" menu__item"><a class="menu__link" href="index.php">Trang Chủ</a></li>
					<li class=" menu__item"><a class="menu__link" href="index.php?act=fooddog">Thức Ăn Chó</a></li>
					<li class=" menu__item"><a class="menu__link" href="index.php?act=pkdog">Dụng Cụ chó</a></li>
					<li class=" menu__item"><a class="menu__link" href="index.php?act=foodcat">Thức Ăn Mèo</a></li>
					<li class=" menu__item"><a class="menu__link" href="index.php?act=pkmeo">Dụng Cụ Mèo</a></li>
					<li class=" menu__item"><a class="menu__link" href="#">Giới Thiệu</a></li>
					<li class=" menu__item"><a class="menu__link" href="#">Liên Hệ</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="#">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> Sản Phẩm)</div>
							</h3>
						</a>
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
</body>
</html>
