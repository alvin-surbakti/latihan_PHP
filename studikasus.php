<?php
echo "<h1>Sistem Manajemen Mahasiswa - Demo Percabangan PHP</h1>";
echo "<hr>";
// KASUS 1: SISTEM LOGIN SEDERHANA
echo "<h2>1. Sistem Login Sederhana</h2>";

function login($username, $password) {
    $users = [
        'admin' => 'admin123',
        'dosen' => 'dosen123', 
        'mahasiswa' => 'mhs123'
    ];
    
    if (isset($users[$username])) {
        if ($users[$username] === $password) {
            return "Login berhasil! Selamat datang, " . ucfirst($username);
        } else {
            return "Password salah!";
        }
    } else {
        return "Username tidak ditemukan!";
    }
}

// Contoh penggunaan
$test_users = [
    ['admin', 'admin123'],
    ['dosen', 'salah'],
    ['mahasiswa_baru', 'test123']
];

foreach ($test_users as $user) {
    echo "Login: {$user[0]} / {$user[1]} → " . login($user[0], $user[1]) . "<br>";
}

echo "<hr>";


// KASUS 2: SISTEM PENILAIAN MAHASISWA
echo "<h2>2. Sistem Penilaian Mahasiswa</h2>";

function hitungGrade($nilai) {
    if ($nilai >= 90) {
        $grade = 'A';
        $predikat = 'Lulus dengan Pujian';
    } elseif ($nilai >= 80) {
        $grade = 'B';
        $predikat = 'Lulus dengan Sangat Baik';
    } elseif ($nilai >= 70) {
        $grade = 'C';
        $predikat = 'Lulus dengan Baik';
    } elseif ($nilai >= 60) {
        $grade = 'D';
        $predikat = 'Lulus';
    } else {
        $grade = 'E';
        $predikat = 'Tidak Lulus';
    }
    
    return [
        'nilai' => $nilai,
        'grade' => $grade,
        'predikat' => $predikat
    ];
}

$nilai_mahasiswa = [95, 85, 75, 65, 45];
foreach ($nilai_mahasiswa as $nilai) {
    $hasil = hitungGrade($nilai);
    echo "Nilai: {$hasil['nilai']} → Grade: {$hasil['grade']} ({$hasil['predikat']})<br>";
}

echo "<hr>";

// KASUS 3: SISTEM VALIDASI PENDAFTARAN MAHASISWA
echo "<h2>3. Validasi Pendaftaran Mahasiswa Baru</h2>";

function validasiPendaftaran($data) {
    $errors = [];
    
    // Validasi nama
    if (empty($data['nama'])) {
        $errors[] = "Nama wajib diisi";
    } elseif (strlen($data['nama']) < 3) {
        $errors[] = "Nama minimal 3 karakter";
    }
    
    // Validasi umur
    if (!isset($data['umur']) || $data['umur'] < 17) {
        $errors[] = "Umur minimal 17 tahun";
    } elseif ($data['umur'] > 35) {
        $errors[] = "Umur maksimal 35 tahun";
    }
    
    // Validasi email
    if (empty($data['email'])) {
        $errors[] = "Email wajib diisi";
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    }
    
    // Validasi nilai UN
    if (!isset($data['nilai_un']) || $data['nilai_un'] < 60) {
        $errors[] = "Nilai UN minimal 60";
    }
    
    if (empty($errors)) {
        return "Pendaftaran DITERIMA! Selamat bergabung di universitas kami.";
    } else {
        return "Pendaftaran DITOLAK. Error: " . implode(", ", $errors);
    }
}

// Contoh data pendaftaran
$calon_mahasiswa = [
    ['nama' => 'Ahmad Budi', 'umur' => 18, 'email' => 'ahmad@email.com', 'nilai_un' => 85],
    ['nama' => 'Si', 'umur' => 16, 'email' => 'invalid-email', 'nilai_un' => 55],
    ['nama' => 'Siti Nurhaliza', 'umur' => 19, 'email' => 'siti@email.com', 'nilai_un' => 90]
];

foreach ($calon_mahasiswa as $index => $data) {
    echo "Calon " . ($index + 1) . ": " . validasiPendaftaran($data) . "<br>";
}

echo "<hr>";

// KASUS 4: SISTEM PEMBAYARAN SPP
echo "<h2>4. Sistem Status Pembayaran SPP</h2>";

