<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/stylecontent.css">
    <link rel="shortcut icon" type="image/png" href="images/cteck1-01.png"/>
    
</head>
<body style="background: white">
        <?php
            include("connect.php");
            $ten=@$_POST["ten"];
            $lenh="select * from dienthoai where ten like '%$ten%'";
            $kq = mysqli_query($conn,$lenh);
            $n = mysqli_num_rows($kq);
        ?>
    <div class="drapped"></div>
    
        <header class="header">
            <?php
            include("header.php");
            ?>


        </header>
    
        <center>



        <banner class="banner">
            <?php
            include("banner.php");
            ?>


        </banner>


        </div>
        </center>
        <form method="POST" action="search.php" class="search">
            <input name="ten" type="text" class="txt-tim" placeholder="Mời nhập tên">
            <input type="submit" name="ketqua" value="Tìm" class="btn-tim">
        </form>
        

        
        <div class="grid">
        <?php
            while($row = mysqli_fetch_row($kq))
            {
                echo'
                    <a href="detail.php?mdt=',$row[0],'" class="griditem grid_item1" >
                        
                            
                            
                            <div class="griditem_images">
                            <img src=',$row[4],' width=250 height=232>
                            </div>
                            <div class="griditem_label"><b>',$row[1],'</b></div>
                            <div class="griditem_gia">',$row[2], ' VNĐ</div>
                            <div class="griditem_gia_cu"><del>',$row[3], ' VNĐ </del> </div>
                            
                            
                            
                    
                        
            
                        
                    </a>
                    
                    ';
            }
        ?>
            
        
        
        </div>
        
        
        

    </div>
    
        


    </div>
    <footer class="footer">
        <?php
        include("footer.php");
        ?>


    </footer>

    
</body>
</html>