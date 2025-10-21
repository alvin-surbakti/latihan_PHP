<?php
// index.php - File utama aplikasi

require_once 'Controller/BukuController.php';

// Membuat instance controller
$controller = new BukuController();

// Routing sederhana
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'detail':
        // Menampilkan detail buku berdasarkan ID
        if (isset($_GET['id'])) {
            $controller->detail($_GET['id']);
        } else {
            $controller->index();
        }
        break;
        
    case 'search':
        // Menangani pencarian buku
        $controller->search();
        break;
        
    default:
        // Menampilkan halaman utama (daftar buku)
        $controller->index();
        break;
}
?>