<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM tb_mahasiswa";
$result = mysqli_query($koneksi, $query);

$no = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>
</head>
<body>
    <h2>Tambah Data</h2>
    <form action="tambah.php" method="POST">
        
            <label>ID:</label>
            <input type="text" name="id" class="form-control" required>
        
            <label>Nama:</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        
            <label>Waktu:</label>
            <textarea name="waktu_kegiatan" class="form-control" required></textarea>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
   <table>
</body>
</html>