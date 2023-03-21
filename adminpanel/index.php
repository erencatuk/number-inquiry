<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="index.css" type="text/css" rel="stylesheet"/>
  <title>Giriş Yap</title>
</head>
<body>
<div class="form-wrapper">
<h2>ADMİN PANEL</h2>
<form action="giris.php" method="POST">
  <label for="username" style="display: block; text-align: center; font-size: 1.2em; font-weight: bold; margin-bottom: 5px;">Kullanıcı Adı</label>
  <input type="text" id="username" name="username"  pattern="[A-Za-z0-9]+" required >

  <label for="password" style="display: block; text-align: center; font-size: 1.2em; font-weight: bold; margin-bottom: 5px;">Parola</label> 
  <input type="password" id="password" name="password"  pattern="[^\s]+" required>

  <input type="submit" value="Giriş">
</form>
</body>
</html>