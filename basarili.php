<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Kayıt İşlemi Başarılı</title>
	<link rel="stylesheet" type="text/css" href="basarili.css"> 
</head>
<body>
	<div class="success-container">
		<h1>Kayıt İşlemi Başarılı</h1>
		<div class="tick-container">
			<img src="img//basarili.png" alt="Success Tick">
		</div>
		<p>Giriş yapmak için lütfen <a href="index.php">buraya</a> tıklayın.</p>
	</div>
	<script>
		setTimeout(function() {
				window.location.href = "index.php";
			}, 5000);
	</script>
</body>
</html>