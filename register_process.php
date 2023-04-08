<?php

require 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$role = $_POST['role'];

if ($password != $confirm_password) {
	echo "Error: Passwords do not match";
	exit();
}

$password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (name, email, username, password, role) VALUES ('$name', '$email', '$username', '$password', '$role')";
$result = mysqli_query($conn, $query);

if ($result) {
	echo "<a href ='login.php'>Registrasi Akun Berhasil, Klik Untuk Login</a>";
  	echo "<meta http-equiv='refresh' content='2;URL=login.php'>";
} else {
	echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
