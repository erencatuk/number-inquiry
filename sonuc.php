<?php
session_start();


if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Numara Sorgulama Formu</title>
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Numara Sorgulama</h2>
        <form action="sonuc.php" method="post">
            <label for="numara">Numara</label>
            <input type="text" name="numara" id="numara" placeholder="+90 Olmadan yazınız." pattern="\d{1,10}" maxlength ="10" required>
            <input type="submit" value="Sorgula" id="myButton">
        </form>
</div>
    <div class="bottom">
		<h2>Numara eklemek için <a href="add.php">buraya</a> tıklayın</h2>
	</div><br><br><br>
    <!DOCTYPE html>
<html>
<head>
<style>
.sidebar {
  background-color: #3498db;
  height: 100%;
  width: 200px;
  position: fixed;
  top: 0;
  left: -200px;
  transition: left 0.3s ease-in-out;
  padding-top: 20px;
}

.sidebar.open {
  left: 0;
}

.sidebar h3 {
  color: #fff;
  text-align: center;
  font-size: 24px;
}

.sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar li {
  margin-bottom: 10px;
  text-align: center;
}

.sidebar li a {
  color: #fff;
  font-size: 18px;
  text-decoration: none;
  display: block;
  padding: 10px;
  border-radius: 5px;
}

.sidebar li a:hover {
  background-color: #2980b9;
}

#menu-toggle {
  position: absolute;
  top: 10px;
  right: -40px;
  font-size: 36px;
  background-color: #3498db;
  color: #fff;
  border: none;
  padding: 5px 10px;
  border-radius: 5px 0 0 5px;
  cursor: pointer;
}

#menu-toggle:focus {
  outline: none;
}
.sidebar ul li a {
  transition: all 0.2s ease-in-out;
}

.sidebar ul li a:hover {
  transform: scale(1.05);
}
#myButton:hover {
  transform: scale(1.1); 
  transition: transform 0.2s ease-in-out; 
}
</style>

<body>
<div class="sidebar">
  <button id="menu-toggle">&#9776;</button>
  <h3>Numara Sorgu</h3>
  <ul>
    <li><a href="main.php">Ana Sayfa</a></li>
    <li><a href="main.php">Numara Sorgulama</a></li>
    <li><a href="add.php">Numara Ekle</a></li>
    <li><a href="delete.php">Numara Kaldırma Talebi</a></li>
    <li><a href="#contact" class="scroll-link">İletişim</a></li>
    <li><a href="#info" class="scroll-link">Hakkımızda</a></li>
  </ul>
</div>
<script>
  var menuToggle = document.getElementById('menu-toggle');
var sidebar = document.querySelector('.sidebar');

menuToggle.addEventListener('mouseenter', function(){
  sidebar.classList.add('open');
});

sidebar.addEventListener('mouseleave', function(){
  sidebar.classList.remove('open');
});

</script>
<script>
  var menuToggle = document.getElementById('menu-toggle');
  var sidebar = document.querySelector('.sidebar');

  menuToggle.addEventListener('click', function(){
    sidebar.classList.toggle('open');
  });
</script>
	<title>Numara Sorgu Sonucu</title>
	<style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 10px;
		  text-align: left;
		}
        table {
            margin: auto;
        }
        h2 {
            text-align: center;
        }
        table {
  opacity: 0; 
  transform: translateX(-50px);
  animation: fadeInRight 0.5s ease-out forwards; 
}


@keyframes fadeInRight {
  0% {
    opacity: 0;
    transform: translateX(-50px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

	</style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Kaydırma işlemini gerçekleştiren işlev
    $('a.scroll-link').on('click', function(e) {
      e.preventDefault();
      var target = this.hash;
      var $target = $(target);
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top
      }, 900, 'swing', function() {
        window.location.hash = target;
      });
    });
  });
</script>
<style>
.contact-icons {
    display: inline-block;
}
</style>
</head>
<body>
	<h2>Numara Sorgu Sonucu</h2>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "numarasorgu";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}

		$numara = $_POST['numara'];

		$sql = "SELECT * FROM numaralar WHERE number = '$numara'";
		$result = mysqli_query($conn, $sql);
    // Numarayı Yazdırma
		if (mysqli_num_rows($result) > 0) {
			echo "<table><tr><th>NUMARA</th><th>AD</th><th>SOYAD</th><th>Cinsiyet</th>";
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    echo "<tr><td>" . $row["number"]. "</td><td>" . $row["ad"]. "</td><td>" . $row["soyad"]. "</td><td>" .$row["gender"]. "</td></tr>";
		  }
		  echo "</table>";
		} else {
		  echo "<h2>Kayıt bulunamadı.</h2>";
		}

		mysqli_close($conn);
	?>



<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "numarasorgu";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$numara = $_POST['numara'];
$islem = "Numara Sorgulama";
$ip_adresi = $_SERVER['REMOTE_ADDR']; 
$nickname = $username; 
$time = date('Y-m-d H:i:s');

$nickname = $_SESSION['username'];

$sql = "INSERT INTO logkayitlari (sorgulanan, sorgulayan, yapılan_islem, saat, ip)
VALUES ('$numara', '$nickname', '$islem', '$time', '$ip_adresi')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "";
}
?>

</body>
</html>


