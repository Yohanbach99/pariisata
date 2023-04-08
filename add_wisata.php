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
  <title>WONDERFUL INDONESIA</title>
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
        <li><a href="#INFORMATIKA">Tambah Wisata</a></li>
        <li><a href="mailto:yohanbachtiar2001@gmail.com">SEND EMAIL</a></li>
		<li><a href="login.php">SIGN IN</a></li>
      </ul>

	  








    </nav>
    <button class="btn-cta"> <a href="logout.php">LOGOUT</a></button>

  </header>



  <div class="container">
    <div class="intro">
      <p class="title">Hallo Administrator <?php echo $_SESSION['username']; ?>, Apakah hari ini kamu sedang baik-baik saja?</p>
    </div>
  </div>


  <div class="parallaxedit">
    <div class="tentang">
      <p class="title">KAMU TELAH MEMILIH TAMBAH OBJEK WISATA</p>
      <p class="description">Hai Administrator, Selalu perhatikan objek wisata yang akan kamu tambah sesuai data yang valid</p>
      <div class="mt-10">

      </div>
    </div>

	<div class="container">
	<div class="intro">
	<h1 class="title">Edit Objek Wisata</h1></div>

	<div class="card" id="INFORMATIKA">
        <div class="card-item">
	<form action="add_wisata_process.php" method="post" enctype="multipart/form-data">
		<p class="card-title"><label for="nama_wisata">Nama Wisata:</label></p>
		<p><input type="text" name="nama_wisata" id="nama_wisata"></p>
		<br>
		<p class="card-title"><label for="lokasi">Lokasi:</label></p>
		<p><input type="text" name="lokasi" id="lokasi"></p>
		<br>
		<p class="card-title"><label for="gambar">Gambar:</label></p>
		<p><input type="file" name="gambar" id="gambar"></p>
		<br>
		<p class="card-title"><label for="rating">Rating:</label></p>
		<p><input type="number" name="rating" id="rating" min="1" max="5"></p>
		<br>
		<p class="card-title"><label for="deskripsi">Deskripsi:</label></p>
		<p><textarea name="deskripsi" id="deskripsi"></textarea></p>
		<br>
		<p class="card-title"><label for="tanggal">Tanggal:</label></p>
		<p><input type="date" name="tanggal" id="tanggal"></p>
		<br>
		<p><input type="submit" value="Tambah"></p>
		</form>
	</div>
	</div>
	</div>
	<br>
	<button class="open-button" onclick="openModal()"><a href="manage_wisata.php">KEMBALI KE MANAGE WISATA</a></button>
	<div class="modal" id="myModal">
  <div class="modal-content">
    <span class="close-button" onclick="closeModal()">&times;</span>
    <p>LOADING</p>
	<p>Opsi pilihan anda sedang di proses oleh system</p>
	</div>
</div>
	<footer>
    <p class="title">&copy; Yohan Bachtiar 2021</p>
    <p id="DisplayClock" class="clock" onload="showTime()"></p>
  </footer>
  </div>
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



// mendapatkan elemen modal
var modal = document.getElementById("myModal");

// mendapatkan tombol buka modal
var btn = document.getElementsByClassName("open-button")[0];

// mendapatkan elemen tombol close
var span = document.getElementsByClassName("close-button")[0];

// saat tombol buka modal diklik, tampilkan modal
function openModal() {
  modal.style.display = "block";
}

// saat tombol close diklik atau area di luar modal diklik, sembunyikan modal
function closeModal() {
  modal.style.display = "none";
}

// saat pengguna mengklik area di luar modal, sembunyikan modal
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  </script>
</body>

</html>
