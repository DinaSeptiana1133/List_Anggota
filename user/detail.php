<?php
session_start();

if(isset($_SESSION["login"])){
    header("Location: ../index.php");
    exit;
}

require_once '../koneksi/db.php';
$id = $_GET["id"];
$dft = query("SELECT * FROM daftar WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">List Siswa</div>
      </a>

      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Data</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
            </li>
          </ul>
        </nav>

        <div class="container-fluid">
          <div class="card shadow mb-4">
          <a href="index.php" class="btn btn-primary col-sm-3 text-center">Kembali</a>
            <div class="card-body">
                <?php foreach($dft as $row) : ?>

                <div class="row mb-4">
                    <div class="col-sm-12 col-md-12">
                        <div class="post-block post-classic">
                            <div align="center" class="container">
                                <img src="../assets/img/<?= $row["gambar"]; ?>" width="30%" height="50%" alt="post image">
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Nama Lengkap :
                        <div class="text-white-50 small"><?= $row["nama"]; ?></div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Nama Panggilan :
                        <div class="text-white-50 small"><?= $row["nama_panggilan"]; ?></div>
                        </div>
                    </div>
                    </div>
                
                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Email :
                        <div class="text-white-50 small"><?= $row["email"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Alamat :
                        <div class="text-white-50 small"><?= $row["alamat"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Tempat Lahir :
                        <div class="text-white-50 small"><?= $row["tempat_lahir"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Tanggal Lahir :
                        <div class="text-white-50 small"><?= $row["tanggal_lahir"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Jenis Kelamin :
                        <div class="text-white-50 small"><?= $row["jenis_kelamin"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Golongan Darah :
                        <div class="text-white-50 small"><?= $row["golongan_darah"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Agama :
                        <div class="text-white-50 small"><?= $row["agama"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Anak Ke- :
                        <div class="text-white-50 small"><?= $row["anak_ke"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Tinggi Badan :
                        <div class="text-white-50 small"><?= $row["tinggi"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Berat Badan :
                        <div class="text-white-50 small"><?= $row["berat"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        No HP :
                        <div class="text-white-50 small"><?= $row["no_hp"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Hobby :
                        <div class="text-white-50 small"><?= $row["hobby"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Penyakit yang pernah diderita :
                        <div class="text-white-50 small"><?= $row["penyakit"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Motto Hidup :
                        <div class="text-white-50 small"><?= $row["motto"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Nama Ayah :
                        <div class="text-white-50 small"><?= $row["nama_ayah"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Nama Ibu :
                        <div class="text-white-50 small"><?= $row["nama_ibu"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        Alamat Orang Tua :
                        <div class="text-white-50 small"><?= $row["alamat_ortu"]; ?></div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-12 text-center">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                        No HP Orang Tua :
                        <div class="text-white-50 small"><?= $row["no_ortu"]; ?></div>
                        </div>
                    </div>
                    </div>

                <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
      </section>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; DS <script>document.write(new Date().getFullYear());</script> All rights reserved</span>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik "Logout" jika anda ingin meninggalkan site ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../assets/js/sb-admin-2.min.js"></script>
  <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/js/demo/datatables-demo.js"></script>
</body>
</html>