<?php
	include "../../koneksi.php";
	
	$kode_buku = $_GET['id'];
	$sql = "DELETE FROM tb_buku WHERE kode_buku = '$kode_buku'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:../buku/tampil_data.php');
	}
	else
	{
	echo "Hapus Data Gagal!";
	}
?>