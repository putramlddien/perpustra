<?php
include '../../koneksi.php';
$nip		=   $_POST['nip_dokter'];
$nama      	=   $_POST['nama_dokter'];
$ttl		=   $_POST['ttl_dokter'];
$agama     	=   $_POST['agama'];
$bidang	=   $_POST['bidang_dokter'];
$pangkat    		=   $_POST['pangkat_golongan'];
$gelar    		=   $_POST['gelar_sarjana'];

$sql = ("insert into tb_biodokter set nip_dokter='$nip',nama_dokter='$nama',ttl_dokter='$ttl',
agama='$agama',bidang_dokter='$bidang',pangkat_golongan='$pangkat',gelar_sarjana='$gelar'");
$query = mysqli_query($db_link,$sql,$upload);

header("location:../biodata_dokter/tampil_data.php");


        
        