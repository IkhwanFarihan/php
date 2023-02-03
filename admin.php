<?php 
session_start();
require 'koneksi.php';
require 'function.php';
$daftar = query("SELECT * FROM daftar");
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a62dd69ab2.js" crossorigin="anonymous"></script>

    <title>Try Kelas</title>
  </head>
  <body>
   
    <?php 
    include 'navbar.php';
    ?>
    
   <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
           <h1>Data Pelajar</h1>
           <button class="btn btn-danger mx-auto text-center mt-5"><a href="tambah.php" class="text-light text-decoration-none">Tambah Data Pelajar</a></button>
           <button class="btn btn-danger mx-auto text-center mt-5"> <a href="" class="text-light text-decoration-none">Print</a> </button>
           <table class="text-dark mt-5 " border="1" cellpadding="10" cellspacing="0">
            <tr class="bg-primary text-light">
                <th>No</th>
                <th>Nama</th>
                <th>Jantina</th>
                <th>Sekolah</th>
                <th>Tarikh Lahir</th>
                <th>Telefon</th>
                <th>Darjah</th>
                <th>Subjek</th>
                <th>Nama Ibu/Bapa/Penjaga</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Hubungan</th>
                <th>No Telefon Penjaga</th>
                <th></th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($daftar as $row): ?>
            <tr>
                <td> <?= $i; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["jantina"]; ?></td>
                <td><?= $row["sekolah"]; ?></td>
                <td><?= $row["tarikh"]; ?></td>
                <td><?= $row["telefon"]; ?></td>
                <td><?= $row["darjah"]; ?></td>
                <td><?= $row["subjek"]; ?></td>
                <td><?= $row["ibu"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["kerja"]; ?></td>
                <td><?= $row["hubungan"]; ?></td>
                <td><?= $row["penjaga"]; ?></td>
      
                <td class="d-flex">
                   
                   
                    <a href="edit.php?id = <?= $row["id"];?>" class="text-dark text-decoration-none"><i class="fa-solid fa-pen-to-square"></i></a> |
                    <a href="delete.php?id=<?= $row["id"];?>" onclick="return confirm('yakin?');" class="text-decoration-none text-dark"><i class="fa-solid fa-trash"></i></a>
                    
            </td>
                </td>
                
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
           </table>

        </div>
    </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>