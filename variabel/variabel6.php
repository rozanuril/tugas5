<!DOCTYPE html>
<html>
<body>

<?php
//menggunakan Variabel dengan lingkup lokal
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

</body>
</html>
