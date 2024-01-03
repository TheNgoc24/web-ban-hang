<?php
include '../check_admin.php';
$id = $_GET['id'];
$connect = mysqli_connect('localhost','root','','lab04');
$sql   = "delete from products where id = '$id'";
mysqli_query($connect, $sql);
mysqli_close($connect);