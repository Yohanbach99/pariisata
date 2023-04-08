<?php
require 'config.php';

$name = $_POST['nama_wisata'];
$description = $_POST['deskripsi'];
$location = $_POST['lokasi'];
$image = $_FILES['gambar']['name'];
$rating = $_POST['rating'];
$tmp = $_FILES['gambar']['tmp_name'];

$upload_dir = "uploads/";
	move_uploaded_file($tmp, $upload_dir.$image);


$query = "INSERT INTO wisata (nama_wisata, deskripsi, lokasi, gambar, rating, tanggal) VALUES ('$name', '$description', '$location', '$upload_dir$image', $rating, NOW())";
$result = mysqli_query($conn, $query);

if ($result) {
  echo "<a href ='manage_wisata.php'>perubahan Data Berhasil, Klik Untuk Kembali</a>";
  echo"<meta http-equev=refresh content=2;URL='manage_wisata.php'>";
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
