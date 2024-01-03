<?php
session_start();
if(isset($_COOKIE['remember'])){
  $token = $_COOKIE['remember'];
  $connect = mysqli_connect('localhost','root','','lab04');
  $sql = "select * from customers
  where token = '$token' limit 1";
  $result = mysqli_query($connect, $sql);
  $number_rows = mysqli_num_rows($result);
  if($number_rows == 1 ){ 
    $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['username'] = $each['username'];
  }

}
if(isset($_SESSION['id'])){
  header('location:index.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <?php
  if(isset($_GET['error'])){
    echo $_GET['error'];
  }
  ?>
  <div class="wapper">
      <form action="process_signin.php" method="post">
        <h1>login</h1>
        <div class="input-box">
          <input type="text" placeholder="email" name="email" required />
          <box-icon type="solid" name="email"></box-icon>
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" name="password" required />
          <box-icon name="lock-alt" type="solid"></box-icon>
        </div>
        <div class="remember-forgot">
          Remember me
      <input type="checkbox" name="remember">
           <br>
          <a href="forgot_password.php">Forgot password?</a>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
          <p>Don't have an account? <a href="signup.php">Register</a></p>
        </div>
      </form>
  </body>
</html>