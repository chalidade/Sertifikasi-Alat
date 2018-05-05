<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Aplikasi Inspeksi Hydrant</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box " style="height: 650px;">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><h3 style="text-transform:uppercase; font-weight:800">Aplikasi Reminder Sertifikasi </h3></div>
								<p class="lead">Register Account</p>
							</div>
							<form class="form-auth-small" action="admin/dashboard.php" method="post">
								<div class="form-group">
									<label for="nama" class="control-label sr-only">Nama User</label>
									<input type="password" name="password" class="form-control" id="nama" placeholder="Nama">
								</div>
								<div class="form-group">
									<label for="username" class="control-label sr-only">Username</label>
									<input type="text" name="username" class="form-control" id="username" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="id_user" class="control-label sr-only">ID User</label>
									<input type="text" name="id_user" class="form-control" id="id_user" placeholder="ID User">
								</div>
								<div class="form-group">
									<label for="nomor" class="control-label sr-only">Nomor Telpon</label>
									<input type="text" name="nomor" class="form-control" id="nomor" placeholder="Nomor Telpon">
								</div>
								<div class="form-group">
									<label for="jk" class="control-label sr-only">Jenis Kelamin</label>
									<input type="text" name="jk" class="form-control" id="jk" placeholder="Jenis Kelamin">
								</div>
								<div class="form-group">
									<label for="status" class="control-label sr-only">Status</label>
									<input type="password" name="password" class="form-control" id="status"  placeholder="Status">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="signin-password" value="thisisthepassword" placeholder="Password">
								</div>
								<div class="form-group">
									<label for="re-password" class="control-label sr-only">Re-Password</label>
									<input type="password" name="re-password" class="form-control" id="re-password" value="thisisthepassword" placeholder="Re-password">
								</div>
								<div class="form-group clearfix">
									<span style="float:right"> <a href="index.php">Have An Account</a></span>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #007a9b;border-color: #007a9b;">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"> <a href="#"></a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right" style="height: 650px;">
						<div class="overlay" style="background: #007a9b;opacity: 0.8;height: 650px;" ></div>
						<div class="content text">
							<h1 class="heading">Aplikasi Reminder Sertifikasi</h1>
							<p>by Efril Team</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
