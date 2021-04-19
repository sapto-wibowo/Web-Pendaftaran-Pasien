<?php  
    include_once("connect.php");
    $id = $_GET['kd_poli'];
    $result=mysqli_query($mysqli, "DELETE FROM poliklinik WHERE kd_poli=$id");

    header("location:data_poliklinik.php");
?>