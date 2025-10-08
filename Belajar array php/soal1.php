<?php
// Soal 1
// Array 2 dimensi: [Nama, Nilai Matematika, Nilai Bahasa]
$siswa = [
    ["Yazid", 80, 90],
    ["Yoga", 75, 85],
    ["Yoyok", 90, 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa siswa ke-2 ({$siswa[1][0]}) = {$siswa[1][2]}<br><br>";

// Cetak semua data menggunakan looping
echo "Data semua siswa:<br>";
foreach ($siswa as $data) {
    echo "Nama: $data[0], Matematika: $data[1], Bahasa: $data[2]<br>";
}
?>
