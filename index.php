<?php
ob_start();
session_start();
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
<!-- header -->
    <?php
        include_once "views/share/header.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'login':
                include_once "login.php";
                break;
            case 'thoat':
                unset($_SESSION['email']);
                unset($_SESSION['psw']);
                unset($_SESSION['TenKH']);
                header('location:index.php');
                break;
            case 'register':
                include_once "register.php";
                break;    
            case 'listfood':
                include_once "views/listfood.php";
                break;
            case 'detail':
                include_once "views/detailfood.php";
                break;
            case 'giohang':
                include_once "views/giohang/giohang.php";
                break;
            case 'muahang':
                include_once "views/giohang/muahang.php";
                break; 
            case 'hoanthanh':
                include_once "views/giohang/hoanthanh.php";
                break;      
            default:
            include_once "views/home.php";
            break;
        }
    }
    else{
        include_once "views/home.php";
    }
        include_once "views/share/footer.php";
    ?>

<!-- //footer -->
</body>
</html>


