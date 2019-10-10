<!DOCTYPE html>
<html>
<body>

<?php 
$x = 75;
$y = 25; 
//menggunakan super variabel global $ GLOBALS
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>

</body>
</html>
