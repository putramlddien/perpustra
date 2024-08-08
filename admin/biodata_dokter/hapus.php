<?php
	include "../../koneksi.php";
	
	$nip_dokter = $_GET['id'];
	$sql = "DELETE FROM tb_biodokter WHERE nip_dokter = '$nip_dokter'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:../biodata_dokter/tampil_data.php');
	}
	else
	{
	echo "Hapus Data Gagal!";
	}
?>