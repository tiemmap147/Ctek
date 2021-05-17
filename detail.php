<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/stylecontent.css">
</head>
<body style="background: white">
    <header class="header">
		<?php
		include("header.php");
		?>


	</header>
    <center>
    <div class="div-detail">
        <div class="detail"></div>
            <div class="name"><h1>name</h1></div>
            <div class="price"><h2>Giá</h2></div>
            <div class="dc">Mô tả sản phẩm</div>
            <div class="buy">
                <div class="order"><a href="" class= "order_add">Mua ngay</a> </div>
                <div class ="addbox"><a href="" class= "order_add">Thêm vào giỏ hàng</a>
            </div>
        </div>
    </div>
    <div class="splq"><h2>Sản Phẩm liên quan</h2></div>
        <div class="grid">

            <a href="#" class="griditem grid_item2">
                <div class="griditem_images"></div>
                <div class="griditem_label"></div>
                <div class="griditem_gia"></div>
            </a>
            <a href="#" class="griditem grid_item3">
                <div class="griditem_images"></div>
                <div class="griditem_label"></div>
                <div class="griditem_gia"></div>
                
            </a>
            <a href="#" class="griditem grid_item4">
                <div class="griditem_images"></div>
                <div class="griditem_label"></div>
                <div class="griditem_gia"></div>
            </a>
            <a href="#" class="griditem grid_item5">
                <div class="griditem_images"></div>
                <div class="griditem_label"></div>
                <div class="griditem_gia"></div>
            </a>
            <a href="#" class="griditem grid_item6">

                <div class="griditem_images"></div>
                <div class="griditem_label"></div>
                <div class="griditem_gia"></div>
            </a>
            <a href="#" class="griditem grid_item7">

                <div class="griditem_images"></div>
                <div class="griditem_label"></div>
                <div class="griditem_gia"></div>
            </a>
        </div>
        
            
   
    </center>
    
    <footer class="footer">
        <?php
        include("footer.php");
        ?>


    </footer>
</body>
</html>