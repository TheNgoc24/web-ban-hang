<?php
session_start();
$id = $_GET['id'];
$type = $_GET['type'];
if($type === 'decre'){
    if($_SESSION['cart'][$id]['soluong'] > 1) {
        $_SESSION['cart'][$id]['soluong']--;
    }else {
        unset($_SESSION['cart'][$id]);
    }
}else{
    $_SESSION['cart'][$id]['soluong']++;
}
header('location:view_cart.php');