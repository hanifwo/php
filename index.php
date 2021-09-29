
<?php 

$sisiA = 30;
$sisiB = 10;
$tinggi = 12;

define ("Kons", '0.5');

$luastrapesium = Kons * ($sisiA + $sisiB) * $tinggi;

echo "Luas Trapesium = " . $luastrapesium;


echo "<br />";

$alas = 16;
$tinggi = 9;

$luassegitiga = Kons * $alas * $tinggi;

echo "Luas Segitiga = " . $luassegitiga;

echo "<br />";

$jari2 = 7 * 7;

define ('PHI', 3.14 );

$luasPermukaan = PHI * 4 * $jari2;

echo "luas Permukaan = " . $luasPermukaan;

echo "<br />";
 
$sisi = 10;

$luaspersegi = $sisi * $sisi;

echo "luaspersegi = " . $luaspersegi;

echo "<br />";

$tinggi2 = 10;
$jari = 7;

$luasTabung = PHI * 2 * ( $jari + $tinggi2 );

echo "luasTabung = " . $luasTabung;











?>