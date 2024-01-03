<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  if(isset($_GET['error'])){
    echo $_GET['error'];
  }
  ?>
<div class="wapper">
      <form action="process_signup.php" method="post">
        <h1>Đăng kí </h1>
        <div class="input-box">
          <input type="text" placeholder="email" name="email"  required />
          <box-icon type="solid" name="email"></box-icon>
        <div class="input-box">
          <input type="text" placeholder="username" name="username" required />
          <box-icon type="solid" name="user"></box-icon>
        </div>
        <div class="input-box">
          <input type="password" placeholder="password" name="password" required />
          <box-icon name="lock-alt" type="solid"></box-icon>
        </div>
        <div class="input-box">
          <input type="text" placeholder="phonenumber" name="phonenumber" required />
          <box-icon type="solid" name="phonenumber"></box-icon>
          <div class="input-box">
          <input type="text" placeholder="address" name="address" required />
          <box-icon type="solid" name="address"></box-icon>
          <br>
        <button type="submit" class="btn">Đăng kí</button>
      </form>
</body>
</html>