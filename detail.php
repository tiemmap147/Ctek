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
<?php
$msdienthoai = $_GET["mdt"];
include("connect.php");
$lenh = "select * from dienthoai where id = '$msdienthoai'";
$kq = mysqli_query($conn,$lenh);
?>
    <header class="header">
		<?php
		include("header.php");
		?>


	</header>
    <center>
    <div class="div-detail">

    

        <?php
            while($row = mysqli_fetch_row($kq))
            {
                echo'
                <div class="detail">
                <img src=',$row[3],'>
                </div>
                <div class="name"><h1>',$row[1],'</h1></div>
                <div class="price"><h2>GIÁ: ',$row[2],'</h2></div>
                <div class="dc">',$row[6],'</div>
                <div class="buy">
                    <div class="order"><a href="" class= "order_add">Mua ngay</a> </div>
                    <div class ="addbox"><a href="" class= "order_add">Thêm vào giỏ hàng</a>
                </div>';
            }
        ?>
        
        
    </div>
    

        
            
   
    </center>
    
    <footer class="footer">
        <?php
        include("footer.php");
        ?>


    </footer>
</body>
</html>