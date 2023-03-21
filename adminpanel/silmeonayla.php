<?php
session_start();


if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  exit;
}

$conn = new mysqli("localhost", "root", "", "numarasorgu");
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}


$numara = $_GET["numara"];


$sql = "DELETE FROM numaralar WHERE number = '$numara'";
if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarıyla silindi.";
} else {
    echo "Kayıt silinirken bir hata oluştu: " . $conn->error;
}


$delete_sql = "DELETE FROM silmetalepleri WHERE numara = '$numara'";
if ($conn->query($delete_sql) === TRUE) {
    echo "Kayıt başarıyla silindi.";
} else {
    echo "Kayıt silinirken bir hata oluştu: " . $conn->error;
}


$conn->close();
header("Location: numarasil.php");
?>
