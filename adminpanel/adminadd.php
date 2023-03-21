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

<form action="adminsil.php" method="POST">
    <h2>Admin Sil</h2>
  <label for="username">Kullanıcı Adı:</label>
  <input type="text" id="username" name="username" required>

  <input type="submit" value="SİL">

</form>


<form action="adminekle.php" method="POST">
    <h2> Admin Ekle</h2>
  <label for="username">Kullanıcı Adı:</label>
  <input type="text" id="username" name="username" required>

  <label for="password">Şifre:</label> 
  <input type="password" id="password" name="password" required>

  <input type="submit" value="EKLE">
</form>
<style>
		body {
			background-color: #f7f7f7;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
		}
		form {
			background-color: #fff;
			border: 1px solid #ccc;
			box-shadow: 0 2px 5px rgba(0,0,0,0.2);
			margin: auto;
			max-width: 400px;
			padding: 20px;
			text-align: center;
		}
		label {
			display: block;
			margin-bottom: 5px;
			text-align: left;
		}
		input[type="text"], input[type="password"] {
			border: 1px solid #ccc;
			font-size: 16px;
			padding: 10px;
			width: 100%;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			border: none;
			color: #fff;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
			padding: 10px;
			width: 100%;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</body>
</html>