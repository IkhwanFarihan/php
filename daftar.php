<?php 
session_start();
$conn = mysqli_connect("localhost","root","","trykelas");


require 'function.php';

if(isset($_POST["submit"]))
{
    if(tambah($_POST) > 0)

    {
        echo "<script>
        
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php'
        </script>
        
        
        ";
    }
    else
    {
        echo "<script>
        
        alert('data gagal ditambahkan');
        document.location.href = 'index.php'
     </script>
    
    
        ";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daftar Tuisyen</title>
    
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="mt-5">
                BORANG PENDAFTARAN KELAS TUISYEN ONLINE SESI 2022
                </h1>
                <p><strong> Terma Syarat</strong> :1.Pelajar perlu masuk kedalam kelas online zoom mengikut jadual yang ditetapkan tanpa sebarang kelewatan.  2.Pelajar perlu on camera dan fokus semasa sesi kelas berlangsung. 3.Pastikan bersedia dengan alat tulis dan modul khas yang akan diposkan.</p>
                <p><strong>Yuran</strong> 1.Invois yuran bulanan akan dihantar kepada anda pada setiap bulan. 2.Bayaran perlu dijelaskan sebelum kelas pada bulan tersebut berlangsung.</p>
            </div>
            <div class="col-md-12 mt-4" style="background-color: wheat;">
                <form action="" method="post" enctype="multipart/form-data">
                 <ul>
                    <div class="mb-3 mt-4">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3 ">
                            
                           <label for="jantina">Jantina</label><br>
                           <select name="jantina" id="jantina" class="form-select">
                            <option value="Lelaki">Lelaki</option>
                            <option value="Perempuan">Perempuan</option>
                           </select>
                  
                    </div>
                    <div class="mb-3">
                            <label for="tarikh" class="form-label">Tarikh Lahir Pelajar</label>
                            <input type="text" class="form-control" id="tarikh" name="tarikh">
                    </div>
                    <div class="mb-3">
                            <label for="sekolah" class="form-label">Pelajar Bersekolah Di..</label>
                            <input type="text" class="form-control" id="sekolah" name="sekolah">
                    </div>
                    <div class="mb-3">
                            <label for="telefon" class="form-label">No. Telefon Pelajar (Jika Ada)</label>
                            <input type="number" class="form-control" id="telefon" name="telefon">
                    </div>
                    <div class="mb-3 ">
                        <label for="">Darjah</label>
                        <select name="darjah" id="darjah" class="form-select">
                            <option value="Darjah 1">Darjah 1</option>
                            <option value="Darjah 2">Darjah 2</option>
                            <option value="Darjah 3">Darjah 3</option>
                            <option value="Darjah 4">Darjah 4</option>
                            <option value="Darjah 5">Darjah 5</option>
                            <option value="Darjah 6">Darjah 6</option>
                            
                        </select>
                            
                            
                  
                    </div>
                    <div class="mb-3 ">
                            
                            <label for="">Subjek</label><br>
                            <select name="subjek" id="subjek" class="form-select">
                                <option value="Bahasa Melayu">Bahasa Melayu</option>
                                <option value="English">English</option>
                                <option value="Matematik">Matematik</option>
                                <option value="Sains">Sains</option>
                            </select>
                            
                        </div>
                        <div class="mb-3">
                            <label for="ibu" class="form-label">Nama Ibu/Bapa</label>
                            <input type="text" class="form-control" id="ibu" name="ibu">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="kerja" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control" id="kerja" name="kerja">
                        </div>
                        <div class="mb-3 ">
                            
                           <label for="">Hubungan Anda Dengan Pelajar</label><br>
                           <select name="hubungan" id="hubungan" class="form-select">
                            <option value="ibu">Ibu</option>
                            <option value="bapa">Bapa</option>
                            <option value="penjaga">Penjaga</option>
                           </select>
                  
                    </div>
                    <div class="mb-3">
                            <label for="penjaga" class="form-label">No Telefon Ibu/Bapa/Penjaga Untuk Dihubungi</label>
                            <input type="text" class="form-control" id="penjaga" name="penjaga">
                    </div>
                 </ul>
                 <div class="col-md-6 mx-auto text-center mb-4">
 
                     <button class="mx-auto text-center btn btn-success" type="submit" name="submit">Hantar Borang</a></button>
                     <p class="mt-4"> *Sekiranya anda mengalami masalah semasa menghantar borang ini <a href="">KLIK DSINI</a> </p>
                 </div>
                </form>
            </div>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>