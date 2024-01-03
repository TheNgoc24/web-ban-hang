<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include '../check_admin.php';
    require '../menu.php';
   $connect = mysqli_connect('localhost','root','','lab04');
    $sql = "select * from manufacturers";
    $result = mysqli_query($connect, $sql);
    ?>
    <form action="process_insert.php" method="post" enctype="multipart/form-data">
        Tên
        <input type="text" name="name">
        <br>
        Ảnh
       <input type="file" name="photo">
       <br>
        Giá
        <input type="number" name="price">
        <br>
        Mô tả
        <textarea name="description" cols="30" rows="10"></textarea>
        <br>
        Nhà sản xuất
        <select name="manufacturer_id">
            <?php foreach ($result as $each): ?>
         <option value="<?php echo $each['id'] ?>">
    <?php echo $each['name'] ?>
        </option>
<?php endforeach ?>
       </select> 
        <br>
        <button>Thêm</button>
</body>
</html>