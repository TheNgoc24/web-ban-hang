<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Xin chao, <?php echo $_SESSION['username'] ?>
    <a href="signout.php">dang xuat</a>
</body>
</html>