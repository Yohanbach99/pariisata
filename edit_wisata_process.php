<?php
require 'config.php';

$id_wisata = $_POST['id_wisata'];
$name = $_POST['nama_wisata'];
$description = $_POST['deskripsi'];
$location = $_POST['lokasi'];
$rating = $_POST['rating'];
$date = $_POST['tanggal'];

// Cek apakah ada gambar yang diupload
if (!empty($_FILES['gambar']['name'])) {
  $image = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  $upload_dir = "uploads/";
  move_uploaded_file($tmp, $upload_dir.$image);

  // Update data dengan gambar baru
  $query = "UPDATE wisata SET nama_wisata='$name', deskripsi='$description', lokasi='$location', gambar='$upload_dir$image', rating=$rating, tanggal='$date' WHERE id_wisata='$id_wisata'";
} else {
  // Update data tanpa gambar baru
  $query = "UPDATE wisata SET nama_wisata='$name', deskripsi='$description', lokasi='$location', rating=$rating, tanggal='$date' WHERE id_wisata='$id_wisata'";
}

$result = mysqli_query($conn, $query);

if ($result) {
  echo "<a href ='manage_wisata.php'>perubahan Data Berhasil, Klik Untuk Kembali</a>";
  echo"<meta http-equev=refresh content=2;URL='manage_wisata.php'>";
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
