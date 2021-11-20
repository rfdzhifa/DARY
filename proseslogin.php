<?php 
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];


$login = mysqli_query($conn,"select * from daftar where email='$email' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['email']=="$email"){

		// buat session login email pw
		$_SESSION['email'] = $email;
		$_SESSION['password'] = "$password";
		//jika berhasil
		header("location:about2.php?pesan=login sukses");
	}else{

		//  ke halaman login kembali lagi jika gagals
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}

?>