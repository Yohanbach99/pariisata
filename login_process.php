<?php
session_start();
require 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

// ambil hash password dari database berdasarkan username
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
	$row = mysqli_fetch_assoc($result);
	$hashed_password = $row['password'];
	
	// verifikasi password
	if (password_verify($password, $hashed_password)) {
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['role'] = $row['role'];
		if ($row['role'] == 'admin') {
			header("Location: dashboard.php");
			exit();
		} else {
			header("Location: home.php");
			exit();
		}
	} else {
		echo "<a href ='login.php'>Username Atau Password Salah, Klik Untuk Kembali</a>";
  		echo"<meta http-equiv=refresh content=2;URL='login.php'>";
	}
} else {
	echo "<a href ='login.php'>Username Atau Password Salah, Klik Untuk Kembali</a>";
  	echo"<meta http-equiv=refresh content=2;URL='login.php'>";
}

mysqli_close($conn);

?>