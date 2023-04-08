<?php
require 'config.php';

$id_wisata = $_GET['id'];

$query = "DELETE FROM wisata WHERE id_wisata='$id_wisata'";
$result = mysqli_query($conn, $query);

if ($result) {
	header("Location: manage_wisata.php");
	exit();
} else {
	echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
