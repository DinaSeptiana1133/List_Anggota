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
  $jenis_kelamin        = $_POST['jenis_kelamin'];
  $tempat_lahir         = $_POST['tempat_lahir'];
  $golongan_darah       = $_POST['golongan_darah'];
  $agama                = $_POST['agama'];
  $nama_ayah            = $_POST['nama_ayah'];
  $nama_ibu             = $_POST['nama_ibu'];
  $no_hp                = $_POST['no_hp'];
  $nama_panggilan       = $_POST['nama_panggilan'];
  $motto                = $_POST['motto'];
  $anak_ke              = $_POST['anak_ke'];
  $tinggi               = $_POST['tinggi'];
  $berat                = $_POST['berat'];
  $no_ortu              = $_POST['no_ortu'];
  $alamat_ortu          = $_POST['alamat_ortu'];
  $hobby                = $_POST['hobby'];
  $penyakit             = $_POST['penyakit'];

  $gambar               = $_FILES['gambar']['name'];

if($gambar != "") {
  $ekstensi_diperbolehkan               = array('png','jpg','jpeg'); 
  $x                                    = explode('.', $gambar);
  $ekstensi                             = strtolower(end($x));
  $file_tmp                             = $_FILES['gambar']['tmp_name'];   
  $angka_acak                           = uniqid();
  $nama_gambar_baru                     = $angka_acak.'-'.$gambar;

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
    move_uploaded_file($file_tmp, '../assets/img/'.$nama_gambar_baru);
      $query = "INSERT INTO daftar (nama, email, alamat, tanggal_lahir, jenis_kelamin, tempat_lahir, golongan_darah, agama, nama_ayah, nama_ibu, no_hp, nama_panggilan, motto, 
      anak_ke, tinggi, berat, no_ortu, alamat_ortu, hobby, penyakit, gambar) 
      VALUES ('$nama', '$email', '$alamat', '$tanggal_lahir', '$jenis_kelamin', '$tempat_lahir', '$golongan_darah', '$agama', '$nama_ayah', '$nama_ibu', '$no_hp', 
      '$nama_panggilan', '$motto', '$anak_ke', '$tinggi', '$berat', '$no_ortu', '$alamat_ortu', '$hobby', '$penyakit', '$nama_gambar_baru')";
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
  $query = "INSERT INTO daftar (nama, email, alamat, tanggal_lahir, jenis_kelamin, tempat_lahir, golongan_darah, agama, nama_ayah, nama_ibu, no_hp, nama_panggilan, motto, 
      anak_ke, tinggi, berat, no_ortu, alamat_ortu, hobby, penyakit, gambar) VALUES ('$nama', '$email', '$alamat', '$tanggal_lahir', '$jenis_kelamin', '$tempat_lahir', '$golongan_darah', '$agama', '$nama_ayah', '$nama_ibu', '$no_hp', 
      '$nama_panggilan', '$motto', '$anak_ke', '$tinggi', '$berat', '$no_ortu', '$alamat_ortu', '$hobby', '$penyakit', 'null')";
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
  <link rel="stylesheet" href="../assets/css/style1.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <title>Daftar Siswa Kelas</title>
  </head>
  <body>
    <center>
      <h1 class="mt-4 text-light">Tambah Data</h1> 
    <center>
    <hr>

    <section class="container-fluid">
      <section class="row">
        <section class="col-12 col-sm-6 col-md-3">
          <form class="container " method="POST" action="" enctype="multipart/form-data" align="left" >
            <div class="form-group">
              <label>Nama :</label>
              <input type="text" name="nama" autofocus="" required=""  class="form-control mr-sm-2 " placeholder="Nama Lengkap"/>
            </div>
        
            <div class="form-group">
              <label>Email :</label>
              <input type="text" name="email" class="form-control form-control-user" required="" placeholder="Alamat email"/>
            </div>

            <div class="form-group">
              <label>Alamat :</label>
              <input type="text" name="alamat" class="form-control form-control-user" required="" placeholder="Alamat sekarang"/>
            </div>

            <div class="form-group">
              <label>Tanggal Lahir :</label>
              <input type="text" name="tanggal_lahir" class="form-control form-control-user" required="" placeholder="Tahun-Bulan-Tanggal"/>
            </div>

            <div class="form-group">
              <label>Jenis Kelamin :</label>
              <input type="text" name="jenis_kelamin" class="form-control form-control-user" required="" placeholder="Jenis Kelamin"/>
            </div>

            <div class="form-group">
              <label>Tempat Lahir :</label>
              <input type="text" name="tempat_lahir" class="form-control form-control-user" required="" placeholder="Tempat Lahir"/>
            </div>

            <div class="form-group">
              <label>Golongan Darah :</label>
              <input type="text" name="golongan_darah" class="form-control form-control-user" required="" placeholder="Golongan Darah"/>
            </div>

            <div class="form-group">
              <label>Agama :</label>
              <input type="text" name="agama" class="form-control form-control-user" required="" placeholder="Agama yang dianut"/>
            </div>

            <div class="form-group">
              <label>Nama Ayah :</label>
              <input type="text" name="nama_ayah" class="form-control form-control-user" required="" placeholder="Nama Ayah Kandung"/>
            </div>

            <div class="form-group">
              <label>Nama Ibu :</label>
              <input type="text" name="nama_ibu" class="form-control form-control-user" required="" placeholder="Nama Ibu Kandung"/>
            </div>

            <div class="form-group">
              <label>No HP :</label>
              <input type="text" name="no_hp" class="form-control form-control-user" required="" placeholder="No Hp siswa"/>
            </div>

            <div class="form-group">
              <label>Nama Panggilan :</label>
              <input type="text" name="nama_panggilan" class="form-control form-control-user" required="" Placeholder="Nama Panggilan siswa"/>
            </div>

            <div class="form-group">
              <label>Motto :</label>
              <input type="text" name="motto" class="form-control form-control-user" required="" placeholder="Motto Hidup"/>
            </div>

            <div class="form-group">
              <label>Anak Ke- :</label>
              <input type="text" name="anak_ke" class="form-control form-control-user" required="" placeholder="ex: 1,2,3"/>
            </div>

            <div class="form-group">
              <label>Tinggi Badan :</label>
              <input type="text" name="tinggi" class="form-control form-control-user" required="" placeholder="ex: 154"/>
            </div>

            <div class="form-group">
              <label>Berat Badan :</label>
              <input type="text" name="berat" class="form-control form-control-user" required="" placeholder="ex: 39"/>
            </div>

            <div class="form-group">
              <label>No HP Orang Tua :</label>
              <input type="text" name="no_ortu" class="form-control form-control-user" required="" placeholder="No Hp ortu"/>
            </div>

            <div class="form-group">
              <label>Alamat Orang Tua :</label>
              <input type="text" name="alamat_ortu" class="form-control form-control-user" required="" placeholder="Alamat Ortu Sekarang"/>
            </div>

            <div class="form-group">
              <label>Hobby :</label>
              <input type="text" name="hobby" class="form-control form-control-user" required="" placeholder="Hobby siswa"/>
            </div>

            <div class="form-group">
              <label>Penyakit :</label>
              <input type="text" name="penyakit" class="form-control form-control-user" required="" Placeholder="Penyakit yang"/>
            </div>

            <div class="form-group">
              <label>Gambar :</label>
              <input type="file" name="gambar" required="" required=""/>
            </div>
          
            <div class="form-group row">
              <div class="col-sm-6 mb-3">
                <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
              </div>
          
              <div class="col-sm-6">
                <a class=" btn btn-danger" href="index.php">Cancel</a>
              </div>
            </div>
          </form>
        </section>
      </section>
    </section>
</body>
</html>