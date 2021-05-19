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

        mysqli_close($conn); 
        header("location:admin.php"); 
        exit;

    } else{

        echo "Khong the thuc thi cau lenh $sql. " . mysqli_error($conn);

    }
    
?>
