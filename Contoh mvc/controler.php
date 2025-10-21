<?php
require_once "model/Produk.php";
require_once "view/produkView.php";
class ProdukController {
public function index() {
$model = new Produk();
$view = new ProdukView();
// Ambil data dari model
$produkList = $model->getAllProduk();
// Kirim data ke view
$view->tampilkan($produkList);
}
}