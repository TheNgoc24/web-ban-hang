<?php
include '../check_admin_real.php';
if(empty($_POST['id'])){
    header('location:index.php?error= Phải truyền mà để sửa');
}
$id = $_POST['id'];
if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['photo'])){
    header("location:form_update.php?id=$id&error= Phải điển đầy đủ thông tin"  );
    exit;
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$photo  = $_POST['photo'];
$connect = mysqli_connect('localhost','root','','lab04');
$sql = "update manufacturers
set
name = '$name',
address = '$address',
phone = '$phone',
photo = '$photo'
where
id = '$id'
";
mysqli_query($connect, $sql);
$error = mysqli_error($connect);
if(empty($error)){
    header('location:index.php?success= Sửa thành công');
} else {
    header("location:form_update.php?id=$id&error = Lỗi truy vấn");
}

mysqli_close($connect);

