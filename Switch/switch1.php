<!DOCTYPE html>
<html>
<body>

<?php
$favcolor = "red";
//Gunakan switch pernyataan untuk memilih salah satu dari banyak blok kode yang akan dieksekusi
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        //Gunakan breakuntuk mencegah kode dari berlari ke kasus berikutnya secara otomatis
        break;
    case "blue":
        echo "Your favorite color is yellow!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
        // gunakan default pernyataan digunakan jika tidak ada yang cocok
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>