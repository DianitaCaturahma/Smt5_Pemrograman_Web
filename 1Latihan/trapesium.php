<?php

/*
Nama : Dianita Caturahma
NIM : 210511147
Prodi : TIF
*/


echo "<h3> Menghitung Luas Trapesium<h3/>";
$a = 50;
$b = 14;
$sisi = 15;
$t = 17;
$d1 = 10;
$d2 = 20; 


$luas = ($d1 + $d2)/2 * $t;
$keliling = (2 * $sisi) + $a + $b ;

echo "Panjang sisi bagian atas = ". $a;
echo "<br/>";
echo "panjang alas = ". $b;
echo "<br/>";
echo "Panjang sisi bagian kanan = ". $sisi;
echo "<br/>";
echo "panjang sisi bagian kiri = ". $sisi;
echo "<br/>";
echo "Tinggi Trapesium = ". $t;
echo "<br/>";
echo "<br/>";
echo "Luas = ". $luas;
echo "<br/>";
echo "keliling = ". $keliling
?>