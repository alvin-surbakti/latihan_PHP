<?php
// Controller/BukuController.php

require_once 'MODEL/Buku.php';

class BukuController {
    private $model;
    
    public function __construct() {
        $this->model = new Buku();
    }
    
    // Menampilkan halaman utama dengan daftar semua buku
    public function index() {
        $dataBuku = $this->model->getAllBuku();
        require_once 'VIEW/daftar_buku.php';
    }
    
    // Menampilkan detail buku berdasarkan ID
    public function detail($id) {
        $buku = $this->model->getBukuById($id);
        require_once 'VIEW/detail_buku.php';
    }
    
    // Menangani pencarian buku
    public function search() {
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $dataBuku = $this->model->searchBukuByJudul($keyword);
        } else {
            $dataBuku = $this->model->getAllBuku();
        }
        require_once 'VIEW/daftar_buku.php';
    }
}
?>