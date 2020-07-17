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
                                        <img src="img/<?= $df['gambar']; ?>" width="40" > 
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
                                        <label for="tanggal_lahir"> Tanggal lahir  </label>
                                        <input class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $df["tanggal_lahir"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="umur"> Umur  </label>
                                        <input class="form-control form-control-user" type="text" name="umur" id="umur" value="<?php echo $df["umur"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="jenis_kelamin"> Jenis Kelamin  </label>
                                        <input class="form-control" type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $df["jenis_kelamin"]; ?>">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="alamat"> Alamat  </label>
                                        <input class="form-control" type="text" name="alamat" id="alamat" value="<?php echo $df["alamat"]; ?>">
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
            