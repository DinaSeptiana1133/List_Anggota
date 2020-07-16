<?php
require_once 'koneksi/db.php';

$nama_lengkap     = "";
$email            = "";
$errors           = array();

if (isset($_POST['reg_user'])) {
  $nama_lengkap     = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
  $email            = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1       = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2       = mysqli_real_escape_string($conn, $_POST['password_2']);
  
  if (empty($nama_lengkap)) { array_push($errors, "Nama Lengkap wajib diisi"); }
  if (empty($email)) { array_push($errors, "Email wajib diisi"); }
  if (empty($password_1)) { array_push($errors, "Password wajib diisi"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query     = "SELECT * FROM users WHERE nama_lengkap='$nama_lengkap' OR email='$email' LIMIT 1";
  $result               = $conn->query($user_check_query);
  $user                 = $result->fetch_assoc();
  
  if ($user) {
    if ($user['nama_lengkap'] === $nama_lengkap) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = password_hash($password_1, PASSWORD_DEFAULT);

  	$query = "INSERT INTO users (nama_lengkap, email, password) 
  			  VALUES('$nama_lengkap', '$email', '$password')";
  	$conn->query($query);
  	$_SESSION['nama_lengkap'] = $nama_lengkap;
    $_SESSION['email'] = $email;
    $_SESSION['level'] = 0;
  	$_SESSION['success'] = "Berhasil login";
  	header('location: user/index.php');
  } else {
      echo "Isikan data terlebih dahulu";
  }
}
?>