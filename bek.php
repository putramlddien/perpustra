<?php
	include "../../koneksi.php";

	$id 			=	$_GET['kode_buku'];
	$kode_buku		=	$_POST['kode_buku'];
	$judul     	 	=   $_POST['judul'];
	$pengarang		=   $_POST['pengarang'];
	$penerbit      	=   $_POST['penerbit'];
	$tahun_terbit	=   $_POST['tahun_terbit'];
	$stok    		=   $_POST['stok'];
	$gambar			= 	$_FILES['gambar']['name'];

	if($gambar != "" ) {
		$ekstensi_diperbolehkan = array('png','jpg','jpeg');
		$x = explode('.',$gambar);
		$ekstensi = strtolower(end($x));
		$file_tmp = $_FILES['gambar']['tmp_name'];
		$rename_gambar = rand(1,999);
		$nama_gambar_baru = $rename_gambar.'-'.$gambar;

		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		move_uploaded_file($file_tmp, '../../gambar'.$nama_gambar_baru);

		$query = "UPDATE tb_buku SET kode_buku='$kode_buku',judul='$judul',pengarang='$pengarang',penerbit='$penerbit',tahun_terbit='$tahun_terbit',stok='$stok',gambar='$nama_gambar_baru' WHERE kode_buku = '$id'";
		$result = mysqli_query($db_link,$query);

		if(!$result) {
			die ("Query gagal dijalankan: ".mysqli_error($db_link)."-".mysqli_error($db_link));
	} else {
		echo "<script>alert('Data Berhasil Ditambah.');window.location='../buku/tampil_data.php';</script>";
	}
		} 
		// else {
		// 	echo "error";
		// } 
		// } else {
		// 	$query = "UPDATE tb_buku SET kode_buku='$kode_buku',judul='$judul',pengarang='$pengarang',penerbit='$penerbit',tahun_terbit='$tahun_terbit',stok='$stok' WHERE kode_buku = '$id'";
		// 	$result = $result = mysqli_query($db_link,$query);

		// 	if (!$result) {
		// 		echo "gagal";
		// 	} else {
		// 		header('location:../buku/tampil_data.php');
		// 	}
	}