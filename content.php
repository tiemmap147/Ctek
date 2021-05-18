<!DOCTYPE html>
<html>
<head>
	<title>Test 2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/stylecontent.css">
    
</head>
<body style="background: white">
        <?php
            include("connect.php");
            $lenh = "select * from dienthoai";
            $kq = mysqli_query($conn,$lenh);
        ?>
    <div class="drapped"></div>
        <header class="header">
            <?php
            include("header.php");
            ?>


        </header>
    
        <center>
        <div class="banner">
        </div>
        </center>
        
        

        
        <div class="grid">
        <?php
            while($row = mysqli_fetch_row($kq))
            {
                echo'
                    <a href="#" class="griditem grid_item1" >
                        
                            
                            
                            <div class="griditem_images">
                            <img src=',$row[3],' width=250 height=232>
                            </div>
                            <div class="griditem_label">',$row[1],'</div>
                            <div class="griditem_gia">',$row[2],'</div>
                            
                            
                            
                    
                        
            
                        
                    </a>
                    
                    ';
            }
        ?>
            
        
        
        </div>
        
        
        

    </div>
    <div class="nav">
            <center>
            <ul>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">prev</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">1</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">2</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">3</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">4</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">5</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">next</a>
                </li>
            </ul>
        </center>
        


    </div>
    <footer class="footer">
        <?php
        include("footer.php");
        ?>


    </footer>

    
</body>
</html>