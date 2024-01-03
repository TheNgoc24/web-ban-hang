<div id = "tren" >
        <ol>
            <li>
                <a href="index.php">
                    Trang Chủ
                </a>
    </li>
    <?php if(empty($_SESSION['username'])){ ?>
            <li>
            <a href="signin.php">
                    Đăng nhập
                </a>
            </li>   
            <li>
            <a href="signup.php">
                  Đăng kí 
                </a>
            </li> 
   <?php     }  else { ?>
    <li>
    Xin chao,   <?php echo $_SESSION['username'] ?>
            <a href="signout.php">
                <br>
                    Đăng xuất
                </a>
                <br>
            <a href="view_cart.php">
            Xem giỏ hàng của bạn,
                </a>
                
  <?php } ?>
        </ol>
    </div>