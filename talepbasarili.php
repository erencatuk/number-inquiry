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
	<title>Numara Ekleme Talebi</title>
	<link rel="stylesheet" type="text/css" href="basarili.css"> 
</head>
<body>
	<div class="success-container">
		<h1>Numara Ekleme Talebi Başarılı</h1>
		<div class="tick-container">
			<img src="img//basarili.png" alt="Success Tick">
		</div>
	</div>
	<script>
		setTimeout(function() {
				window.location.href = "main.php";
			}, 3000);
	</script>
</body>
</html>
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
$isim = $_POST['name'];
$soyisim = $_POST['surname'];
$cinsiyet = $_POST['gender'];
$ip_adresi = $_SERVER['REMOTE_ADDR']; 
$nickname = $username; 
$time = date('Y-m-d H:i:s');

$nickname = $_SESSION['username'];


$sql = "INSERT INTO eklemetalepleri (numara, isim, soyisim, cinsiyet, ip, gonderen, saat)
VALUES ('$numara', '$isim', '$soyisim', '$cinsiyet', '$ip_adresi', '$nickname', '$time')";

if ($conn->query($sql) === TRUE) {
  echo "Talep başarıyla kaydedildi";
} else {
  echo "Hata oluştu: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
