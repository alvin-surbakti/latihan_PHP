<?php
class ProdukView {
public function tampilkan($produkList) {
echo "<h2>Daftar Produk</h2>";
echo "<ul>";
foreach ($produkList as $p) {
echo "<li>{$p['nama']} - Rp " . number_format($p['harga'], 0, ',', '.') .
"</li>";
}
echo "</ul>";
}
}