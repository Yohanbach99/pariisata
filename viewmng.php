<?php
// Membuat koneksi ke database
require 'config.php';

// Check if the id parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to get the details of the selected wisata
    $query = "SELECT * FROM wisata WHERE id_wisata = $id";
    $result = mysqli_query($conn, $query);

    // Check if the query returns a result
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>

        <div class="container">
          <div class="card" id="INFORMATIKA">
            <div class="card-item">
        <p class="card-title"><?php echo htmlspecialchars($row['nama_wisata']); ?></p>
              <img src="<?php echo $row['gambar']; ?>" alt="icon 1" class="wisata" />
              <p class="card-description">LOKASI :<?php echo htmlspecialchars($row['lokasi']); ?></p>
          <p class="card-description"><?php echo htmlspecialchars($row['deskripsi']); ?></p>
          <p class="card-description">RATING :<?php echo htmlspecialchars($row['rating']); ?></p>
          <p class="card-description"><?php echo htmlspecialchars($row['tanggal']); ?></p>
          <button class="btn-cta"><a href="edit_wisata.php?id=<?php echo $row['id_wisata']; ?>">Edit</a></button>
          <button class="btn-cta"><a href="delete_wisata.php?id=<?php echo $row['id_wisata']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></button>
          </div>
        </div>
	</div>


<?php
    } else {
        echo "No data found.";
    }
} else {
    echo "No id parameter found.";
}
?>
