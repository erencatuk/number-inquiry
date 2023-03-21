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
    <title>Numara Sorgulama Formu</title>
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
.sidebar {
  background-color: #3498db;
  height: 100%;
  width: 200px;
  position: fixed;
  top: 0;
  left: -200px;
  transition: left 0.3s ease-in-out;
  padding-top: 20px;
}

.sidebar.open {
  left: 0;
}

.sidebar h3 {
  color: #fff;
  text-align: center;
  font-size: 24px;
}

.sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar li {
  margin-bottom: 10px;
  text-align: center;
}

.sidebar li a {
  color: #fff;
  font-size: 18px;
  text-decoration: none;
  display: block;
  padding: 10px;
  border-radius: 5px;
}

.sidebar li a:hover {
  background-color: #2980b9;
}

#menu-toggle {
  position: absolute;
  top: 10px;
  right: -40px;
  font-size: 36px;
  background-color: #3498db;
  color: #fff;
  border: none;
  padding: 5px 10px;
  border-radius: 5px 0 0 5px;
  cursor: pointer;
}

#menu-toggle:focus {
  outline: none;
}
.sidebar ul li a {
  transition: all 0.2s ease-in-out;
}

.sidebar ul li a:hover {
  transform: scale(1.05);
}
#myButton:hover {
  transform: scale(1.1); 
  transition: transform 0.2s ease-in-out; 
}
</style>

<body>
<div class="sidebar">
  <button id="menu-toggle">&#9776;</button>
  <h3>Numara Sorgu</h3>
  <ul>
    <li style="font-family: 'Maven Pro', sans-serif;""><a href="main.php">Ana Sayfa</a></li>
    <li><a href="main.php">Numara Sorgulama</a></li>
    <li><a href="add.php">Numara Ekle</a></li>
    <li><a href="delete.php">Numara Kaldırma Talebi</a></li>
    <li><a href="premium.php">Premium Satın Al</a></li>
    <li><a href="#contact" class="scroll-link">İletişim</a></li>
    <li><a href="#info" class="scroll-link">Hakkımızda</a></li>
    <li><a href="terms.php" target="_blank" >Kullanım Koşulları</a></li>
  </ul>
</div>
<script>
  var menuToggle = document.getElementById('menu-toggle');
var sidebar = document.querySelector('.sidebar');

menuToggle.addEventListener('mouseenter', function(){
  sidebar.classList.add('open');
});

sidebar.addEventListener('mouseleave', function(){
  sidebar.classList.remove('open');
});

</script>
<script>
  var menuToggle = document.getElementById('menu-toggle');
  var sidebar = document.querySelector('.sidebar');

  menuToggle.addEventListener('click', function(){
    sidebar.classList.toggle('open');
  });
</script>

    <div class="container">
        <h2 style="text-align: center; font-family: 'Maven Pro', sans-serif;">Numara Sorgulama</h2>
        <form action="sonuc.php" method="post">
            <label for="numara" style= "font-family: 'Maven Pro', sans-serif;">Numara</label>
            <input type="text" name="numara" id="numara" placeholder="+90 Olmadan yazınız." pattern="\d{1,10}" minlength="10" maxlength ="10" required>
            <input type="submit" value="Sorgula" id="myButton">
        </form>
</div>
    <div class="bottom">
		<h2 style="font-family: 'Maven Pro', sans-serif;  ">Numara eklemek için <a href="add.php">buraya</a> tıklayın</h2>
	</div><br><br><br>
<div id="info">
<div class="infoform">
    <section id="info">
        <h1>Hakkımızda</h1>
        <p stlye="font-family: 'Maven Pro', sans-serif;">Numara sorgu sitemiz, havuz sistemi ile çalışmakta olup, kullanıcılarımızın girdiği verileri işleyerek sonuçları sunmaktadır. Sistemimizin doğruluğu konusunda herhangi bir garanti vermemekteyiz ve hiçbir yasal yükümlülük kabul etmemekteyiz. Bu nedenle, sitemizi kullanmadan önce lütfen şartlarımızı okuyunuz ve kullanım koşullarına uygun olarak hareket ediniz.</p>
    </section>
</div>
</div>
<div id="contact">
<div class="infoform">
    <section id="contact">
        <h1>İletişim</h1>
        <div class="contact-icons">
            <a href="https://discord.gg/kexCb3Sk" target="_blank"><img src="img\\discord.png" alt="Discord" width="70px"></a>
            <a href="https://t.me/telegram_adresiniz" target="_blank"><img src="img\\telegram.png" alt="Telegram" width="70px"></a>
        </div>
    </section>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Kaydırma işlemini gerçekleştiren işlev
    $('a.scroll-link').on('click', function(e) {
      e.preventDefault();
      var target = this.hash;
      var $target = $(target);
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top
      }, 900, 'swing', function() {
        window.location.hash = target;
      });
    });
  });
</script>
<style>
.contact-icons {
    display: inline-block;
}
</style>

</body>
</html>
