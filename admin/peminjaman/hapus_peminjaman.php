<?php
	include "../../koneksi.php";
	
	$id = $_GET['id'];
	$sql = "DELETE FROM tb_peminjaman WHERE id_peminjaman = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:../peminjaman/data_peminjaman.php');
	}
	else
	{
	echo "Hapus Data Gagal!";
	}
?>