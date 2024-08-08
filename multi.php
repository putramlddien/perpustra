<?php
	session_start();
	include "../koneksi.php";	

	if (isset($_POST['Login'])){

	$username = $_POST['username'];
	$password = $_POST['password'];


	$sqlanggota = "SELECT * FROM tb_anggota where username = '$username'";	
	$query = mysqli_query($db_link,$sqlanggota);

	$sqladmin = "SELECT * FROM tb_admin where username = '$username'";	
	$query2 = mysqli_query($db_link,$sqladmin);		

	if(mysqli_num_rows($query) === 1){
		$row = mysqli_fetch_assoc($sqlanggota);
		if ($password == $row['password']){
			session_start();
			$_SESSION['username'] = $row['username']; 
			$_SESSION['password'] = $row['password'];
			$_SESSION['nama_anggota'] = $row['nama_anggota'];
			header("location:../user/buku/tampil_data.php");
			}
	else
	{
			header("location:form_login.php");
	}
} elseif (mysqli_num_rows($query2) === 1){
		$row = mysqli_fetch_assoc($sqladmin);
		if ($password == $row['password']){
			session_start();
			$_SESSION['username'] = $row['username']; 
			$_SESSION['password'] = $row['password'];
			header("location:../admin/buku/tampil_data.php");
			} else {
			header("location:form_login.php");
			}
		}
	}
		?>