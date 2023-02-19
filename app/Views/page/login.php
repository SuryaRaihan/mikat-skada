<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mika Skada</title>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/header-index.css">
	<link rel="stylesheet" href="/css/daftar.css">
</head>
<body>

<div class="container">
	<div class="box">
	 <div class="header">
		<h1>Login Akun Mika</h1>
		<p>Gunakan Akun yang anda daftarkan</p>
	<!-- notif berhasil daftar -->
	<?php if(session()->getFlashdata('pesan')) :?>
		<div class="alert alert-success">
			<?= session()->getFlashdata('pesan'); ?>
		</div>
	<?php endif ?>
	  </div>
			<form method="POST" action="<?php site_url();?>/Users/insertlogin" enctype="value">
			  <div class="row mb-3">
			    <label for="email" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control form-control-sm" id="email" name="email"
			      placeholder="contoh@gmail.com" required="required" autofocus=""  >
			    </div>
			  </div>
			  <div class="row mb-3">
			    <label for="password" class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="password" name="password" required="required">
			    </div>
			  </div>
			  <div class="footer-form">
			  		<input type="checkbox" onclick="myFunction()">Show Password
			  		<p>Belum Punya Akun? <a href="<?php echo site_url('Users/daftar'); ?>">Daftar</a></p>
			  		<button type="submit" class="btn btn-primary">Login</button>
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