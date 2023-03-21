<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "numarasorgu";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

// Formdan verileri alma
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

// Şifre kontrolü
if ($password != $confirm_password) {
  header('Location: basarisiz.php');
  exit();
}

// Kullanıcı adı veya e-posta kontrolü
$sql = "SELECT * FROM kullanicilar WHERE kullanici = '$username' OR mail = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  header('Location: basarisiz.php');
  exit();
}

// Yeni kullanıcıyı veritabanına ekleme
$sql = "INSERT INTO kullanicilar (kullanici, mail, sifre) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  header('Location: basarili.php');
} else {
  echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
