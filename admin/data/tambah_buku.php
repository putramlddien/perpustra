<?php
include '../../koneksi.php';
$kode_buku		=   $_POST['kode_buku'];
$judul      	=   $_POST['judul'];
$pengarang		=   $_POST['pengarang'];
$penerbit     	=   $_POST['penerbit'];
$tahun_terbit	=   $_POST['tahun_terbit'];
$stok    		=   $_POST['stok'];
$lokasi_file	=	$_FILES['gambar']['tmp_name'];
$gambar			= 	$_FILES['gambar']['name'];
$folder     	=	"../../gambar/$gambar";

$upload = move_uploaded_file($lokasi_file,$folder);
$sql = ("insert into tb_buku set kode_buku='$kode_buku',judul='$judul',gambar='$gambar',pengarang='$pengarang',penerbit='$penerbit',tahun_terbit='$tahun_terbit',stok='$stok'");
$query = mysqli_query($db_link,$sql,$upload);

header("location:../buku/tampil_data.php");


        
        