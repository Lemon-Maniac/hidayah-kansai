<?php
    require "connect.php";

    if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$cekdatabase = mysqli_query($conn, "SELECT * FROM account where email='$email' and password = '$password' ");

		$hitung = mysqli_num_rows($cekdatabase);

		if($hitung > 0)
		{
			$_SESSION['log'] = 'true';
			echo "<script>alert('login berhasil.');window.location='../index.html';</script>";
		}
		else{
			echo "<script>alert('account tidak ditemukan.');window.location='../index.html';</script>";
		}
	}
?>