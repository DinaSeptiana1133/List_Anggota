<?php
session_start();

if(isset($_SESSION["login"])){
  header("Location: index.php");
  exit;
}

include('../koneksi/db.php');

if(isset($_POST["submit"])) {
  $nama                 = $_POST['nama'];
  $email                = $_POST['email'];
  $alamat               = $_POST['alamat'];
  $tanggal_lahir        = $_POST['tanggal_lahir'];
  $umur                 = $_POST['umur'];
  $jenis_kelamin        = $_POST['jenis_kelamin'];
  $gambar               = $_FILES['gambar']['name'];

if($gambar != "") {
  $ekstensi_diperbolehkan               = array('png','jpg','jpeg'); 
  $x                                    = explode('.', $gambar);
  $ekstensi                             = strtolower(end($x));
  $file_tmp                             = $_FILES['gambar']['tmp_name'];   
  $angka_acak                           = rand(1,999);
  $nama_gambar_baru                     = $angka_acak.'-'.$gambar;

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
    move_uploaded_file($file_tmp, '../img/'.$nama_gambar_baru);
      $query = "INSERT INTO daftar (nama, email, alamat, tanggal_lahir, umur, jenis_kelamin, gambar) VALUES ('$nama', '$email', '$alamat', '$tanggal_lahir', '$umur', '$jenis_kelamin', '$nama_gambar_baru')";
      $result = mysqli_query($conn, $query);

      if(!$result){
          die ("Query gagal dijalankan: ".mysqli_errno($conn).
               " - ".mysqli_error($conn));
      } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
      }

  } else {
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png, atau jpeg.');window.location='tambah.php';</script>";
  }
} else {
  $query = "INSERT INTO daftar (nama, email, alamat, tanggal_lahir, umur, jenis_kelamin, gambar) VALUES ('$nama', '$email', '$alamat', '$tanggal_lahir', '$umur', '$jenis_kelamin', 'null')";
    $result = mysqli_query($conn, $query);
    if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Daftar Siswa Kelas</title>
  </head>
  <body>
      <center>
        <h1 class="mt-4 text-primary">Tambah Data</h1> <a class="container" href="index.php">Cancel</a>
      <center>
      <form method="POST" action="" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama :</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>Email :</label>
         <input type="text" name="email" />
        </div>
        <div>
          <label>Alamat :</label>
         <input type="text" name="alamat" />
        </div>
        <div>
          <label>Tanggal Lahir :</label>
         <input type="text" name="tanggal_lahir" />
        </div>
        <div>
          <label>Umur :</label>
         <input type="text" name="umur" />
        </div>
        <div>
          <label>Jenis Kelamin :</label>
         <input type="text" name="jenis_kelamin" />
        </div>
        <div>
          <label>Gambar :</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
        </div>
        </section>
      </form>
  </body>
</html>
