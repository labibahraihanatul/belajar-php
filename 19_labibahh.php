<?php 
$Nama = [
    ["nama" => "Satria", "kelas" => "Rpl 1"],
    ["nama" => "Arsyi", "kelas" => "Rpl 2"],
    ["nama" => "Dhika", "kelas" => "Rpl 3"],
    ["nama" => "Evan", "kelas" => "Rpl 4"],
    ["nama" => "Fabian", "kelas" => "Rpl 5"],
    ["nama" => "Irfan", "kelas" => "Rpl 6"]
];
//menampilkan array
// print_r($Nama);
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Daftar Nama</title>
</head>
<body>
    <?php foreach ($Nama as $n) : ?>
    <ul>
        <li class="p">Nama : <?= $n ["nama"]; ?> Kelas : <?= $n ["kelas"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>