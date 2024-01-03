<?php
session_start();
$name_receiver = $_POST['name_receiver'];
$phone_receiver = $_POST['phone_receiver'];
$address_receiver = $_POST['address_receiver'];
$cart = $_SESSION['cart'];
$total = 0;
foreach($cart as $each){
    $total += $each['soluong'] * $each['price'];
}
$customer_id = $_SESSION['id'];
$status = 0; // trạng thái đặt hàng -- mới đặt
$connect = mysqli_connect('localhost','root','','lab04');
$sql = "insert into orders(name_receiver,phone_receiver,address_receiver,customer_id,status,total)
value('$name_receiver','$phone_receiver','$address_receiver','$customer_id','$status','$total')";
mysqli_query($connect, $sql);
$sql = "select max(id) from orders where customer_id = '$customer_id'";
$result = mysqli_query($connect, $sql);
$order_id = mysqli_fetch_array($result)['max(id)'];
foreach($cart as $product_id   => $each){
    $quantity = $each['soluong'];
    $sql = "insert into orders_detail(quantity,order_id,product_id)
    values('$quantity','$order_id','$product_id')";
    mysqli_query($connect, $sql);
}
mysqli_close($connect);
unset($_SESSION['cart']);
