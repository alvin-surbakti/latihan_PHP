<?php
// MODEL/Buku.php

class Buku {
    private $data = [
        [
            'id' => 1,
            'judul' => 'Belajar Coding',
            'pengarang' => 'Surbakti',
            'tahun_terbit' => 2005
        ],
        [
            'id' => 2,
            'judul' => 'Bumi Manusia',
            'pengarang' => 'Yoga',
            'tahun_terbit' => 2023
        ],
        [
            'id' => 3,
            'judul' => 'Perahu Kertas',
            'pengarang' => 'Dee Lestari',
            'tahun_terbit' => 2020
        ],
        [
            'id' => 4,
            'judul' => 'Negeri 5 Menara',
            'pengarang' => 'Ahmad Fuadi',
            'tahun_terbit' => 2009
        ],
        [
            'id' => 5,
            'judul' => 'Sang Pemimpi',
            'pengarang' => 'Andrea Hirata',
            'tahun_terbit' => 2006
        ]
    ];
    
    // Mendapatkan semua data buku
    public function getAllBuku() {
        return $this->data;
    }
    
    // Mendapatkan buku berdasarkan ID
    public function getBukuById($id) {
        foreach ($this->data as $buku) {
            if ($buku['id'] == $id) {
                return $buku;
            }
        }
        return null;
    }
    
    // Mendapatkan buku berdasarkan judul (pencarian)
    public function searchBukuByJudul($keyword) {
        $result = [];
        foreach ($this->data as $buku) {
            if (stripos($buku['judul'], $keyword) !== false) {
                $result[] = $buku;
            }
        }
        return $result;
    }
}
?>