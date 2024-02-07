<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From</title>
</head>
<body>
<!-- Array PHP
Array menyimpan banyak nilai dalam satu variabel.

ini $carsadalah sebuah array. Fungsi PHP var_dump() mengembalikan tipe data dan nilai: -->

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?> 


<?php  
// function example:
function myFunction() {
  echo "This text comes from a function";
}

// create array:
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

// calling the function from the array item:
$myArr[3]();
?>  

</body>
</html>
