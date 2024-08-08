<?php
	session_start();
	include "../koneksi.php";
	$username = $_POST["username"];
	$password = $_POST["password"];
	$nama_anggota = $_POST['nama_anggota'];	
	$sql="SELECT * FROM tb_anggota where username = '$username' and password = '$password'";	
	$query = mysqli_query($db_link,$sql);		
	if(mysqli_num_rows($query)!=0)
	{
			$data = mysqli_fetch_array($query);
			$_SESSION['username'] = $data['username']; 
			$_SESSION['password'] = $data['password'];
			$_SESSION['nama_anggota'] = $data['nama_anggota'];	
			$_SESSION['LOGIN'] = "LOGIN";			
			header("location:../user/buku/tampil_data.php");
	}
	else
	{
		 header("location:form_login.php");
	}
