<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="icon" herf="%PUBLIC_URL%/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>WONDERFUL INDONEISA</title>
  <link rel="stylesheet" href="stylecss.css" />
</head>


<body>
  <header>
    <div class="logo">
      <img src="1.jpg" alt="logo" class="logo-img" />
      <h1 class="logo-title"><a href="home.php">PARIWISATA WONDERFUL INDONESIA</a></h1>
    </div>

    <nav>
      <ul>
		<li><form action="pencarian.php" method="get">
  <label for="search">Cari Objek Wisata:</label>
  <input type="text" id="search" name="search">
  <button type="submit">Cari</button>
</form></li>
        <li><a href="#INFORMATIKA">Destinasi Wisata</a></li>
        <li><a href="mailto:yohanbachtiar2001@gmail.com">SEND EMAIL</a></li>
		<li><a href="login.php">SIGN IN</a></li>
      </ul>

	  








    </nav>
    <button class="btn-cta"> <a href="logout.php">LOGOUT</a></button>

  </header>



  <div class="container">
    <div class="intro">
      <p class="title">Selamat datang, <?php echo $_SESSION['username']; ?>!</p>
      <p class="description">WONDERFUL INDONESIA, SURGANYA PARA TRAVELERS</p>
	  <video autoplay loop muted playsinline>
		<source src="w3.mp4" type="video/mp4" alt="yohan bachtiar" class="img-foto" />
	  </video>
    </div>
  </div>

  
    <div class="parallax">
      <div class="tentang">
        <p class="title">DAFTAR OBJEK WISATA DI BEBERAPA DAERAH INDONESIA</p>
        <p class="description">Hai Traveler, Di website ini menampilkan beberapa refrensi wisata yang wajib banget kamu kunjungi</p>
        <div class="mt-10">
          <button class="btn-cta"> <a href="https://kemenparekraf.go.id/direktori/Dinas-Pariwisata">Dinas Terkait</a></button>
        </div>
      </div>
	
<?php
      // Membuat koneksi ke database dan melakukan query untuk menampilkan data wisata
require 'config.php';
$query = "SELECT * FROM wisata";
$result = mysqli_query($conn, $query);

// Menampilkan data wisata dalam bentuk tabel dan menambahkan navigasi halaman
$count = mysqli_num_rows($result);
$num_pages = ceil($count / 16); // jumlah halaman berdasarkan 16 kartu per halaman
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * 16; // indeks awal dan akhir berdasarkan 16 kartu per halaman
$end = $start + 16;
echo '<table>';
for ($i = $start; $i < $end && $i < $count; $i++) {
  if ($i % 4 == 0) { echo '<tr>'; } // kondisi untuk memulai baris baru setelah setiap 4 kartu
  $row = mysqli_fetch_assoc($result);
  echo '<td><div class="card" id="INFORMATIKA"><div class="card-item"><p class="card-title">' . htmlspecialchars($row['nama_wisata']) . '</p><img src="' . $row['gambar'] . '" alt="icon 1" class="wisata" /><p class="card-description">LOKASI :' . htmlspecialchars($row['lokasi']) . '</p><p class="card-description">RATING :' . htmlspecialchars($row['rating']) . '</p><p class="card-description">' . htmlspecialchars($row['tanggal']) . '</p><p class="card-description"><a href="#" onclick="openModal(' . htmlspecialchars($row['id_wisata']) . ')"> <button class="open-button">SELENGKAPNYA</button></a></p></div></div></td>';
  if ($i % 4 == 3 || $i == $count - 1) { echo '</tr>'; } // kondisi untuk mengakhiri baris setelah setiap 4 kartu
}
echo '</table>';
echo '<div class="page-numbers">'; // Menampilkan nomor halaman
for ($i = 1; $i <= $num_pages; $i++) {
  if ($i == $page) { echo '<span>' . $i . '</span>'; }
  else { echo '<a href="?page=' . $i . '">' . $i . '</a>'; }
}
echo '</div>';
mysqli_close($conn); // Menutup koneksi ke database
?>






<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Modal content goes here.</p>
  </div>
</div>



		
		
	
	    
	<footer>
    <p class="title">&copy; Yohan Bachtiar 2021</p>
    <p id="DisplayClock" class="clock" onload="showTime()"></p>
  </footer>

  <script>
    function redirInstagram() {
      window.location.href = "https://instagram.com/yohan_bachtiarr"
    }


    function showTime() {
      var date = new Date();
      var h = date.getHours();
      var m = date.getMinutes();
      var s = date.getSeconds();
      var session = "AM";

      if (h == 0) {
        h = 12;
      }
      if (h > 12) {
        h = h - 12;
        session = "PM";
      }

      h = (h < 10) ? "0" + h : h;
      m = (m < 10) ? "0" + m : m;
      s = (s < 10) ? "0" + s : s;

      var time = h + ":" + m + ":" + s + " " + session;

      document.getElementById("DisplayClock").innerText = time;
      document.getElementById("DisplayClock").textContent = time;

      setTimeout(showTime, 1000);
    }

    showTime();




    
  function openModal(id_wisata) {
    var modal = document.getElementById("myModal");
    var modalContent = modal.querySelector(".modal-content");
    modalContent.innerHTML = "<span class='close-button' onclick='closeModal()'>&times;</span><p>LOADING</p>";
    modal.style.display = "block";

    // Mengambil data deskripsi wisata menggunakan AJAX
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        modalContent.innerHTML = "<span class='close-button' onclick='closeModal()'>&times;</span>" + this.responseText;
      }
    };
    xmlhttp.open("GET", "view.php?id=" + id_wisata, true);
    xmlhttp.send();
  }

  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }





  </script>
</body>

</html>










 
  

 