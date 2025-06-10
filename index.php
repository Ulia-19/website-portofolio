<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM tb_mahasiswa";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <title>Hapus Data</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color:rgb(38, 119, 225); }
        tr:nth-child(even) { background-color:rgb(162, 208, 243); }
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background-color: #f44336; color: white; border: none; }
        .btn-danger:hover { background-color: #d32f2f; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .btn-primary:hover { background-color: #45a049; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>
    </head>
    <body>
      <header>
        <nav>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#tentang">Tentang Saya</a></li>
            <li><a href="#portofolio">Portofolio</a></li>
            <li class="dropdown">
            <a href="#">Lainnya</a>
          <div class="dropdown-content">
            <a href="https://www.instagram.com/ulsrhy?igsh=MWw1ZjluNjZwbGM3ZA==" target="_blank">Instagram</a>
            <a href="https://www.tiktok.com/@ulsryha?_t=ZS-8voli5JVINL&_r=1" target="_blank">TikTok</a>
          </div>
            </li> 
          </ul>
        </nav>
      </header>
    
      <main>
        <section id="beranda" class="section beranda">
          <img src="foto saya.jpg" alt="Foto Beranda">
          <div class="info">
            <h2>Hello!</h2>
            <h2>Saya Ulia Sri Rahayu</h2>
            <p>Mahasiswa aktif semester 2 Prodi Teknik Informatika, di Universitas Nahdlatul Ulama Sunan Giri</p>
            <hr style="width: 100%; height: 3px; background-color: #0d4da0; border: none;">
            <p>Scroll ke bawah untuk mengetahui lebih banyak tentang saya!</p>
          </div>
        </section>
        <section class="center-text">
          <h2>Tentang Saya</h2>
        </section>
        <section id="tentang" class="section tentang">
          <img src="foto saya.jpg" alt="Foto Tentang Saya">
          <div class="teks">
            <p>Saya adalah mahasiswa aktif program studi Teknik Informatika yang memiliki ketertarikan tinggi di bidang pengembangan perangkat lunak dan web development. Saya sedang fokus mengembangkan portofolio pribadi dan memperdalam skill di bidang Full Stack Web Development.</p>
            <p></p>
          </div>
        </section>

        <section id="portfolio" class="portfolio">
          <section class="center-text">
             <h2>Portfolio</h2>
           </section> 
    <!-- Tombol Tambah -->
    <form action="data.php" method="post">
        <button type="submit" name="tambah">➕Tambah Kegiatan</button>
    </form>
<table>
        <tr>
            <th>Id</th>
            <th>Nama Kegiatan</th>
            <th>Waktu Kegiatan</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td> 
            <td><?php echo $row['nama_kegiatan']; ?></td>
            <td><?php echo $row['waktu_kegiatan']; ?></td>
            <td>
                <a href="hapus.php?id=<?php echo $row['id']; ?>" 
                   class="btn btn-danger" 
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">EDIT</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
   
    </section>

        <section class="center-text">
          <h2>Opini</h2>
      </section>
        <section class="section opini">
          <div class="opini-item">
            <a href="https://unugiri.ac.id/" target="_blank">
            <img src="foto 4.jpg"width="150"; height="100";>
            <h3>Universitas Nahdlatul Ulama Sunan Giri</h3>
          </a>
          </div>
          <div class="opini-item">
            <a href="https://uliasrirahayu.blogspot.com" target="_blank">
              <img src="foto 5.jpg"width="150"; height="100";>
              <h3>Blogspot Saya</h3>
            </a>
          </div>
          <div class="opini-item">
            <a href="file:///C:/Users/didik/OneDrive/Documents/tugas%20html%201/biodata.html" target="_blank">
              <img src="foto 7.jpg"width="150"; height="100";>
              <h3>Membuat Biodata menggunakan HTML</h3>
            </a>
          </div>
          <div class="opini-item">
            <a href="https://www.w3schools.com/" target="_blank">
              <img src="foto 6.jpg"width="150"; height="100";>
              <h3>Belajar Pemrogaman di website W3schools</h3>
            </a>
          </div>
          <div class="opini-item">
            <a href="https://drive.google.com/drive/my-drive?hl=ID" target="_blank">
              <img src="foto 9.jpg"width="150"; height="100";>
              <h3>Laporan Pembelajaran CSS</h3>
            </a>
          </div>
          <div class="opini-item">
            <a href="https://campus.quipper.com/majors/id-teknik-informatika" target="_blank">
              <img src="foto 8.jpg"width="150"; height="100";>
              <h3>Teknik Informatika</h3>
            </a>
          </div>
        </section>
        <section class="center-text">
          <h2>Hubungi Saya</h2>
      </section>
        <section class="kontak">
            <div class="kontak-container">
              <form class="form-kontak">
               
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="Subjek">Subjek:</label>
                <input type="text" id="Subjek" name="Subjek" required>
          
                <label for="Isi Pesan">Isi Pesan:</label>
                <textarea id="Isi Pesan" name="Isi Pesan" rows="1" required></textarea>
          
                <button type="submit">Kirim</button>
              </form>
         </section>
         <section class="center-text">
          <h2>Maps</h2>
         </section>
         <section class="kontak"> 
              <div class="maps">
                <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.865379185545!2d111.93042037478787!3d-7.137739492887366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e778406f0e6e071%3A0xd1e74b50b741d6ab!2sWadang%2C%20Ngasem%2C%20Bojonegoro%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1714049638224!5m2!1sen!2sid"
                  width="300" 
                  height="250" 
                  style="border:0;" 
                  allowfullscreen="" 
                  loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
          </section>
      </main>
    
      <footer>
        <p>&copy; 2025 Ulia Sri Rahayu</p>
      </footer>
</body>
</html>