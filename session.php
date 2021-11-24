<?php
	session_start();
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("location:login.php?pesan=belum_login");
	}
?>
<html>
<head>
	<title> Akses Admin </title>
</head>
<body>
	<center>
		<br>
		<h1> Selamat Datang <?php echo $username ?> </h1><br>
		<h2> Anda Telah Memasuki Akses Admin<h2>
		<h3>Pilihan Menu</h3>
		<h4><a href="tambah film.php">1. Tambah Film</a><h4>
		<h4><a href="hapus film.php">2. Hapus Film</a><h4>
		<form method="POST">
			<input type="submit" name="submit" value="Logout">
		</form>
		<?php 
			if(isset($_POST['submit'])){
				session_start();
				session_destroy();
				header("location:login.php?pesan=logout");
			}
		?>
	</center>
</body>
</html>