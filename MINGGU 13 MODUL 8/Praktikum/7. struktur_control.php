<?php
//if
$user = "Admin";
if ($user == "Admin") {
    echo "Selamat Datang Kembali " . $user;
}
echo "</br>";
//ifelse
$user = "User1";
if ($user == "Admin") {
    echo "Selamat Datang Kembali " . $user;
} else {
    echo "anda bukan admin";
}

echo "</br>";
$user = "User1";
$password = "pass";
if ($user == "Admin" and $password == "pass") { //bisa OR bisa AND
    echo "Selamat Datang Kembali " . $user;
} else {
    echo "anda bukan admin";
}
echo "</br>";
echo "</br>";

//switch
$harike = 9;
switch ($harike) {
    case 1:
        echo "senin";
        break;
    case 2:
        echo "selasa";
        break;
    case 3:
        echo "rabu";
        break;
    case 4:
        echo "kamis";
        break;
    case 5:
        echo "jumat";
        break;
    case 6:
        echo "sabtu";
        break;
    case 7:
        echo "minggu";
        break;
    default:
        echo "Hari tidak valid";
        break;
}
echo "</br>";
echo "</br>";

//for
for ($i = 0; $i < 10; $i++) {
    echo "</br>";
    echo $i;
}
echo "</br>";
echo "</br>";

//while
$i = 0;
while($i < 10){
    echo $i;
    echo "</br>";
    $i++;
}
//do while
$x=0;
do{
    echo $x;
    $x++;
    echo "</br>";
} while ($x < 10);
echo "</br>";
echo "</br>";

//for loop untuk array
$nama = ["Saya", "Aku", "Zidan", "irfan", "Zaky"];
for($i = 0; $i < 5; $i++){
    echo $nama[$i];
    echo "</br>";
}
echo "</br>";
echo "</br>";

//for each untuk array
$nama = ["Saya", "Aku", "Zidan", "irfan", "Zaky"];
foreach($nama as $n){
    echo $n;
    echo "</br>";
}
echo "</br>";
echo "</br>";

//for each untuk assosiation array
$pemain = [
    1 => "Saya",
    5 => "Aku",
    11 => "Zidan",
    10 => "IRfan",
    90 => "Zaky",
];
foreach($pemain as $key => $value){
    echo "</br>";
    echo $key. " Adalah nomor punggung dari " . $value;
}
?>