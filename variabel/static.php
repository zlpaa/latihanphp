<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>statis</h1>
<!-- Biasanya, ketika suatu fungsi selesai/dieksekusi, semua variabelnya akan dihapus. Namun, terkadang kita ingin variabel lokal TIDAK dihapus. Kami membutuhkannya untuk pekerjaan selanjutnya. -->

<!-- Untuk melakukannya, gunakan statickata kunci saat pertama kali mendeklarasikan variabel: -->
<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 
</body>
</html>