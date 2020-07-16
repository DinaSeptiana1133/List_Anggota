<?php 
require_once 'koneksi/db.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
  header('Location: index.php');
}

$email 		    = $_POST['email'];
$password 	  = $_POST['password'];

$sql 	        = "SELECT nama_lengkap, email, password, is_admin FROM users WHERE email = '".$email."'";
$query 	      = $conn->query($sql)or die('Error: '. $conn->error);
$user         = $query->fetch_assoc();

if(is_null($user)){
  header('Location: index.php');
}

if(password_verify($password, $user['password'])){
  
  if ($user['is_admin'] == 0){
    $_SESSION['level'] = 0; 
    $_SESSION['email'] = $user['email'];
    $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
    header('Location: user/index.php');
  } else {
    $_SESSION['level'] = 1;
    $_SESSION['email'] = $user['email'];
    $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
    header('Location: admin/index.php');
  }
} else {
  header('Location: index.php');
}
?>