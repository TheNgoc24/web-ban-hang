<?php
session_start();
?>
<?php
$email = $_POST['email'];
$password = $_POST['password'];
if(isset($_POST['remember'])){
  $remember = true;
}else {
  $remember = false;
}

$connect = mysqli_connect('localhost','root','','lab04');
$sql = "select * from customers
where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($result); //lay tt khach hang 
if($number_rows == 1){
  echo "Dang nhap thanh cong ";
    session_start();
    $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['username'] = $each['username'];
 if($remember){
  $token = uniqid('username', true);
  $sql = "update customers
  set token = '$token' where id = '$id'";
  mysqli_query($connect, $sql);
  setcookie('remember', $token, time() + 86400); //86400 = 1 ngay
 }
 header('location:index.php');
 exit;
}else
echo "Dang nhap that bai";
?>
