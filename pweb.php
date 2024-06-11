<?php
echo"Hasil Penghitungan Gaji Karyawan<br>";
echo"<br>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gaji = $_POST['gaji'];
        $pajak = $_POST['pajak'] / 100;
        $thp = $gaji - ($gaji * $pajak);

        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp<br>";
    }
    echo"<br>";
    echo"Hasil Kalkulator Perbandingan<br>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['nilai1'];
        $b = $_POST['nilai2'];

        echo "<br>$a == $b : " . ($a == $b);
        echo "<br>$a != $b : " . ($a != $b);
        echo "<br>$a > $b : " . ($a > $b);
        echo "<br>$a < $b : " . ($a < $b);
        echo "<br>($a == $b) && ($a > $b) : " . (($a == $b) && ($a > $b));
        echo "<br>($a == $b) || ($a > $b) : " . (($a == $b) || ($a > $b));
    }
    ?>