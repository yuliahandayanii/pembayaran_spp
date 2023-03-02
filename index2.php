<!DOCTYPE html>
<html>
<head>
	<title>Login Admin/Petugas - Aplikasi Pembayaran SPP</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-md-center">
			<div class="col-md-4">
				<h4 class="text-center">LOGIN ADMIN / PETUGAS</h4>
				<div class="card">
					<div class="card-header">
						<img src="logospp.jpg" width="100%">
					</div>
					<div class="card-body">
						<form action="proses_login_petugas.php" method="post">
							<div class="form-group mb-2">
								<label>Username</label>
								<input type="text" name="username" class="form-control" placeholder="Masukan username anda..." required>
							</div>
							<div class="form-group mb-2">
								<label>Password</label>
								<input type="password" name="password" class="form-control" placeholder="Masukan password anda..." required>
							</div>
							<div class="form-group mb-2">
								<button type="submit" class="btn btn-primary">LOGIN</button>
							</div>
							<a href="index2.php"> Login sebagai siswa</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
