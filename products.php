<link rel="stylesheet" href="css/products.css">      
<?php 
$connect = mysqli_connect('localhost','root','','lab04');
$sql = "select * from products";
$result = mysqli_query($connect, $sql);
?>
    <div id = "giua" >
        <?php foreach ( $result as $each): ?>
            <div class="cac_san_pham">
                <h1>
                    <?php echo $each['name'] ?>
                </h1>
                <img src="admin/products/photos/<?php echo $each['photo'] ?>" height="100">
                <p><?php echo $each['price'] ?>$</p>
            <a href="product.php?id=<?php echo $each['id'] ?>">
        Xem chi tiết sản phẩm
        </a>
        <?php if(!empty($_SESSION['username'])){ ?>
            <br>
            <a href="add_to_cart.php?id=<?php echo $each['id'] ?>">
            <br>
            Thêm vào giỏ hàng
            </a>
     <?php   } ?>
            </div>
    
        <?php endforeach ?>
    </div>