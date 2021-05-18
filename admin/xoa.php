<?php
include("../connect.php");
$id=mysqli_real_escape_string($conn, $_REQUEST[$row[0]]);
$sql = "DELETE dienthoai WHERE ID=$id";

    if(mysqli_query($conn, $sql)){

        echo "Xoa thanh cong !.";
        echo '<a href="admin.php">Back</a>';

    } else{

        echo "Khong the thuc thi cau lenh $sql. " . mysqli_error($conn);

    }
    mysqli_close($conn);
?>