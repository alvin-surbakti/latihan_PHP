<?php
require_once "controller/ProdukController.php";
// Buat controller
$controller = new ProdukController();
// Jalankan method index
$controller->index();