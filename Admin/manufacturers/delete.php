<?php
include '../check_admin_real.php';
if(empty($_GET['id'])){
    header('location:index.php?error= Phải truyền mã để xóa ');
    exit;
}
$id = $_GET['id'];
$connect = mysqli_connect('localhost','root','','lab04');
$sql = "delete from manufacturers
where
id = '$id'
";
mysqli_query($connect, $sql);
$error = mysqli_error($connect);
mysqli_close($connect);
if(empty($error)){
    header('location:index.php?success= Xóa thành công '); 
}
?>