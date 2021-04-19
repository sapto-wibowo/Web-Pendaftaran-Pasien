<?php  
    include_once("connect.php");
    $jkn = $_GET['kd_jaminan'];
    $result=mysqli_query($mysqli, "DELETE FROM jaminan WHERE kd_jaminan=$jkn");

    header("location:data_jaminan.php");
?>