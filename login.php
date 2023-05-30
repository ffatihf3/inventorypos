<?php
@ob_start();
session_start();
if (isset($_POST['proses'])) {
	require 'config.php';

	$user = strip_tags($_POST['user']);
	$pass = strip_tags($_POST['pass']);

	$sql = 'select member.*, login.user, login.pass
				from member inner join login on member.id_member = login.id_member
				where user =? and pass = md5(?)';
	$row = $config->prepare($sql);
	$row->execute(array($user, $pass));
	$jum = $row->rowCount();
	if ($jum > 0) {
		$hasil = $row->fetch();
		$_SESSION['admin'] = $hasil;
		echo '<script>alert("Login Sukses");window.location="index.php"</script>';
	} else {
		echo '<script>alert("Login Gagal");history.go(-1);</script>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>InventoryPOS</title>
</head>

<body>

	<!----------------------- Main Container -------------------------->

	<div class="container d-flex justify-content-center align-items-center min-vh-100">

		<!----------------------- Login Container -------------------------->

		<div class="row border rounded-5 p-3 bg-white shadow box-area">

			<!--------------------------- Left Box ----------------------------->

			<div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #36b9cc;">
				<div class="featured-image mb-3">
					<img src="1.png" class="img-fluid" style="width: 250px;">
				</div>
				<p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">InventoryPOS</p>
				<small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Kelola Stok dan Kasir dengan Lebih Efisien.</small>
			</div>

			<!-------------------- ------ Right Box ---------------------------->

			<div class="col-md-6 right-box">
				<div class="row align-items-center">
					<div class="header-text mb-4">
						<h2>Hello,Again</h2>
						<p>Ready for Today, What's Next</p>
					</div>
					<form class="form-login" method="POST">
						<div class="input-group mb-3">
							<input type="text" class="form-control form-control-lg bg-light fs-6" name="user" placeholder="User ID">
						</div>
						<div class="input-group mb-1">
							<input type="password" class="form-control form-control-lg bg-light fs-6" name="pass" placeholder="Password">
						</div>
						<div class="input-group mb-5 d-flex justify-content-between">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="formCheck">
								<label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
							</div>
							<div class="forgot">
								<small><a href="#">Forgot Password?</a></small>
							</div>
						</div>
						<div class="input-group mb-3">
							<button class="btn btn-lg  w-100 fs-6" style="background: #36b9cc; color: white;" name="proses" type="submit">Login</button>
						</div>
						<div class="input-group mb-3">
							<button class="btn btn-lg btn-light w-100 fs-6"><img src="google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
						</div>
						<div class="row">
							<small>Don't have account? <a href="#">Sign Up</a></small>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

	<script src="sb-admin/vendor/jquery/jquery.min.js"></script>
	<script src="sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="sb-admin/js/sb-admin-2.min.js"></script>

</body>

</html>