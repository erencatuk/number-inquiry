<?php
session_start();

r
if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  exit;
}

$conn = new mysqli("localhost", "root", "", "numarasorgu");
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}


$numara = $_GET["numara"];
$delete_sql = "DELETE FROM eklemetalepleri WHERE numara = $numara";
$conn->query($delete_sql);


$conn->close();


header("Location: numaraekle.php");
?>
