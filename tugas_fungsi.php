<?php
// TUGAS 1: Fungsi untuk menentukan bilangan terbesar
echo "TUGAS 1: BILANGAN TERBESAR<br>";

function bilanganTerbesar($angka1, $angka2) {
    if ($angka1 > $angka2) {
        return $angka1;
    } else {
        return $angka2;
    }
}

$bil1 = 1000;
$bil2 = 2000;
echo "Bilangan pertama: $bil1<br>";
echo "Bilangan kedua: $bil2<br>";
echo "Bilangan terbesar adalah: " . bilanganTerbesar($bil1, $bil2);
echo "<br><br>";

// TUGAS 2: Menampilkan tanggal dengan getdate()
echo "TUGAS 2: TANGGAL DENGAN GETDATE <br>";

$sekarang = getdate();
$tanggal = $sekarang["mday"];
$bulan = $sekarang["mon"];
$tahun = $sekarang["year"];

echo "Tanggal sekarang: " . sprintf("%02d-%02d-%d", $tanggal, $bulan, $tahun);
echo "<br><br>";

// TUGAS 3: Menampilkan tanggal dengan date()
echo "TUGAS 3: TANGGAL DENGAN DATE <br>";

echo "Tanggal sekarang: " . date('d-F-Y');
echo "<br><br>";
