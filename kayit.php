<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="kayitol.css" type="text/css" rel="stylesheet"/>
    <title>Kayıt Ol</title>
</head>
<body>
<div class="form-wrapper">
<form action="kaydet.php" method="POST">
  <form>
    <h2  style="font-family: 'Maven Pro', sans-serif;">Kayıt Ol</h2>
    <div class="form-group">
      <label for="username" style="font-family: 'Maven Pro', sans-serif;">Kullanıcı Adı</label>
      <input type="text" id="username" name="username" pattern="[A-Za-z0-9]+" title="Sadece harf ve sayı karakterleri girebilirsiniz" required>
    </div>
    <div class="form-group">
      <label for="email"  style="font-family: 'Maven Pro', sans-serif;">E-posta Adresi</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password"  style="font-family: 'Maven Pro', sans-serif;">Şifre</label>
      <input type="password" id="password" name="password" minlength="8"  pattern="[^\s]+" required>
    </div>
    <div class="form-group">
      <label for="confirm-password"  style="font-family: 'Maven Pro', sans-serif;">Şifreyi Tekrar Girin</label>
      <input type="password" id="confirm-password" name="confirm-password"  minlength="8" required>
    </div>
    <input type="checkbox" id="accept-terms" name="accept-terms"  required>
    <label for="accept-terms" style="font-family: 'Maven Pro', sans-serif;"><a href="terms.php" style="_blank;">Kullanıcı sözleşmesini kabul ediyorum.</a></label><br>
    <button type="submit">Kayıt Ol</button>
  </form>
</div>
</form>
</body>
</html>