<?php
    $gaji = 1000000; // Define the gross salary
    $pajak = 0.1; // Define the tax rate (10%)
    $thp = $gaji - ($gaji * $pajak); // Calculate the net salary after tax

    // Display the gross salary
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    
    // Display the net salary
    echo "Gaji yang dibawa pulang = Rp. $thp";
?>
