<?php 
session_start();
$conn = mysqli_connect("localhost","root","","trykelas");

require 'function.php';

// if(isset ($_POST["submit"]))
// {
// //     $nama =$_POST["nama"];
// //     $kad = $_POST["kad"];
// //     $kelas = $_POST["kelas"];
// //     $tarikh = $_POST["tarikh"];

// //     $query = "INSERT INTO pelajar VALUES ('','$nama','$kad','$kelas','$tarikh')";
// //     mysqli_query ($con,$query);
// //     echo
    
// //         "<script>
// //         alert('data inserted');
// //         </script>";
    


//     if(kemana($_POST) > 0)

//     {
//         echo "<script>
        
//             alert('data berhasil ditambahkan');
//             document.location.href = 'index.php'
//         </script>
        
        
//         ";
//     }
//     else
//     {
//         echo "<script>
        
//         alert('data gagal ditambahkan');
//         document.location.href = 'index.php'
//      </script>
    
    
//         ";
//     }
 


 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data Pelajar</title>
  </head>
  <body>
    <?php 
    require 'menu.php';
    ?>
    <h1 class=" text-center mx-auto mt-5">Tambah Data Pelajar</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" enctype="multipart/form-data" class="mt-5">
                    <ul class="">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                            
                        <div class="mb-3">
                            <label for="kad" class="form-label">kad Pengenalan</label>
                            <input type="number" class="form-control" id="kad" name="kad">
                        </div>
                        
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas">
                        </div>
                            
                        <div class="mb-3">
                            <label for="tarikh" class="form-label">Tarikh Masuk</label>
                            <input type="datetime-local" class="form-control" id="tarikh" name="tarikh">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-danger">Tambah Data Pelajar</button>
                        </div>
                    </ul>
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>