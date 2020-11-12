<?php
$value = 'achmatim';
$value2 = 'Labibah raihanatul salwa';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>Ini halaman pengesetan cookie</h1>";

echo "<h2>Klik <a href='cookie02.php'>disini</a> untuk pemeriksaan cookies</h2>";
?>