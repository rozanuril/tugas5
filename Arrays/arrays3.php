<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Suzuki", "Yamaha", "Honda");
$arrlength = count($cars);
// for Untuk loop mencetak semua nilai-nilai array diindeks
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

</body>
</html>
