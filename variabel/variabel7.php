<!DOCTYPE html>
<html>
<body>

<?php
//gunakan globalkata kunci sebelum variabel (dalam fungsi)
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
