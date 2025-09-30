<?php
// Perulangan menggunakan FOR
echo "<h3>Perulangan dari 100 sampai 1000 (menggunakan FOR)</h3>";
echo "<div style='margin-left: 20px;'>";
for ($i = 100; $i <= 1000; $i++) {
    echo "Nilai: " . $i . "<br>";
}
echo "</div>";

// Perulangan menggunakan WHILE
echo "<h3>Perulangan dari 100 sampai 1000 (menggunakan WHILE)</h3>";
echo "<div style='margin-left: 20px;'>";
$j = 100;
while ($j <= 1000) {
    echo "Nilai: " . $j . "<br>";
    $j++;
}
echo "</div>