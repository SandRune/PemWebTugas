<?php
// menampilkan variable
$nama = "Zidan";
define("GRAVITASI", 10);
echo $nama;
echo "</br>";
echo GRAVITASI;

//Memanggil variable dalam string
$prodi = "Informatika";
echo "<p>Saya sedang berkuliah di prodi $prodi</p>";
$umur = 20;
echo "<p>Saya suda berumur $umur</p>";

// Menghapus Variable
$mobil = "Hyundai";
echo $mobil;
unset($mobil);
echo "</br>";
echo $mobil;
?>