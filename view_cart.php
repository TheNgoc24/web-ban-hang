 <?php
session_start();
$cart = $_SESSION['cart'];
$sum = 0;
if(empty($cart)){
    header('location:index.php?error=Gio hang trong');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" width="100%">
    <tr>
        <th>Ảnh </th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Tổng tiền</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($cart as $id => $each) : ?>
        <tr>
            <td><img height='100' src="admin/products/photos/<?php echo $each['photo'] ?>" > </td>
            <td><?php echo $each['name'] ?></td>
            <td><?php echo $each['price'] ?></td>
            <td>
<a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre">
        -
</a>
                <?php echo $each['soluong'] ?>
 <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre">
        +
</a>
</td>
              <td>
                <!--  -->
            <?php
$result =  $each['price'] * $each['soluong'];
        echo $result;
        $sum += $result;
             ?>
         </td>
            <td>
<a href="delete_from_cart.php?id=<?php echo $id ?>">
          x
 </a>
    </td>
        </tr>
        <?php endforeach ?>
</table>
<h1>Tổng tiền cẩn thanh toán là $
    <?php echo $sum ?>
</h1>
<?php
$id = $_SESSION['id'];
$connect = mysqli_connect('localhost','root','','lab04');
$sql = "select * from customers
where
id = '$id'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?>
<form action="process_checkout.php" method="post">
<br>
     Tên người nhận
     <input type="text" name="name_receiver" value="<?php echo $each['username'] ?>" >
<br>
    Số điện thoại
<input type="text" name="phone_receiver" value="<?php echo $each['phonenumber'] ?>">
<br>
    Địa chỉ người nhận
<input type="text" name="address_receiver" value="<?php echo $each['address'] ?>">
<br>
<button type="submit">Đặt hàng</button>
</form>
</body>
</html>