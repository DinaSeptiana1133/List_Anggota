<?php
$conn = mysqli_connect("localhost", "root", "", "daftar_kelas");

function query($query){
    global $conn;
    
$result         = mysqli_query($conn, $query);
$rows           = [];
while($row      = mysqli_fetch_assoc($result)){
    $rows[]     = $row;
}
return $rows;
}

function edit($data){
    global $conn;

    $id                 = $data["id"];
    $nama               = htmlspecialchars($data["nama"]);
    $email              = htmlspecialchars($data["email"]);
    $alamat             = htmlspecialchars($data["alamat"]);
    $tanggal_lahir      = htmlspecialchars($data["tanggal_lahir"]);
    $jenis_kelamin      = htmlspecialchars($data["jenis_kelamin"]);
    $tempat_lahir       = htmlspecialchars($data["tempat_lahir"]);
    $golongan_darah     = htmlspecialchars($data["golongan_darah"]);
    $agama              = htmlspecialchars($data["agama"]);
    $nama_ayah          = htmlspecialchars($data["nama_ayah"]);
    $nama_ibu           = htmlspecialchars($data["nama_ibu"]);
    $no_hp              = htmlspecialchars($data["no_hp"]);
    $nama_panggilan     = htmlspecialchars($data["nama_panggilan"]);
    $motto              = htmlspecialchars($data["motto"]);
    $anak_ke            = htmlspecialchars($data["anak_ke"]);
    $tinggi             = htmlspecialchars($data["tinggi"]);
    $berat              = htmlspecialchars($data["berat"]);
    $no_ortu            = htmlspecialchars($data["no_ortu"]);
    $alamat_ortu        = htmlspecialchars($data["alamat_ortu"]);
    $hobby              = htmlspecialchars($data["hobby"]);
    $penyakit           = htmlspecialchars($data["penyakit"]);
    $gambarLama         = htmlspecialchars($data["gambarLama"]);

    if($_FILES['gambar']['error'] === 4 ){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE daftar SET nama='$nama', email='$email', alamat='$alamat', tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin', 
    tempat_lahir='$tempat_lahir', golongan_darah='$golongan_darah', agama='$agama', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', no_hp='$no_hp', nama_panggilan='$nama_panggilan', 
    motto='$motto', anak_ke='$anak_ke', tinggi='$tinggi', berat='$berat', no_ortu='$no_ortu', alamat_ortu='$alamat_ortu', hobby='$hobby', penyakit='$penyakit', gambar='$gambar' where id            = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile           = $_FILES['gambar']['name'];
    $ukuranFile         = $_FILES['gambar']['size'];
    $error              = $_FILES['gambar']['error'];
    $tmpName            = $_FILES['gambar']['tmp_name'];

    if($error === 4){
        echo "<script> alert ('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script> alert ('Yang anda upload bukan gambar');
        </script>";
        return false;
    }

    if($ukuranFile > 1000000){
        echo "<script> alert ('Ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'assets/img/'.$namaFileBaru);
    return $namaFileBaru;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM daftar WHERE id = $id");
    return mysqli_affected_rows($conn);
}