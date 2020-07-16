<?php
require_once 'server.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Register </title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
  <style>
    body{
        background: url(assets/img/damir-bosnjak.jpg) no-repeat;
        width: 100%;
        height: 100vh;
    }
  </style>
</head>

<body>
<div class="container">
<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
	<div class="row">
	  <div class=" container text-center col-lg-7">
		<div class="p-5">
		  <div class="text-center">
        <p> Tambah Siswa user </p>
    <hr>
    <form class="user" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
      <?php include('errors.php'); ?>
      <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
          <input class="form-control form-control-user" type="text" name="nama_lengkap" value="<?= (isset($nama_lengkap)) ? $nama_lengkap : ''; ?>" id="exampleFirstName" placeholder="Username" >
          </div>
			  </div>
				  
        <div class="form-group">
  	  		<input class="form-control form-control-user" type="email" name="email" value="<?= (isset($email)) ? $email : ''; ?>" id="exampleInputEmail" placeholder="Email Address">
        </div>
                  
        <div class="form-group row">
          <div class="col-sm-6 mb-3">
  	  		  <input  class="form-control form-control-user" type="password" name="password_1" id="exampleInputPassword" placeholder="Password">
				  </div>
				  
          <div class="col-sm-6">
  	  				<input class="form-control form-control-user" type="password" name="password_2" id="exampleRepeatPassword" placeholder="Repeat Password">
				  </div> <br>
				  
  				<div class="text-center input-group">
  	  				<button type="submit" class="btn btn-primary btn-block btn-user" name="reg_user">Register</button>
          </div>
          <hr>
          <div class="col-sm-12 mt-4">
            <a class="small" href="index.php">Already have an account? Login!</a>
          </div>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/js/sb-admin-2.min.js"></script>

</body>
</html>