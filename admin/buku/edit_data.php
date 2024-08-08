<?php
	include '../../koneksi.php';
	include '../bar/navbar.php';
?><br><title>Edit Data Buku</title>
<div class="content">
<link rel="stylesheet" type="text/css" href="../style.css">
<h2>Edit Data Buku</h2>
<a class="button" href="tampil_data.php">Kembali</a><br><br>
<div class="or">
      <?php
			$kode_buku = $_GET['id'];
			$sql = "SELECT * FROM tb_buku WHERE kode_buku='$kode_buku'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='../data/edit_buku.php?kode_buku=<?php echo "$kode_buku"; ?>' method='POST'>
			<table>
		        <label>Kode Buku</label><input type="text" id="kode_buku" name="kode_buku" value="<?php echo $data['kode_buku'] ?>">
		        <label>Judul Buku</label><input type="text" id="judul" name="judul" value="<?php echo $data['judul'] ?>">
		        <label>Cover</label><br>
		        <img src="../../gambar/<?php echo $data['gambar']; ?>" style="width: 50px; height: 60px;" alt="">
		        <input type="file" id="gambar" name="gambar" value="<?php echo $data['gambar'] ?>">	        
		        <label>Pengarang</label><input type="text" id="pengarang" name="pengarang" value="<?php echo $data['pengarang'] ?>">
		        <label>Penerbit</label><input type="text" id="penerbit" name="penerbit" value="<?php echo $data['penerbit'] ?>">
		        <label>Tahun Terbit</label><input type="text" id="tahun_terbit" name="tahun_terbit" value="<?php echo $data['tahun_terbit'] ?>">
		        <label>Stok</label><input type="text" id="stok" name="stok" value="<?php echo $data['stok'] ?>">
		        <input type="submit" value="Submit">
		    </table>
		</form>
		</div>
	</div>