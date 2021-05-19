<?php
include("../connect.php");
$id=$_GET["id"];
$sql = "DELETE from dienthoai WHERE ID=$id";

    if(mysqli_query($conn, $sql)){

    mysqli_close($conn); // Close connection
    header("location:admin.php"); // redirects to all records page
    exit;	

    } else{

        echo "Khong the thuc thi cau lenh $sql. " . mysqli_error($conn);

    }
    
?>