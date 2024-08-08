<?php
include '../../koneksi.php';
$nisn_anggota	=   $_POST['nisn_anggota'];
$nama_anggota   =   $_POST['nama_anggota'];
$username			=   $_POST['username'];
$password			=   $_POST['password'];
$kelas			=   $_POST['kelas'];
$alamat      	=   $_POST['alamat'];

$sql = ("insert into tb_anggota set nisn_anggota='$nisn_anggota',nama_anggota='$nama_anggota',username='$username',password='$password',kelas='$kelas',alamat='$alamat'");
$query = mysqli_query($db_link,$sql);
header("location:../anggota/tampil_data.php");
?>
