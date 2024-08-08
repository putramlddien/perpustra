<?php
	session_start();
	include "../koneksi.php";
	// $nip_dokter = $_POST["nip_dokter."];
    $nama_dokter = $_POST["nama_dokter"];
	$password = $_POST["password"];	
	$sql="SELECT * FROM tb_biodokter where nama_dokter = '$nama_dokter' and password = '$password'";	
	$query = mysqli_query($db_link,$sql);		
	if(mysqli_num_rows($query)!=0)
	{
			$data = mysqli_fetch_array($query);
			// $_SESSION['nip_dokter'] = $data['nip_dokter']; 
            $_SESSION['nama_dokter'] = $data['nama_dokter']; 
			$_SESSION['password'] = $data['password'];
			$_SESSION['LOGIN'] = "LOGIN";			
			header("location:../user/biodata/dashboard.php");
	}
	else
	{
		 header("location:form_dokter.php");
	}