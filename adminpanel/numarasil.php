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
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="anasayfa.php  ">Admin Panel</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="numaraekle.php">Numara Ekleme Talepleri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="numarasil.php">Numara Silme Talepleri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logkayitlari.php">Log Kayıtları</a>
				</li>
			</ul>
		</div>
</nav><br>
<?php

$conn = new mysqli("localhost", "root", "", "numarasorgu");
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}


$sql = "SELECT numara, gerekce, gonderen, ip, saat FROM silmetalepleri";
$result = $conn->query($sql);

// Tablo oluşturma
if ($result->num_rows > 0) {
    echo "<table><tr><th>Numara</th><th>Gerekçe</th><th>Gönderen</th><th>IP Adresi</th><th>Saat</th></tr>";
    while ($row = $result->fetch_assoc()) {
        if (!empty($row["numara"])) { 
            echo "<tr><td>" . $row["numara"] . "</td><td>" . $row["gerekce"] . "</td><td>" . $row["gonderen"] . "</td><td>" . $row["ip"] . "</td><td>" . $row["saat"] . "</td><td><a href='silmeonayla.php?numara=" . $row["numara"] . "'><button>Onayla</button></a></td><td><a href='silmereddet.php?numara=" . $row["numara"] . "'><button>Reddet</button></a></td></tr>";
        } else { 
            $delete_sql = "DELETE FROM eklemetalepleri WHERE numara IS NULL";
            $conn->query($delete_sql);
        }
    }
    echo "</table>";
} else {
    echo "Tabloda hiçbir veri bulunamadı.";
}


$conn->close();
?>
<style>
    table {
            border-collapse: collapse;
            width: 100%;
            margin: auto;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #eaeaea;
        }
        button {
            color: #333;
            text-decoration: none;
        }
        .btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 8px 16px;
            border-radius: 3px;
        }
        .btn:hover {
            background-color: #2E8B57;
        }
</style>

</body>
</html>