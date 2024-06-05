<!DOCTYPE html>
<html>
<head>
    <title>Program 9.1</title>
</head>
<body>

    <form method="post">
        <label for="gaji">Masukkan Gaji: </label>
        <input type="number" id="gaji" name="gaji" required>
        <input type="submit" value="Total">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gaji = $_POST['gaji'];
        $pajak = 0.1; 
        $thp = $gaji - ($gaji * $pajak); 

        echo "<p>Gaji sebelum pajak = Rp. " . number_format($gaji, 0, ',', '.') . "</p>";
        echo "<p>Gaji yang dibawa pulang = Rp. " . number_format($thp, 0, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
