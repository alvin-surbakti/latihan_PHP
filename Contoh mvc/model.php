<?php
class Produk {
private $dataProduk = [
["id" => 1, "nama" => "Laptop", "harga" => 7500000],
["id" => 2, "nama" => "HP", "harga" => 3000000],
["id" => 3, "nama" => "Tablet", "harga" => 2500000],
];
// Mengambil semua data produk
public function getAllProduk() {
return $this->dataProduk;
}
}