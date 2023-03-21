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

if(isset($_GET['numara'])) {

    $numara = $_GET['numara'];
    

    $sql = "SELECT * FROM eklemetalepleri WHERE numara = '$numara'";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $isim = $row['isim'];
            $soyisim = $row['soyisim'];
            $cinsiyet = $row['cinsiyet'];
            $insert_sql = "INSERT INTO numaralar (number, ad, soyad, gender) VALUES ('$numara', '$isim', '$soyisim', '$cinsiyet')";
            if ($conn->query($insert_sql) === TRUE) {
                echo "Kayıt başarıyla eklendi.";
            } else {
                echo "Kayıt eklenirken bir hata oluştu: " . $conn->error;
            }
        }
    }
    

    $delete_sql = "DELETE FROM eklemetalepleri WHERE numara = '$numara'";
    if ($conn->query($delete_sql) === TRUE) {
        echo "Kayıt başarıyla silindi.";
    } else {
        echo "Kayıt silinirken bir hata oluştu: " . $conn->error;
    }
}


$conn->close();


header("Location: numaraekle.php");
?>