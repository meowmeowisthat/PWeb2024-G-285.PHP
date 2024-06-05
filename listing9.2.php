<!DOCTYPE html>
<html>
<head>
    <title>Program 9.2</title>
</head>
<body>
    <h1>Perbandingan True || False</h1>
    <?php
        $a = 5; //mendeklarasikan varibel bernama a dengan value 5
        $b = 4; //mendeklarasikan varibel bernama b dengan value 4

        //pakai fungsi echo untuk menampilkan a == b : T/F
        // pakai var_export untuk mengembalikan nilai boolean string
        echo "$a == $b : " . var_export($a == $b, true) . "<br>";
        //apakah 5 != 4? T
        echo "$a != $b : " . var_export($a != $b, true) . "<br>";
        //apakah 5 > 4? T
        echo "$a > $b : " . var_export($a > $b, true) . "<br>";
        //apakah 5 < b? F
        echo "$a < $b : " . var_export($a < $b, true) . "<br>";
        echo "($a != $b) && ($a > $b) : " . var_export(($a != $b) && ($a > $b), true) . "<br>";
        echo "($a != $b) || ($a > $b) : " . var_export(($a != $b) || ($a > $b), true) . "<br>";
    ?>
</body>
</html>
