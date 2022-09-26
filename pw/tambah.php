<?php 
// M.Tegar Nurul Fuad Rosmali
// 203040150
// Praktikum Web 2022


require 'functions.php';
   
// cek apakah tombol tambah sudah ditekan
if(isset($_POST['tambah'])) {
    if( tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "data gagal ditembahkan!";
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
    <title>Tambah Data Buku</title>
</head>
<body class = "bg-dark">
<div class="container ">
    <div class="card mt-5 bg-danger text-light">
        <div class="card-body text-light">
            <h3>Tambah Data Handphone</h3>
            <form action="" method="POST" enctype="multipart/form-data">
            <ul> 
                <li>
                    <label>
                         Gambar :
                        <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                    </label>
                    <img src="img/a.png" width="120" style="display: block;" class="img-Preview">
                </li>
                <li>
                    <label>
                        Judul Buku :
                        <input type="text" name="judul_buku" required>
                    </label>
                </li>
                <li>
                    <label> 
                        Nama Penerbit :
                        <input type="text" name="nama_penerbit" required>
                    </label>
                </li>
                <li>
                    <label>
                        Tanggal Terbit :
                        <input type="date" name="tanggal_terbit" required>
                    </label>
                </li>
                <li>
                    <button class="add mb-3 btn btn-primary rounded-pill" type="submit" name="tambah">Tambah Data</button>
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