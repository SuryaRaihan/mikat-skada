<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mika Skada</title>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/header-index.css">
	<link rel="stylesheet" href="/css/daftar.css">
	<link rel="shortcut icon" type="image/png" href="/image/mika/icon-web.png">
</head>
<body>

<div class="container">
	<div class="box">
	 <div class="header">
		<h1>Daftar Akun Mika</h1>
		<p>Disarankan menggunakan email yang aktif</p>
		<?=  $validation->listErrors(); ?>
	  </div>
			<form method="POST" action="<?php site_url();?>/Users/insertdaftar" enctype="value">
				 <?= csrf_field(); ?>
			  <div class="row mb-3">
			    <label for="nama_pengguna" class="col-sm-2 col-form-label">Username</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control <?= ($validation->hasError('nama_pengguna')) ? 'is-invalid' : ''; ?> " id="nama_pengguna" name="nama_pengguna" placeholder="Nama Lengkap" value="<?= old('nama_pengguna'); ?>">
			       <div class="invalid-feedback">
      				<?= $validation->getError('nama_pengguna'); ?>
    			</div>
			    </div>
			  </div>
			  <div class="row mb-3">
			    <label for="email" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="email" name="email"
			      placeholder="contoh@gmail.com" value="<?= old('email'); ?>" >
			      <div class="invalid-feedback">
      				<?= $validation->getError('email'); ?>
    			</div>
			    </div>
			  </div>
			  <div class="row mb-3">
			    <label for="password" class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="password" name="password"  placeholder="Panjang password minimal 8 karakter" value="<?= old('password'); ?>">
			      <div class="invalid-feedback">
      				<?= $validation->getError('password'); ?>
    			</div>
			    </div>
			  </div>
			  <div class="footer-form">
			  		<input type="checkbox" onclick="myFunction()">Show Password
			  		<p>Sudah Punya Akun? <a href="<?php echo site_url('Users/login'); ?>">Login</a></p>
			  		<button type="submit" class="btn btn-primary">Daftar</button>
			  </div>
			</form>
		</div>
	</div>

	<!-- fitur hide and see password -->
	<script>
		
		function myFunction() {
  		var x = document.getElementById("password");
		  if (x.type === "password") {
		    x.type = "text";
		  } else {
		    x.type = "password";
		  }
		}
	</script>

</body>
</html>