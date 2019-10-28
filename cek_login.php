<?php 

echo session_save_path();
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']); 
 
echo "$username $password";
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
header();
 
// cek apakah username dan password di temukan pada database
if($cek > 0){	
 		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password; 
		// alihkan ke halaman dashboard admin
		header("location:homepage.php");
}else{
	header("location:./lgn/login-salah.html?pesan=gagal");
}
?>
