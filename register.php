?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="icon" herf="%PUBLIC_URL%/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
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
        <li><a href="#INFORMATIKA">Register</a></li>
        <li><a href="mailto:yohanbachtiar2001@gmail.com">SEND EMAIL</a></li>
		<li><a href="login.php">SIGN IN</a></li>
      </ul>

	  








    </nav>
    <button class="btn-cta"> <a href="register.php">REGISTER ACCOUNT</a></button>

  </header>



  <div class="container">
    <div class="intro">
      <p class="title">Mari bersama menjelajahi Negeri ini dengan berjuta-juta keanekaragamannya</p>

	  <video autoplay loop muted playsinline>
		<source src="wfvid.mp4" type="video/mp4" alt="yohan bachtiar" class="img-foto" />
	  </video>
    </div>
  </div>


  <div class="parallaxlogin">
    <div class="tentang">
	<div class="mt-10">
      <p class="description">Hallo, Pastikan anda mengisi identitas dengan benar!</p>
      
</div>
      
    </div>

	

	<div class="intro">
	<h1 class="title">REGISTER ACCOUNT</h1>
</div>

	
      <div class="tentang" id="INFORMATIKA">
	<h2>Daftar Akun</h2>
	<form method="post" action="register_process.php">
		<p><label for="name">Name:</label></P>
		<p><input type="text" name="name" required><br><br></p>
		<p><label for="email">Email:</label></p>
		<p><input type="email" name="email" required><br><br></p>
		<p><label for="username">Username:</label></p>
		<p><input type="text" name="username" required><br><br></p>
		<p><label for="password">Password:</label></p>
		<p><input type="password" name="password" required><br><br></p>
		<p><label for="confirm_password">Confirm Password:</label></p>
		<p><input type="password" name="confirm_password" required><br><br></p>
		<p><label for="role">Role:</label></p>
		<select name="role" required>
			<option value="">--Select Role--</option>
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select><br><br>
		<p><input type="submit" name="submit" value="Register"></p>
	</form>
	  </div></div>
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

