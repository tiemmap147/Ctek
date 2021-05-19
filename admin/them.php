<?php
include("../connect.php");
   $id = mysqli_real_escape_string($conn, $_REQUEST['txtID']);
   $ten = mysqli_real_escape_string($conn, $_REQUEST['txtTen']);
   $gia = mysqli_real_escape_string($conn, $_REQUEST['txtGia']);
   $giacu = mysqli_real_escape_string($conn, $_REQUEST['txtGiacu']);
   $hang = mysqli_real_escape_string($conn, $_REQUEST['txtHang']);
    $anh = mysqli_real_escape_string($conn, $_REQUEST['txtAnh']);
    $mota = mysqli_real_escape_string($conn, $_REQUEST['txtMota']);
    $ngaythem = mysqli_real_escape_string($conn, $_REQUEST['txtNgaythem']);

   $sql = "INSERT INTO dienthoai (id, ten, gia,giacu,hang,anh,mota,ngaythem) VALUES ('$id', '$ten', '$gia','$giacu','$hang','$anh','$mota','$ngaythem')";

    if(mysqli_query($conn, $sql)){

        echo "Nhap thanh cong !.";
        echo '<a href="admin.php">Back</a>';

    } else{

        echo "Khong the thuc thi cau lenh $sql. " . mysqli_error($conn);

    }
    mysqli_close($conn);
?>
