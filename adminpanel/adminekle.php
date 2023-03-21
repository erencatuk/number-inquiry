<?php
session_start();


if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "numarasorgu";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$kullanici = $_POST['username'];
$sifre = $_POST['password'];


$sql = "INSERT INTO adminlogin (kullanici, sifre) VALUES ('$kullanici', '$sifre')";

if ($conn->query($sql) === TRUE) {
    header('Location: adminadd.php');
} else {
  echo "Hata oluştu: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>