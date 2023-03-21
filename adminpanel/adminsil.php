<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "numarasorgu";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$username = $_POST['username'];


$sql = "DELETE FROM adminlogin WHERE kullanici='$username'";

if ($conn->query($sql) === TRUE) {
    header('Location: adminadd.php');
} else {
  echo "Hata oluştu: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
