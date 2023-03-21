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
<img src="img/logoss.png" alt="Logo">
<form action="girisyap.php" method="POST">
  <label for="username" style="display: block; text-align: center; font-size: 1.2em; font-weight: bold; margin-bottom: 5px; font-family: 'Maven Pro', sans-serif;">Kullanıcı Adı</label>
  <input type="text" id="username" name="username" pattern="[A-Za-z0-9]+" required>

  <label for="password" style="display: block; text-align: center; font-size: 1.2em; font-weight: bold; margin-bottom: 5px; font-family: 'Maven Pro', sans-serif;">Parola</label> 
  
  <input type="password" id="password" name="password" pattern="[^\s]+" minlength="8" required>

  <input type="submit" value="Giriş" style="font-family: 'Maven Pro', sans-serif; background-color:#0842d3;">
</form>


<p style="text-align:center; font-family: 'Maven Pro', sans-serif;"><a href="kayit.php" style="background-color:#0842d3; border:none; color:white; padding:12px 24px; text-align:center; text-decoration:none; display:inline-block; font-size:18px; font-weight:bold; border-radius:25px; box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);">Kayıt Ol</a></p></div>
</body>
</html>