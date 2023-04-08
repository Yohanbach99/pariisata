

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="icon" herf="%PUBLIC_URL%/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>
  <link rel="stylesheet" href="stylecss.css" />
</head>


<body>
  <header>
    <div class="logo">
      <img src="1.jpg" alt="logo" class="logo-img" />
      <h1 class="logo-title">WONDERFUL INDONESIA</h1>
    </div>

    <nav>
      <ul>
        <li><a href="#INFORMATIKA">Login</a></li>
        <li><a href="mailto:yohanbachtiar2001@gmail.com">SEND EMAIL</a></li>
		<li><a href="login.php">SIGN IN</a></li>
      </ul>

	  








    </nav>
    <button class="btn-cta"> <a href="register.php">REGISTER ACCOUNT</a></button>

  </header>



  <div class="container">
    <div class="intro">
      <p class="title">Hallo Para Travelers, Selamat datang di website Pariwisata Indoneisa</p>
	  <p class="title">THIS IS WONDERFUL INDONESIA, TEMUKAN BERBAGAI WISATA MENARIK YANG BERADA DI INDONESIA</p>
	  <video autoplay loop muted playsinline>
		<source src="wfvid.mp4" type="video/mp4" alt="yohan bachtiar" class="img-foto" />
	  </video>
    </div>
  </div>


  <div class="parallaxlogin">
    <div class="tentang">
	<div class="mt-10">
      <p class="description"> Nikmati keindahan anugrah sang pencipta yang berada di INDONESIA yang memiliki identik dengan keberagamannya, Temukan dan segera kunjungi keindahan alamnya</p>
      
</div>
      
    </div>

	

	<div class="intro">
	<h1 class="title">LOGIN AKUN</h1></div>

	
      <div class="tentang" id="INFORMATIKA">
	<form action="login_process.php" method="post">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		<input type="submit" value="Login">
	</form>
	</div></div>
	<br>
	<button class="open-button" onclick="openModal()"><a href="register.php">REGISTER ACCOUNT</a></button>
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

