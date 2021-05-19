<?php
    include("../connect.php");
    $id=$_GET["id"];
    $lenh = "select * from dienthoai where id=$id";
    $kq = mysqli_query($conn,$lenh);
    $data = mysqli_fetch_array($kq);

    if(isset($_POST["update"]))
    {
        $ten=$_POST["txtTen"];
        $gia=$_POST["txtGia"];
        $giacu=$_POST["txtGiacu"];
        $hang=$_POST["txtHang"];
        $anh=$_POST["txtAnh"];
        $mota=$_POST["txtMota"];
        $ngaythem=$_POST["txtNgaythem"];
        $sql= "UPDATE dienthoai SET ten='$ten', gia=$gia,giacu=$giacu,hang='$hang',anh='$anh',mota='$mota',ngaythem='$ngaythem' WHERE id=$id ";
        if(mysqli_query($conn, $sql)){

            mysqli_close($conn); // Close connection
            header("location:admin.php"); // redirects to all records page
            exit;	
        
        } else{
        
                echo "Khong the thuc thi cau lenh $sql. " . mysqli_error($conn);
        
            }
        
    }
    


?>
<html>
<head>
    <title>
        Sửa Sản Phẩm
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body> 
    <div class="menu-left">
    <a href="index.php" class="header-logo">
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
        <form class="frm-input" name=frm method="post" id=formSua >
            ID <input type="text" name="txtID" value="<?php echo $data['id']?>" class="frm-item"><br>
            Tên  <input type="text" name="txtTen" value="<?php echo $data['ten']?>" class="frm-item"><br>
            Giá<input type="text" name="txtGia" value="<?php echo $data['gia']?>" class="frm-item"><br>
            Giá Cũ<input type="text" name="txtGiacu" value="<?php echo $data['giacu']?>" class="frm-item"><br>
			Hãng<input type="text" name="txtHang" value="<?php echo $data['hang']?>" class="frm-item"><br>
            Ảnh <input type="text" name="txtAnh" value="<?php echo $data['anh']?>" class="frm-item"><br>
            Mô tả <textarea rows="15" cols="66" name="txtMota" form="formSua"  ><?php echo $data['mota']?></textarea>
            <!-- <input type="textare" name="txtMota" value="" class="frm-item"><br> -->
            Ngày thêm <input type="date" value="<?php echo $data['ngaythem']?>" name="txtNgaythem" class="frm-item"
            ><br>
			<input type="submit" value="Cập Nhật"  class="submit" name="update"><br>

    </form>
        
    </div>
</body>
</html>