<?php
	include "../../koneksi.php";
	
	$nisn_anggota = $_GET['id'];
	$sql = "DELETE FROM tb_anggota WHERE nisn_anggota = '$nisn_anggota'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:../anggota/tampil_data.php');
	}
	else
	{
	echo "Hapus Data Gagal!";
	}
?>