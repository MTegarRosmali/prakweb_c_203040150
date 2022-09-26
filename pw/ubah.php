<?php  
// M.Tegar Nurul Fuad Rosmali
// 203040150
// Praktikum Web 2022

require 'functions.php';
 
// jika tidak ada id di URL
if (!isset($_GET['id'])){
    header("location: index.php");
    exit;
}
  
// ambil id dari URl
$id = $_GET['id'];
 
// cari handphone berdasarkan id
$bk = query("SELECT *FROM buku WHERE id= $id");

// cek apakah tombol ubah sudah ditekan
if(isset($_POST['ubah'])) {
    if( ubah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
              </script>";
    } else{
        echo "data gagal diubah!";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ubah Data buku</title>
</head>
<body class = "bg-dark">
<div class="container ">
    <div class="card mt-5 bg-info text-light">
        <div class="card-body text-light">
            <h3>Ubah Data Buku</h3>
            <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $bk['id']; ?>">
                <ul>
                    <li>
                        <input type="hidden" name="gambar_lama" required value="<?= $bk['gambar']; ?>">
                        <label>
                            Gambar :
                            <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                        </label>
                        <img src="img/<?= $bk['gambar']; ?>" width="120" style="display: block;" class="img-Preview">
                    </li>
                    <li>
                        <label>
                            Nama Buku :
                            <input type="text" name="judul_buku" required value="<?= $bk['judul_buku']; ?>">
                        </label>
                    </li>
                    <li>
                        <label>
                            Penerbit :
                            <input type="text" name="nama_penerbit" required value="<?= $bk['nama_penerbit']; ?>">
                        </label>
                    </li>
                    <li>
                        <label>
                            Tanggal Terbit :
                            <input type="date" name="tanggal_terbit" required value="<?= $bk['tanggal_terbit']; ?>">
                        </label>
                    <li>
                    <button class="add mb-3 btn btn-primary rounded-pill" type="submit" name="ubah">ubah Data</button>
                    </li>
                    <li>
                        <button class="add mb-3 btn btn-primary rounded-pill">
                            <a href="index.php" style="text-decoration:none;color:white;">Kembali</a>
                        </button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
    <script src="script.js"></script>
</body>
</html>