<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Sederhana</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        h1 {
            color: #667eea;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        
        .search-box {
            margin-bottom: 30px;
            text-align: center;
        }
        
        .search-box input {
            padding: 12px 20px;
            width: 60%;
            border: 2px solid #667eea;
            border-radius: 25px;
            font-size: 16px;
            outline: none;
        }
        
        .search-box button {
            padding: 12px 30px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
            transition: background 0.3s;
        }
        
        .search-box button:hover {
            background: #764ba2;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th {
            background: #667eea;
            color: white;
            padding: 15px;
            text-align: left;
        }
        
        td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        
        tr:hover {
            background: #f5f5f5;
        }
        
        .btn-detail {
            background: #667eea;
            color: white;
            padding: 8px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: background 0.3s;
        }
        
        .btn-detail:hover {
            background: #764ba2;
        }
        
        .no-data {
            text-align: center;
            padding: 40px;
            color: #999;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Perpustakaan Sederhana</h1>
        
        <div class="search-box">
            <form action="index.php" method="GET">
                <input type="hidden" name="action" value="search">
                <input type="text" name="keyword" placeholder="Cari buku berdasarkan judul..." 
                       value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                <button type="submit">🔍 Cari</button>
                <a href="index.php" style="text-decoration: none;">
                    <button type="button">🔄 Reset</button>
                </a>
            </form>
        </div>
        
        <?php if (!empty($dataBuku)): ?>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($dataBuku as $buku): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($buku['judul']); ?></td>
                    <td><?php echo htmlspecialchars($buku['pengarang']); ?></td>
                    <td><?php echo htmlspecialchars($buku['tahun_terbit']); ?></td>
                    <td>
                        <a href="index.php?action=detail&id=<?php echo $buku['id']; ?>" class="btn-detail">
                            Detail
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <div class="no-data">
            ❌ Tidak ada buku yang ditemukan
        </div>
        <?php endif; ?>
    </div>
</body>
</html>