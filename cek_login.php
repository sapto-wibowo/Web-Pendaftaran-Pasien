<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include_once("connect.php");
 
// menangkap data yang dikirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($mysqli,"SELECT *from login WHERE  username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>