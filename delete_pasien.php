<?php  
    include_once("connect.php");
    $id = $_GET['kd_pasien'];
    $result=mysqli_query($mysqli, "DELETE FROM pasien WHERE kd_pasien=$id");

    header("location:pasien.php");
?>