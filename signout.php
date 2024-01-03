<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['username']);
setcookie('remember',null,-1);
header('location:index.php');
?>
//unset = xoa bo nho tren sever