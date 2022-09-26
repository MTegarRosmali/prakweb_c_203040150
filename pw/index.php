<?php
// M.Tegar Nurul Fuad Rosmali
// 203040150
// Praktikum Web 2022

require 'functions.php';
$buku = query("SELECT * FROM buku");
  
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Daftar Buku</title>

</head>
<body class = "bg-dark">
<div class="container ">
  <div class="card mt-5 bg-light text-light">
    <div class="card-body text-light">
      <h1 class="display-1 text-center text-dark ">Daftar Buku Novel</h1>
      <table class="table table-bordered table-striped table-hover text-center bg-secondary text-light">
        <tr>
          <th>No</th>
          <th>Judul buku</th>
          <th>Nama Penerbit</th>
          <th>Tanggal Terbit</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>

        <?php if (empty($buku)) : ?>
        <tr>
          <td colspan="4">
            <p style="color: red; font-style: italic;">Data Buku tidak ditemukan!</p>
          </td>
        </tr>
        <?php endif; ?>

        <?php $i = 1;
        foreach ($buku as $bk) : ?>
        <tr> 
          <td><?= $i++; ?></td>
          <td><?= $bk['judul_buku']; ?></td>
          <td><?= $bk['nama_penerbit']; ?></td>
          <td><?= $bk['tanggal_terbit']; ?></td>
          <td><img src="img/<?= $bk['gambar'] ?>" width="100"></td>
          <td>
            <button class="add mb-3 btn btn-primary rounded-pill">
              <a href="ubah.php?id=<?= $bk['id']; ?>" style="text-decoration:none;color:white;">Ubah</a>
            </button>
            <button class="add mb-3 btn btn-primary rounded-pill">
              <a href="hapus.php?id=<?= $bk['id']; ?>" onclick="return confirm ('Apakah anda yakin?');" style="text-decoration:none;color:white;">Hapus</a>
            </button>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
      <div class="add mb-3 btn btn-primary rounded-pill" style="width:200px" ;>
        <a href="tambah.php" style="text-decoration:none;color:white;">Tambah Data Buku</a>
      </div>
    </div>
  </div>
</div>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>