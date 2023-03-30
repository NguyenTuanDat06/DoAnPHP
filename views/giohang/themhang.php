<?php
session_start();
$id = $_GET['idfood'];

if(isset($_SESSION['giohang'][$id])){
    $_SESSION['giohang'][$id]=$_SESSION['giohang'][$id]+1;
}
else{
    $_SESSION['giohang'][$id] = 1;
}

header('Location:../../index.php?act=giohang');
?>