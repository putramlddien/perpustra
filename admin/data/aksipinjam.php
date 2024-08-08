<?php  
	include "../../koneksi.php";
	$id_peminjaman			=  	$_POST['id_peminjaman'];
	$nama_anggota			=	$_POST['nama_anggota'];
	$kode_buku   			=   $_POST['kode_buku'];
	$judul					=   $_POST['judul'];
	$tanggal_peminjaman		=   $_POST['tanggal_peminjaman'];
	$tanggal_pengembalian   =   $_POST['tanggal_pengembalian'];
	$qty      				=   $_POST['qty'];

	
	$sql = ("insert into tb_peminjaman set id_peminjaman='$id_peminjaman',nama_anggota='$nama_anggota',kode_buku='$kode_buku',judul='$judul',tanggal_peminjaman='$tanggal_peminjaman',tanggal_pengembalian='$tanggal_pengembalian',qty='$qty'");
	$query=mysqli_query($db_link,$sql);
	// if ($query)
	// {
		header('location:../buku/tampil_data.php');
	// }
	// else
	// {
	// 	echo "Ga";
	// }
?>