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
	<title>Numara Silme Talebi</title>
	<link rel="stylesheet" type="text/css" href="basarili.css"> 
</head>
<body>
	<div class="success-container">
		<h1>Numara Silme Başarılıyla Alındı.</h1>
		<div class="tick-container">
			<img src="img//basarili.png" alt="Success Tick">
		</div>
	</div>
	<script>
		setTimeout(function() {
				window.location.href = "delete.php";
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
$reason = $_POST['reason'];
$ip_adresi = $_SERVER['REMOTE_ADDR']; 
$nickname = $username; 
$time = date('Y-m-d H:i:s');

$nickname = $_SESSION['username'];

// SQL sorgusu ile veritabanına ekle
$sql = "INSERT INTO silmetalepleri (numara, gerekce, gonderen, ip, saat)
VALUES ('$numara', '$reason', '$nickname', '$ip_adresi', '$time')";

if ($conn->query($sql) === TRUE) {
  echo "Talep başarıyla kaydedildi";
} else {
  echo "Hata oluştu: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
