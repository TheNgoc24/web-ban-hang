<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   include '../menu.php';
   include '../check_admin_real.php';
    ?>

    <form action="process_insert.php" method="post">
        Tên
        <input type="text" name="name">
        <br>
        Địa chỉ
       <textarea name="address" cols="30" rows="5"></textarea>
        <br>
        Số điện thoại
        <input type="number" name="phone">
        <br>
        Ảnh
        <input type="text" name="photo">
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>