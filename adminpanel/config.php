<?php

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'numarasorgu');


$link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Bağlantı hatası kontrolü
if ($link === false) {
    die("Hata: Veritabanı bağlantısı başarısız. " . mysqli_connect_error());
}
?>
