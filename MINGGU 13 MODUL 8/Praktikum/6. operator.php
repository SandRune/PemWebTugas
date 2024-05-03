<?php
// aritmatika
$aritmatika1 = +11; 
$aritmatika2 = -3;
$aritmatika3 = 3 + 8;
$aritmatika4 = 7 - 9;
$aritmatika5 = 9 * 10;
$aritmatika6 = 10 / 5;
$aritmatika7 = 10 % 9;
$aritmatika8 = 2 ** 4;
var_dump($aritmatika1); echo "</br>";
var_dump($aritmatika2); echo "</br>";
var_dump($aritmatika3); echo "</br>";
var_dump($aritmatika4); echo "</br>";
var_dump($aritmatika5); echo "</br>";
var_dump($aritmatika6); echo "</br>";
var_dump($aritmatika7); echo "</br>";
var_dump($aritmatika8); echo "</br>";

echo "</br></br>";

//increment decrement
$a = 5;
echo $a;
echo "</br>";
echo ++$a;
echo "</br>";
echo $a;
echo "</br>";
$a = 7;
echo $a;
echo "</br>";
echo $a++;
echo "</br>";
echo $a;
echo "</br>";
$a = 8;
echo $a;
echo "</br>";
echo --$a;
echo "</br>";
echo $a;
echo "</br>";
$a = 1;
echo $a;
echo "</br>";
echo $a--;
echo "</br>";
echo $a;
echo "</br>";
echo "</br>";

//perbandingan
echo "</br>";
var_dump(14 < 12); 
echo "</br>";
var_dump(14 < 14); 
echo "</br>";
var_dump(14 >= 12); 
echo "</br>";
var_dump(12 <= 14); 
echo "</br>";
var_dump(14 <> 12); 
echo "</br>";
var_dump(14 == 12); 
echo "</br>";
var_dump(14 === 12); 
echo "</br>";
var_dump(150 == 1.5e2); 

echo "</br>";
echo "</br>";

// String
$str1 = "halo"."User";
echo $str1;
echo "</br>";
$a = "aku";
$b = "Mau";
$c = "Belajar";
echo $a.$b.$c;
echo "</br>";

$kalimat = 9 . " adalah kelipatan dari 3";
echo $kalimat;
echo "</br>";
$kalimat = true . " adalah data boolean atau istilahnya benar";
echo $kalimat;

//Array
$kelasA = ["Anwar", "Alam", "Rina", "Sari"];
$kelasB = ["Alex", "Rico", "Rina"];

$campur = $kelasA + $kelasB;
echo "</br>";
print_r($campur); 
echo "</br>";
var_dump($campur);
echo "</br>";

var_dump($kelasA == $kelasB); echo "<br>";
var_dump($kelasA === $kelasB); echo "<br>";
var_dump($kelasA != $kelasB); echo "<br>";
var_dump($kelasA !== $kelasB); echo "<br>";
var_dump($kelasA <> $kelasB); echo "<br>";

?>