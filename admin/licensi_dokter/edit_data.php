<?php
	include '../../koneksi.php';
	include '../bar/navbar.php';
?><br><title>Edit Licensi Dokter</title>
<div class="content">
<link rel="stylesheet" type="text/css" href="../style.css">
<h2>Edit Licensi Dokter</h2>
<a class="button" href="tampil_data.php">Kembali</a><br><br>
<div class="or">
      <?php
			$id_licensi = $_GET['id'];
			$sql = "SELECT * FROM tb_licensi WHERE id_licensi='$id_licensi'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='../data/edit_licensi.php?id_licensi=<?php echo "$id_licensi"; ?>' method='POST'>
			<table>
		        <label>NIP</label><input type="text" id="nip_dokter" readonly name="nip_dokter" value="<?php echo $data['nip_dokter'] ?>">
		        <label>Nama Dokter</label><input type="text" id="nama_dokter" readonly name="nama_dokter" value="<?php echo $data['nama_dokter'] ?>">
		        <label>Licensi Dokter</label><input type="text" id="licensi_dokter" name="licensi_dokter" value="<?php echo $data['licensi_dokter'] ?>">
		        <label>Kontrak Mulai</label><input type="text" id="kontrak_mulai" name="kontrak_mulai" value="<?php echo $data['kontrak_mulai'] ?>">
		        <label>Kontrak Selesai</label><input type="text" id="kontrak_selesai" name="kontrak_selesai" value="<?php echo $data['kontrak_selesai'] ?>">
		        <input type="submit" value="Submit">
		    </table>
		</form>
		</div>
	</div>