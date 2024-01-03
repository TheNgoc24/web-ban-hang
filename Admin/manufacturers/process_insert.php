<?php
include '../check_admin_real.php';
if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['photo'])){
    header('location:form_insert.php?error= Phải điển đầy đủ thông tin');
}
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$photo  = $_POST['photo'];
$connect = mysqli_connect('localhost','root','','lab04');
$sql = "insert into manufacturers(name,address,phone,photo)
values('$name','$address','$phone','$photo')";
mysqli_query($connect, $sql);
header('location:index.php?success=Thành công ');
mysqli_close($connect);
?>