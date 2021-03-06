<html>
<head>
	<title>Isi Data || Muhammadiyah Medical Centre</title>
	<meta charset="utf-8">
	<meta name="author" content="Mahasiswa IF UNS">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/pace.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/loader.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
	<div class="header" id="container">
		<a href="/projectMMC"><img src="images/logo_mmc.png"></a>
		<div id="menu">
			<nav><ul>
				<li><a href="user">Halaman Depan</a></li>
				<li><a href="about">Tentang Kami</a></li>
				<li><a href="prosedur">Prosedur Pendaftaran</a></li>
				<li><a href="logout">Logout</a></li>
			</ul></nav>
		</div>
	</div>
	<div class="content_daftar">
		<form class="form-horizontal" role="form" action="register" method="post">
			<div class="form-group">
				<label for="nim" class="col-md-3 control-label">Username</label>
				<div class="col-md-3">
					<input type="text" class="form-control" name="username" required>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-md-3 control-label">Password</label>
				<div class="col-md-3">
					<input type="password" class="form-control" name="password" required>
				</div>
			</div>
			<div class="form-group">
				<label for="status" class="col-md-3 control-label">Status</label>
				<div class="col-md-3">
					<select class="form-control" name="status" required>
						<option value="mahasiswa">Mahasiswa</option>
						<option value="umum">Umum</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary btn-lg" name="login">Login</button>
					<button type="reset" class="btn btn-danger btn-lg" name="reset">Reset</button>
				</div>
			</div>
		</form>
	</div>
	<div class="footer">
		<h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169 | Telp. (0271) 717417 Ext. 433</h4>
	</div>
</body>
</html>