<?php
	include '../../koneksi.php';

	$nip_dokter 			=	$_GET['nip_dokter'];
	$nama_dokter		=	$_POST['nama_dokter'];
	$ttl_dokter     	 	=   $_POST['ttl_dokter'];
	$agama		=   $_POST['agama'];
	$bidang_dokter      	=   $_POST['bidang_dokter'];
	$pangkat_golongan	=   $_POST['pangkat_golongan'];
	$gelar_sarjana    		=   $_POST['gelar_sarjana'];


		$sql = "UPDATE tb_biodokter SET nip_dokter='$nip_dokter',nama_dokter='$nama_dokter',
        ttl_dokter='$ttl_dokter',agama='$agama',bidang_dokter='$bidang_dokter',
        pangkat_golongan='$pangkat_golongan',gelar_sarjana='$gelar_sarjana' WHERE nip_dokter = '$nip_dokter'";
		$query = mysqli_query($db_link,$sql);

		if(!$query) {
			die ("Query gagal dijalankan: ".mysqli_error($db_link)."-".mysqli_error($db_link));
	} else {
		echo "<script>alert('Data Berhasil Di Edit.');window.location='../biodata_dokter/tampil_data.php';</script>";
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
