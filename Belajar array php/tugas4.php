<?php
// Soal 4
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk matriks
echo "Matriks 3x3:<br>";
$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriks[$i][$j] . " ";
        $total += $matriks[$i][$j];
    }
    echo "<br>";
}

// Hitung jumlah total semua elemen
echo "Jumlah total semua elemen: $total<br>";
?>
