<?php  
	include "../../koneksi.php";
	$id_licensi			=  	$_POST['id_licensi'];
	$nip_dokter			=	$_POST['nip_dokter'];
	$nama_dokter   			=   $_POST['nama_dokter'];
	$licensi_dokter					=   $_POST['licensi_dokter'];
	$kontrak_mulai		=   $_POST['kontrak_mulai'];
	$kontrak_selesai   =   $_POST['kontrak_selesai'];

	
	$sql = ("insert into tb_licensi set id_licensi='$id_licensi',nip_dokter='$nip_dokter',nama_dokter='$nama_dokter',
    licensi_dokter='$licensi_dokter',kontrak_mulai='$kontrak_mulai',kontrak_selesai='$kontrak_selesai'");
	$query=mysqli_query($db_link,$sql);
	// if ($query)
	// {
		header('location:../licensi_dokter/tampil_data.php');
	// }
	// else
	// {
	// 	echo "Ga";
	// }
?>