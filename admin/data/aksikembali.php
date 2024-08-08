<?php  
	include "../../koneksi.php";

	$id2 					= 	$_GET['id_peminjaman'];
	$id 					=  	$_GET['id_peminjaman'];
	$nama_anggota			=	$_POST['nama_anggota'];
	$kode_buku   			=   $_POST['kode_buku'];
	$judul					=   $_POST['judul'];
	$tanggal_dikembalikan	=	$_POST['tanggal_dikembalikan'];
	$tanggal_pengembalian   =   $_POST['tanggal_pengembalian'];
	$denda					=	$_POST['denda'];
	$nominal				=	$_POST['nominal'];
	$qty      				=   $_POST['qty'];

	

	$sql = ("insert into tb_pengembalian set nama_anggota='$nama_anggota',kode_buku='$kode_buku',judul='$judul',tanggal_dikembalikan='$tanggal_dikembalikan',tanggal_pengembalian='$tanggal_pengembalian',denda='$denda',nominal='$nominal',qty='$qty'");
	$query = mysqli_query($db_link,$sql);
	$sql2 = "DELETE FROM tb_peminjaman WHERE id_peminjaman = '$id2'";
	$query2 = mysqli_query($db_link,$sql2);
	header('location:../peminjaman/data_peminjaman.php');
?>