function cekStatusSPP($bulan_terakhir_bayar, $bulan_sekarang) {
    $tunggakan = $bulan_sekarang - $bulan_terakhir_bayar;
    
    if ($tunggakan <= 0) {
        $status = "Lunas";
        $aksi = "Dapat mengikuti perkuliahan";
        $denda = 0;
    } elseif ($tunggakan == 1) {
        $status = "Terlambat 1 bulan";
        $aksi = "Peringatan pertama";
        $denda = 50000;
    } elseif ($tunggakan <= 3) {
        $status = "Terlambat {$tunggakan} bulan";
        $aksi = "Tidak dapat mengikuti ujian";
        $denda = $tunggakan * 75000;
    } else {
        $status = "Menunggak lebih dari 3 bulan";
        $aksi = "Dikeluarkan dari perkuliahan";
        $denda = $tunggakan * 100000;
    }
    
    return [
        'tunggakan' => $tunggakan,
        'status' => $status,
        'aksi' => $aksi,
        'denda' => $denda
    ];
}

$mahasiswa_spp = [
    ['nama' => 'Kiboy', 'bulan_terakhir' => 9, 'bulan_sekarang' => 9],
    ['nama' => 'Kairi', 'bulan_terakhir' => 8, 'bulan_sekarang' => 9],
    ['nama' => 'Sanz', 'bulan_terakhir' => 6, 'bulan_sekarang' => 9],
    ['nama' => 'Lutpi', 'bulan_terakhir' => 5, 'bulan_sekarang' => 9]
];

foreach ($mahasiswa_spp as $mhs) {
    $status = cekStatusSPP($mhs['bulan_terakhir'], $mhs['bulan_sekarang']);
    echo "{$mhs['nama']}: {$status['status']} → {$status['aksi']}";
    if ($status['denda'] > 0) {
        echo " (Denda: Rp " . number_format($status['denda'], 0, ',', '.') . ")";
    }
    echo "<br>";
}

echo "<hr>";

// KASUS 5: SISTEM REKOMENDASI MATA KULIAH
echo "<h2>5. Sistem Rekomendasi Mata Kuliah</h2>";

function rekomendasiMataKuliah($semester, $ipk, $sks_lulus) {
    $max_sks = 0;
    $rekomendasi = [];
    
    // Menentukan maksimal SKS berdasarkan IPK
    if ($ipk >= 3.5) {
        $max_sks = 24;
    } elseif ($ipk >= 3.0) {
        $max_sks = 21;
    } elseif ($ipk >= 2.5) {
        $max_sks = 18;
    } else {
        $max_sks = 15;
    }
    
    // Rekomendasi berdasarkan semester
    if ($semester <= 2) {
        $rekomendasi[] = "Fokus pada mata kuliah dasar";
        $rekomendasi[] = "Perkuat kemampuan matematika dan bahasa";
    } elseif ($semester <= 4) {
        $rekomendasi[] = "Mulai ambil mata kuliah jurusan";
        $rekomendasi[] = "Pertimbangkan organisasi kemahasiswaan";
    } elseif ($semester <= 6) {
        $rekomendasi[] = "Fokus pada mata kuliah keahlian";
        $rekomendasi[] = "Mulai cari topik untuk skripsi";
    } else {
        $rekomendasi[] = "Selesaikan mata kuliah wajib";
        $rekomendasi[] = "Fokus pada penyelesaian skripsi";
    }
    
    // Peringatan khusus
    if ($sks_lulus < ($semester - 1) * 18) {
        $rekomendasi[] = "PERINGATAN: SKS terlalu sedikit untuk semester ini!";
    }
    
    return [
        'max_sks' => $max_sks,
        'rekomendasi' => $rekomendasi
    ];
}

$data_mahasiswa = [
    ['nama' => 'Pahlevi', 'semester' => 3, 'ipk' => 3.8, 'sks_lulus' => 40],
    ['nama' => 'Sze', 'semester' => 5, 'ipk' => 2.9, 'sks_lulus' => 65],
    ['nama' => 'Sanz', 'semester' => 7, 'ipk' => 3.2, 'sks_lulus' => 110],
    ['nama' => 'Gebi', 'semester' => 2, 'ipk' => 2.3, 'sks_lulus' => 15]
];

foreach ($data_mahasiswa as $mhs) {
    $hasil = rekomendasiMataKuliah($mhs['semester'], $mhs['ipk'], $mhs['sks_lulus']);
    echo "<strong>{$mhs['nama']}</strong> (Semester {$mhs['semester']}, IPK {$mhs['ipk']})<br>";
    echo "• Maksimal SKS: {$hasil['max_sks']}<br>";
    foreach ($hasil['rekomendasi'] as $rekomendasi) {
        echo "• {$rekomendasi}<br>";
    }
    echo "<br>";
}

echo "<hr>";
echo "<p><em>Demo selesai.</em></p>";
?>