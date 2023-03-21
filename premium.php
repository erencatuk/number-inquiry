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
        <h2 style="text-align: center; font-family: 'Maven Pro', sans-serif;">BAKIM</h2>
        <form action="sonuc.php" method="post">
            <label for="numara" style= "font-family: 'Maven Pro', sans-serif;">Müşterilerimize sunmakta olduğumuz numara sorgu hizmetimizde, daha hızlı ve kapsamlı sonuçlar elde edebilmeniz için premium özellikleri de sunmaktayız. Ancak, şu anda bu özelliklerimiz bakım aşamasındadır ve bu nedenle geçici olarak kullanılamaz durumdadır.
Müşteri memnuniyeti bizim için oldukça önemli olduğundan, premium özelliklerimizi yeniden yapılandırmaya ve en kısa sürede kullanımınıza sunmaya çalışacağız. Bu süreçte size herhangi bir aksilik yaşatmamak için elimizden geleni yapıyoruz.
Anlayışınız için teşekkür eder, herhangi bir sorunuz ya da talebiniz olursa bizimle iletişime geçmekten çekinmeyin.</label>
        </form>
<br><br><br>
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
