<?php 
require 'function.php';


$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$pljr = query("SELECT * FROM pelajar WHERE id = $id");
var_dump($pljr[0]["nama"]);

if(isset($_POST["submit"]))
{
    if(ubah($_POST,$id) > 0)
    {
        echo "<script>
        
            alert('data berhasil diubah');
            document.location.href = 'index.php'
        </script>
        
        
        ";
    }
    else
    {
        echo "<script>
        
            alert('data gagal diubah');
            document.location.href = 'index.php'
        </script>
        
        
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ubah Data Mahasiswa</h1>
    <form action="" method ="post">
        <ul>
            <li>
                <label for="nama" >Nama</label>
                <input type="text" name ="nama" id ="nama" required value = "">
            </li>
            <li>
                <label for="nrp" >Nrp</label>
                <input type="text" name ="nrp" id ="nrp">
            </li>
            <li>
                <label for="email" >Email</label>
                <input type="text" name ="email" id ="email">
            </li>
            <li>
                <label for="jurusan" >Jurusan</label>
                <input type="text" name ="jurusan" id ="jurusan">
            </li>
            <li>
                <label for="gambar" >Gambar</label>
                <input type="text" name ="gambar" id ="gambar">
            </li>
            <li>
                <button type = "submit"  name="submit">Ubah Data!</button>
            </li>
        </ul>

    </form>
</body>
</html>