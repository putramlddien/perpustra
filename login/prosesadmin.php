<?php
	session_start();
	include "../koneksi.php";
	$useradmin = $_POST["useradmin"];
	$passadmin = $_POST["passadmin"];	
	$sql="SELECT * FROM tb_admin where useradmin = '$useradmin' and passadmin = '$passadmin'";	
	$query = mysqli_query($db_link,$sql);		
	if(mysqli_num_rows($query)!=0)
	{
			$data = mysqli_fetch_array($query);
			$_SESSION['useradmin'] = $data['useradmin']; 
			$_SESSION['passadmin'] = $data['passadmin'];
			$_SESSION['LOGIN'] = "LOGIN";			
			header("location:../admin/buku/tampil_data.php");
	}
	else
	{
		 header("location:form_admin.php");
	}