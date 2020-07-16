<?php
require_once 'koneksi/db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<img class="apple" src="assets/img/apple-1867762.jpg">
	<div class="container">
	<div class="login-box">
		<div class="login-container" >
			<form action="login.php" method="POST">
				<img class="avatar" src="assets/img/avatar.png">
				<h2>Welcome</h2>
	
				<div class="input-div-one">
					<div class="i">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" 
                              d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
						</svg>
                    </div>
                    
					<div>
						<label for="email" class="mt-4">Email</label>
						<input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
					</div>
                </div>
                
				<div class="input-div-two">
					<div>
						<label class="mt-2"> Password </label>
						<input class="form-control" type="password" name="password" placeholder="Masukkan Password" required>
                    </div>
                    
                    <div class="i">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  						    <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
  						    <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
						</svg>
					</div>
				</div>
				
				
				<div class="btn1">
					<button type="submit" name="login" class="btn btn-primary btn-block mt-4"> Login </button>	
				</div>
                
                <a class="text-white" href="register.php">Create an Account!</a>
			</form>
		</div>
	</div>		
    </div>
</body>
</html>


