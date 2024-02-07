<!DOCTYPE html>
<html>
<body>
<?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>
<h1>Jenis Variabel</h1>
<!-- Jenis Variabel
PHP tidak memiliki perintah untuk mendeklarasikan variabel, dan tipe datanya bergantung pada nilai variabel. -->
<?php
$x = 5;      // $x is an integer
$y = "John"; // $y is a string

echo $x;
echo $y;
?>
<!-- Untuk mendapatkan tipe data suatu variabel, gunakan fungsi var_dump(). -->
<pre>

<?php
var_dump(5);
// var_dump("John"); original
var_dump("Zalfa");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
?>

</pre>


</body>
</html>