<?php
// Soal 3
$produk = [
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 8500000, "rating" => 4.8],
    ["nama" => "Headset", "kategori" => "Aksesoris", "harga" => 250000, "rating" => 4.5],
    ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 6000000, "rating" => 4.7]
];

// Cari produk dengan harga tertinggi
$harga_tertinggi = 0;
$produk_termahal = "";
foreach ($produk as $p) {
    if ($p["harga"] > $harga_tertinggi) {
        $harga_tertinggi = $p["harga"];
        $produk_termahal = $p["nama"];
    }
}

echo "Produk dengan harga tertinggi adalah: $produk_termahal (Rp " . number_format($harga_tertinggi, 0, ',', '.') . ")<br>";
?>
