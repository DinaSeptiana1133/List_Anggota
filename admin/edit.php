<?php
session_start();

if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

require '../koneksi/db.php';

$id = $_GET["id"];
$df = query("SELECT * FROM daftar where id=$id")[0];

if(isset($_POST["submit"])){

    if(edit($_POST) > 0){
        echo "
            <script> alert('data berhasil diubah');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "<script> alert('data gagal diubah');
        document.location.href = 'index.php';
        </script>
        ";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit data</title>
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body class="font-weight-bold text-dark">
<center>
    <h1 class="h4 text-gray-900 mb-4">Edit Data Siswa</h1><hr>
</center>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="card-body p-0">
            <div class="row">
                <div class=" container text-center col-lg-5">
                    <div class="p-5">
                        <div class="text-center">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $df["id"]; ?> ">
                                <input type="hidden" name="gambarLama" value="<?php echo $df["gambar"]; ?> ">

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <label for="gambar"> Gambar  </label>
                                        <img src="../assets/img/<?= $df['gambar']; ?>" width="40" > 
                                        <input type="file" name="gambar" id="gambar">
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <label for="nama"> Nama  </label>
                                        <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $df["nama"]; ?>" >
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="email"> Email </label>
                                        <input class="form-control" type="text" name="email" id="email" value="<?php echo $df["email"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="alamat"> Alamat </label>
                                        <input class="form-control" type="text" name="alamat" id="alamat" value="<?php echo $df["alamat"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="tanggal_lahir"> Tanggal lahir  </label>
                                        <input class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $df["tanggal_lahir"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="jenis_kelamin"> Jenis Kelamin  </label>
                                        <input class="form-control" type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $df["jenis_kelamin"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="tempat_lahir"> Tempat lahir  </label>
                                        <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $df["tempat_lahir"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="golongan_darah"> Golongan Darah  </label>
                                        <input class="form-control" type="text" name="golongan_darah" id="golongan_darah" value="<?php echo $df["golongan_darah"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="agama"> Agama  </label>
                                        <input class="form-control" type="text" name="agama" id="agama" value="<?php echo $df["agama"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="nama_ayah"> Nama Ayah  </label>
                                        <input class="form-control" type="text" name="nama_ayah" id="nama_ayah" value="<?php echo $df["nama_ayah"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="nama_ibu"> Nama Ibu  </label>
                                        <input class="form-control" type="text" name="nama_ibu" id="nama_ibu" value="<?php echo $df["nama_ibu"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="no_hp"> No HP  </label>
                                        <input class="form-control" type="text" name="no_hp" id="no_hp" value="<?php echo $df["no_hp"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="nama_panggilan"> Nama Panggilan  </label>
                                        <input class="form-control" type="text" name="nama_panggilan" id="nama_panggilan" value="<?php echo $df["nama_panggilan"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="motto"> Motto  </label>
                                        <input class="form-control" type="text" name="motto" id="motto" value="<?php echo $df["motto"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="anak_ke"> Anak Ke-  </label>
                                        <input class="form-control" type="text" name="anak_ke" id="anak_ke" value="<?php echo $df["anak_ke"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="tinggi"> Tinggi Badan  </label>
                                        <input class="form-control" type="text" name="tinggi" id="tinggi" value="<?php echo $df["tinggi"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="berat"> Berat Badan  </label>
                                        <input class="form-control" type="text" name="berat" id="berat" value="<?php echo $df["berat"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="no_ortu"> No HP Orang Tua  </label>
                                        <input class="form-control" type="text" name="no_ortu" id="no_ortu" value="<?php echo $df["no_ortu"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="alamat_ortu"> Alamat Orang Tua  </label>
                                        <input class="form-control" type="text" name="alamat_ortu" id="alamat_ortu" value="<?php echo $df["alamat_ortu"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="hobby"> Hobby  </label>
                                        <input class="form-control" type="text" name="hobby" id="hobby" value="<?php echo $df["hobby"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="penyakit"> Penyakit yang pernah diderita anak  </label>
                                        <input class="form-control" type="text" name="penyakit" id="penyakit" value="<?php echo $df["penyakit"]; ?>">
                                    </div>
                                </div>

                                <div class="input-group">
                                    <button type="submit" class="btn btn-success btn-user btn-block" name="submit">Submit</button>
                                    <a class="text-white btn btn-success btn-user btn-block" href="index.php">Cancel</a>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
            