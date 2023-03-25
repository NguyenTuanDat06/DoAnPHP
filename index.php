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
                include_once "views/login.php";
                break;
            case 'thoat':
                unset($_SESSION['email']);
                unset($_SESSION['psw']);
                header('location:index.php');
                break;
            case 'register':
<<<<<<< HEAD
                include_once "views/register.php";
=======
                include_once "register.php";
>>>>>>> 13c5ad513d20018b0c73bd604b54f183d5eb09b4
                break;    
            case 'fooddog':
                include_once "views/fooddog.php";
                break;
            case 'foodcat':
                include_once "views/foodcat.php";
                break;
            case 'pkdog':
                include_once "views/pkdog.php";
                break;
            case 'pkmeo':
                include_once "views/pkmeo.php";
                break;
            case 'detail':
                include_once "detailfood.php";
                break;
<<<<<<< HEAD
=======
            case 'detail':
                include_once "detailfood.php";
                break;
>>>>>>> 13c5ad513d20018b0c73bd604b54f183d5eb09b4

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
