<?php
include 'koneksi.php';

$id = $_GET['id'];

// Ambil data lama
$query = "SELECT * FROM tb_mahasiswa WHERE id=$id";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}
$data = mysqli_fetch_assoc($result);

// Proses saat form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama_kegiatan']);
    $waktu = mysqli_real_escape_string($koneksi, $_POST['waktu_kegiatan']);

    $update = "UPDATE tb_mahasiswa SET 
                nama_kegiatan='$nama', 
                waktu_kegiatan='$waktu' 
                WHERE id=$id";

    if (mysqli_query($koneksi, $update)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal update: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Kegiatan</title>
</head>
<body>
    
<h2>Edit Kegiatan</h2>
<form method="post">
    <label>Id:</label><br>
    <input type="text" name="id" value="<?= $data['id'] ?>"><br><br>

    <label>Nama Kegiatan:</label><br>
    <input type="text" name="nama_kegiatan" value="<?= $data['nama_kegiatan'] ?>"><br><br>

    <label>Waktu Kegiatan:</label><br>
    <input type="text" name="waktu_kegiatan" value="<?= $data['waktu_kegiatan'] ?>"><br><br>

    <button type="submit" name="edit">Edit</button>
    <button type="submit" name="edit">Batal</button>
    
</form>

</body>
</html>