<?php
session_start();
if(isset($_GET['idfood'])){
    $id = $_GET['idfood'];
    if($id == 0)
    {
        unset($_SESSION['giohang']);
    }else
    {
        unset($_SESSION['giohang'][$id]);
    }
}


header('Location:../../index.php?act=giohang');
?>