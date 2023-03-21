<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "numarasorgu";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // Hata ayıklama modu etkinleştirme
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
}


$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);


$sql = "SELECT * FROM adminlogin WHERE kullanici = :username AND sifre = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

if ($stmt->rowCount() > 0) {
  $_SESSION['username'] = $username;
  header("Location: anasayfa.php");
} else {
  header("Location: girisbasarisiz.php");
}

$conn = null; 
?>
