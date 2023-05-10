<?php
include_once("connection2.php");
// $sql = "SELECT * FROM dskh WHERE id=".$_GET["idsanpham"]." LIMIT 1";
//         $query = mysqli_query($mysqli, $sql);
//         while ($row = mysqli_fetch_array($query)) {
//             unlink('images/'.$row["image"]);
//         }
        $sql_xoa = "DELETE FROM product WHERE id=".$_GET["idsanpham"];
        mysqli_query($conn, $sql_xoa);
        header('Location: product.php');
        ?>