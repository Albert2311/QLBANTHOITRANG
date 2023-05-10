<?php
include_once("connection2.php");
        $sql_xoa = "DELETE FROM news WHERE id=".$_GET["id_tt"];
        mysqli_query($conn, $sql_xoa);
        header('Location: admin_tintuc.php');
        ?>