<?php
$value ='ULZA';
$value2 = 'GANTENG';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>Ini Halaman Peengesetan cookie</h1>";

echo "<h2>klik <a href='cookie02.php'>di sini</a> Untuk pemeriksaan cookie</h2>";
?>