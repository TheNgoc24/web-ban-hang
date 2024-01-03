<?php
session_start();
//echo json_encode($_SESSION['id']);
?>    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<link rel="stylesheet" href="css/style.css">
    <body>
        <div id = "tong">
            <?php include 'menu.php'; ?>
            <?php include 'products.php'; ?>
             <?php include 'bottom.php'; ?>
        </div>
        <?php
       if(isset($_GET['error'])){
        echo '<script type="text/JavaScript">  
      alert("Gio hang trong"); 
        </script>' 
   ; 
       }

?> 
    </body>
    </html>