<!DOCTYPE html>
<html>
<body>

<?php
$t = date('H');

if ($t < "19") {
    echo $t;
    echo "Have a good day!";
    //menggunakan if else mengeksekusi beberapa kode jika kondisi benar dan kode lain jika kondisi itu adalah palsu.
} else {
    echo "Have a good night!";
    echo $t;
}
?>
 
</body>
</html>
