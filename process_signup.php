<?php
//$id = $_GET['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$connect = mysqli_connect('localhost','root','','lab04');
$sql = "select count(*) from customers
where email = '$email'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_fetch_array($result,)['count(*)'];
if($number_rows == 1){
    header ('location:signup.php?error=Email đã được đăng kí');
    exit;
}
$sql = "insert into customers(username,email,password,phonenumber,address)
values('$username','$email','$password','$phonenumber','$address')";
mysqli_query($connect, $sql);
//
$sql = "select id from customers
where email = '$email'";
$result = mysqli_query($connect, $sql);
$id = mysqli_fetch_array($result)['id'];
session_start();
$_SESSION['id'] = $id;
$_SESSION['username'] = $username;
mysqli_close($connect);