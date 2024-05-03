<?php
//membuat dan memaggil
function salam(){
    echo "halo selamat pagi";
}
salam();
    echo "</br>";
    echo "</br>";

//Parameter dalam function
$nama ="zidan";
function absen($nama){
    return $nama." hadir";
}
echo absen($nama);
echo "</br>";
echo absen("Irfan");
echo "</br>";
echo "</br>";

//parameter lebih dr 1
function jalan($mobil, $kecepatan){
    echo $mobil . " Jalan dengan kecepatan " . $kecepatan;
    echo "</br>";
}
jalan("Hyundai", 70);
jalan("Supra", 100);
echo "</br>";

//argument dengan variable
function konser($penyanyi, $hari){
    echo $penyanyi. " Akan bernyanyi pada hari " . $hari;
}
$band = "D'Masiv";
$day = "Senin";
konser($band,$day);
echo "</br>";
echo "</br>";

//return value
function tambah($a,$b){
    $c = $a + $b;
    return $c;
}
$d = tambah(3,6);
echo $d;
echo "</br>";

//default argumen
function kali($a = 0,$b =10){
    return $a * $b;
}
echo "</br>";
echo kali();
echo "</br>";
echo kali(10,100);
echo "</br>";
echo "</br>";

// anonymous function
$salam = function () {
    return "halo";
};
echo $salam();
echo "</br>";
echo "</br>";

//arrow function
$salam = fn () => "halo dunia";
echo $salam();
?>