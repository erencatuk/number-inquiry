<?php

session_start();


if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  exit;
}


require_once "config.php";


$sql = "SELECT COUNT(*) AS ekleme_talep_sayisi FROM eklemetalepleri";
if ($result = mysqli_query($link, $sql)) {
    $row = mysqli_fetch_assoc($result);
    $ekleme_talep_sayisi = $row["ekleme_talep_sayisi"];
    mysqli_free_result($result);
}


$sql = "SELECT COUNT(*) AS silme_talep_sayisi FROM silmetalepleri";
if ($result = mysqli_query($link, $sql)) {
    $row = mysqli_fetch_assoc($result);
    $silme_talep_sayisi = $row["silme_talep_sayisi"];
    mysqli_free_result($result);
}


$sql =  "SELECT COUNT(*) AS log_kayit_sayisi FROM logkayitlari";
if ($result = mysqli_query($link, $sql)){
	$row = mysqli_fetch_assoc($result);
	$log_kayit_sayisi = $row["log_kayit_sayisi"];
	mysqli_free_result($result);
}


mysqli_close($link);
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
		<a class="navbar-brand" href="#">Admin Panel</a>
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
				<li class="nav-item">
					<a class="nav-link" href="adminadd.php">Admin Ekle</a>
				</li>
			</ul>
		</div>
	</nav><br><br>
	<div class="container mt-4">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">İşlem</th>
				<th scope="col">Toplam Talep Sayısı</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Toplam Numara Ekleme Talepleri</td>
				<td><?php echo $ekleme_talep_sayisi; ?></td>
			</tr>
			<tr>
				<td>Toplam Numara Silme Talepleri</td>
				<td><?php echo $silme_talep_sayisi; ?></td>
			</tr>
			<tr>
				<td>Toplam Log Kayıdı</td>
				<td><?php echo $log_kayit_sayisi; ?></td>
			</tr>
		</tbody>
	</table>
</div>


</body>
</html>