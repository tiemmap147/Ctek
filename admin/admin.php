<html>
<head>
    <title>
        Quản Lý Ctek
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>
<?php
            include("../connect.php");
            $lenh = "select * from dienthoai";
            $kq = mysqli_query($conn,$lenh);
        ?>    
    <div class="menu-left">
    <a href="../index.php" class="header-logo">
        <img src="../images/cteck1-01.png" class="header-logo-img">
    </a>

    <ul>
        <li class="admin-menu-item">
            <a href="admin.php" class="admin-menu-link">DATA</a>
        </li>

        <li class="admin-menu-item">
            <a href="inputsp.html" class="admin-menu-link">Thêm dữ liệu</a>
        </li>

        <li class="admin-menu-item">
            <a href="#" class="admin-menu-link">Xoá dữ liệu</a>
        </li>

        <li class="admin-menu-item">
            <a href="#" class="admin-menu-link">Chỉnh sửa</a>
        </li>
    </ul>
    </div>
    <div class="admin-content">
    <?php
            while($row = mysqli_fetch_row($kq))
            {
                echo'
        <div class="list-content">
            <div class="ID">',$row[0],'</div>
            <div class="images"><img src=../',$row[4],' width=100 height=115></div>
            <div class="label">',$row[1],'  </div>
            <div class="gia">',$row[2],' VNĐ </div>
            <div class="giacu">',$row[3],' VNĐ</div>
            <div class="hang">',$row[6],'</div>
            <div class="xoa">
                <a href="xoa.php?id=',$row[0],'" class="edit_del"">XOÁ</a>
            </div>
            <div class="sua">
                <a href="sua.php?id=',$row[0],'" class="edit_del"">SỬA</a>
            </div>
        </div>';
            }
        ?>
        
    </div>
</body>
</html>