<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $nama_kegiatan = mysqli_real_escape_string($koneksi, $_POST['nama_kegiatan']);
    $waktu_kegiatan = mysqli_real_escape_string($koneksi, $_POST['waktu_kegiatan']);

    // Cek apakah ID sudah ada
    $cek = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id = '$id'");
    if (mysqli_num_rows($cek) > 0) {
        header("Location: tambah.php?status=gagal&pesan=ID sudah terdaftar");
        exit();
    }

    // Query tambah data
    $query = "INSERT INTO tb_mahasiswa (id, nama_kegiatan, waktu_kegiatan) VALUES ('$id', '$nama_kegiatan', '$waktu_kegiatan')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php?status=sukses");
    } else {
        header("Location:prose_tambah.php?status=gagal");
    }
} else {
    header("Location: index.php");
}
?>
<!-- tambah.php -->
<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kegiatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Form Tambah Kegiatan</h2>
    <form action="proses_tambah.php" method="POST">
        <div class="form-group">
            <label>ID:</label>
            <input type="text" name="id" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Kegiatan:</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Waktu Kegiatan:</label>
            <textarea name="waktu_kegiatan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>


