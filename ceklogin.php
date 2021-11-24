<?php
	session_start();
	$hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "data_admin";

    $connect = mysqli_connect($hostname, $username, $password, $database);

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($connect, "SELECT * FROM login WHERE username = '$username' && password = '$password'") or die (mysqli_error($connect));

	$cek = mysqli_num_rows($query);

	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("location:session.php");
	}else{
		header("location:login.php?pesan=gagal");
	}
?>