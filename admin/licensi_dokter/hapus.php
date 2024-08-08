<?php
	include "../../koneksi.php";
	
	$id_licensi = $_GET['id'];
	$sql = "DELETE FROM tb_licensi WHERE id_licensi = '$id_licensi'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:../licensi_dokter/tampil_data.php');
	}
	else
	{
	echo "Hapus Data Gagal!";
	}
?>