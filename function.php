<?php
// // koneksi ke database
$conn = mysqli_connect("localhost","root","","trykelas");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    
    $rows= [];
    while ($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    return $rows;
}

// function tambah($data)
// {
//     global $conn;
//     $nama = htmlspecialchars($data["nama"]);
//     $kad = htmlspecialchars($data["kad"]);
//     $kelas = htmlspecialchars($data["kelas"]);
//     $tarikh = htmlspecialchars($data["tarikh"]);

//     // upload gambar 
//     $gambar = upload();
//     if(!$gambar )
//     {
//         return false;
//     }
    
//        // query insert data
//     $query = "INSERT INTO pelajar VALUES
//     ('','$nama','$kad','$kelas','$tarikh','$gambar')";
//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }
function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $jantina = htmlspecialchars($data["jantina"]);
    $tarikh = htmlspecialchars($data["tarikh"]);
    $sekolah = htmlspecialchars($data["sekolah"]);
    $telefon = htmlspecialchars($data["telefon"]);
    $darjah = htmlspecialchars($data["darjah"]);
    $subjek = htmlspecialchars($data["subjek"]);
    $ibu = htmlspecialchars($data["ibu"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kerja = htmlspecialchars($data["kerja"]);
    $hubungan = htmlspecialchars($data["hubungan"]);
    $penjaga = htmlspecialchars($data["penjaga"]);

    // upload gambar 
    // $gambar = upload();
    // if(!$gambar )
    // {
    //     return false;
    // }
    
       // query insert data
    $query = "INSERT INTO daftar VALUES
    ('','$nama','$jantina','$sekolah','$tarikh','$telefon','$darjah','$subjek','$ibu','$kerja','$alamat','$hubungan','$penjaga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function upload()
{
    $namaFile= $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4)
    {
    
        echo"<script>
                alert ('pilih gambar terlebih dahulu!');
        </script>";

        return false;
    }
    // cek apakah yg diupload adalah gambar
    $ekstensiGambarValid = ['jpg','png','jpeg'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar,$ekstensiGambarValid))
    {
        echo"<script>
                alert ('yang di upload bukan gambar');
                 </script>";

        return false;
    }
    // cek jika ukurannya terlalu besar
    if($ukuranFile > 1000000)
    {
            echo"<script>
                    alert ('ukuran gambar terlalu besar!');
                    </script>";

            return false;
    }
    // lulus dicek,gambar siap diupload
    // generate nama gambaer baru
    $namaFileBaru = uniqid();
    $namaFileBaru .='.';
    $namaFileBaru .=$ekstensiGambar;
    // var_dump($namaFileBaru); die;


    move_uploaded_file($tmpName,'img/'.$namaFileBaru);

    return $namaFileBaru;

    
}



function delete($id)
{
    global $conn;
    mysqli_query($conn,"DELETE FROM daftar WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $kad = htmlspecialchars($data["kad"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $tarikh = htmlspecialchars($data["tarikh"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user upload gambar baru
    if($_FILES['gambar']['error'] === 4)
    {
        $gambar= $gambarLama;
    }
    else
    {
        $gambar = upload();
    }
    
    
       // query insert data
    $query = "UPDATE daftar SET
            nama ='$nama',
            kad = '$kad',
            email='$kelas',
            tarikh = '$tarikh',
            gambar='$gambar' 
            WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa 
                WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
    return query($query);
}
function registrasi($data)
{
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek username sudah ada atau belum
    $result = mysqli_query($conn,"SELECT username FROM user WHERE username='$username'");

    if(mysqli_fetch_assoc($result))
    {
        echo "<script>
                alert('username sudah terdaftar !');
                </script>";
        return false;
    }
    


    // cek confirm password
    if($password !== $password2)
    {
        echo "<script>
        
            alert('confirm password tidak sesuai');
            </script>";

        return false;
    }
    // return 1;

    // enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // boleh tengok password org
    // $password = md5($password);
    // var_dump($password);die;
    
    
    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");
    return mysqli_affected_rows($conn);

    
}


?>