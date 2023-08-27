<?php 
include '../../db/connection.php';
session_start();
 
// menghubungkan php dengan koneksi database
// include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connection,"SELECT * from admin where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['data']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['data'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../../admin/index.php");
	// cek jika user login sebagai pegawai
	// }else if($data['data']=="pegawai"){
		// buat session login dan username
		// $_SESSION['username'] = $username;
		// $_SESSION['data'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		// header("location:halaman_pegawai.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:../../admin/login.php");
	}	
}else{
	header("location:../../admin/login.php");
}
?>