<?php
	include '../../koneksi.php';

	$id_licensi 			=	$_GET['id_licensi'];
    $nip_dokter 			=	$_POST['nip_dokter'];
	$nama_dokter		=	$_POST['nama_dokter'];
	$licensi_dokter     	 	=   $_POST['licensi_dokter'];
	$kontrak_mulai		=   $_POST['kontrak_mulai'];
	$kontrak_selesai      	=   $_POST['kontrak_selesai'];

		$sql = "UPDATE tb_licensi SET id_licensi='$id_licensi',nip_dokter='$nip_dokter',
        nama_dokter='$nama_dokter',licensi_dokter='$licensi_dokter',kontrak_mulai='$kontrak_mulai',
        kontrak_selesai='$kontrak_selesai'";
		$query = mysqli_query($db_link,$sql);

		if(!$query) {
			die ("Query gagal dijalankan: ".mysqli_error($db_link)."-".mysqli_error($db_link));
	} else {
		echo "<script>alert('Data Berhasil Di Edit.');window.location='../licensi_dokter/tampil_data.php';</script>";
	} 
