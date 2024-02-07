<!DOCTYPE html>
<html>
<body>
  <!-- Operator PHP
Operator digunakan untuk melakukan operasi pada variabel dan nilai.

PHP membagi operator dalam kelompok berikut:

Operator aritmatika
Operator penugasan
Operator perbandingan
Operator Kenaikan/Penurunan
Operator logika
Operator string
Operator larik
Operator penugasan bersyarat -->
<!-- jika $tkurang dari 20: -->
<h1>Operator Aritmatika</h1>
<?php

$a = 5;
$b = 2;

// penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";

// pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

// Perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

// Pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

// Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

// Pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";

?>
<?php
$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}
?>

<!-- Operator Perbandingan
Ifpernyataan biasanya berisi kondisi yang membandingkan dua nilai.-->
<!-- $tsama dengan 14: -->
<!-- Operator Logis
 Untuk memeriksa lebih dari satu kondisi, kita dapat menggunakan operator logika, seperti &&operator:
 $alebih besar dari $b, DAN jika $akurang dari $c: -->
<h2>Penugasan PHP</h2>
<!-- Operator penugasan dasar di PHP adalah "=". Artinya operan kiri disetel ke nilai ekspresi penugasan di sebelah kanan. -->
<!-- The left operand gets set to the value of the expression on the right
 -->
<?php
$x = 10;  
echo $x;
?> 
<!-- Addition  -->
<?php
$x = 20;  
$x += 100;

echo $x;
?>  
<!-- Subtraction -->
<?php
$x = 50;
$x -= 30;

echo $x;
?>  
<!-- Multiplication -->
<?php
$x = 5;
$x *= 6;

echo $x;
?>  
<!-- Division -->
<?php
$x = 10;
$x /= 5;

echo $x;
?>  
<!-- Modulus -->
<?php
$x = 15;
$x %= 4;

echo $x;
?>  

</body>
</html>