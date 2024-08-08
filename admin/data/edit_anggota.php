<?php
	include "../../koneksi.php";
	$id 			=	$_GET['nisn_anggota'];
	$nisn_anggota	=	$_POST['nisn_anggota'];
	$username   =   $_POST['username'];
	$password   =   $_POST['password'];
	$nama_anggota   =   $_POST['nama_anggota'];
	$kelas			=   $_POST['kelas'];
	$alamat      	=   $_POST['alamat'];

	
	$sql3 = "UPDATE tb_anggota SET nisn_anggota='$nisn_anggota',username='$username',password='$password',nama_anggota='$nama_anggota',kelas='$kelas',alamat='$alamat' WHERE nisn_anggota = '$id'";
	$query = mysqli_query($db_link,$sql3);
	if($query)
	{
	header('location:../anggota/tampil_data.php');
	}
	else
	{
	echo "Edit Data Anggota Gagal!";
	}
?>