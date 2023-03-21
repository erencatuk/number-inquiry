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
    <meta charset="UTF-8">
	<title>Giriş Yapıldı</title>
	<link rel="stylesheet" type="text/css" href="basarili.css"> 
</head>
<body>
	<div class="success-container">
		<h1>Giriş Yapıldı!</h1>
		<div class="tick-container">
			<img src="img//basarili.png" alt="Success Tick">
<script>
    setTimeout(function() {
			window.location.href = "main.php";
		}, 2000);
</script>
</body>
</html>