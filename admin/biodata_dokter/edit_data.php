<?php
	include '../../koneksi.php';
	include '../bar/navbar.php';
?><br><title>Edit Biodata Dokter</title>
<div class="content">
<link rel="stylesheet" type="text/css" href="../style.css">
<h2>Edit Biodata Dokter</h2>
<a class="button" href="tampil_data.php">Kembali</a><br><br>
<div class="or">
      <?php
			$nip_dokter = $_GET['id'];
			$sql = "SELECT * FROM tb_biodokter WHERE nip_dokter='$nip_dokter'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='../data/edit_dokter.php?nip_dokter=<?php echo "$nip_dokter"; ?>' method='POST'>
			<table>
		        <label>NIP</label><input type="text" id="nip_dokter" name="nip_dokter" value="<?php echo $data['nip_dokter'] ?>">
		        <label>Nama Dokter</label><input type="text" id="nama_dokter" name="nama_dokter" value="<?php echo $data['nama_dokter'] ?>">
		        <label>Tanggal Lahir</label><input type="text" id="ttl_dokter" name="ttl_dokter" value="<?php echo $data['ttl_dokter'] ?>">
		        <label>Agama</label><input type="text" id="agama" name="agama" value="<?php echo $data['agama'] ?>">
		        <label>Bidang Keahlian</label><input type="text" id="bidang_dokter" name="bidang_dokter" value="<?php echo $data['bidang_dokter'] ?>">
		        <label>Pangkat Golongan</label><input type="text" id="pangkat_golongan" name="pangkat_golongan" value="<?php echo $data['pangkat_golongan'] ?>">
				<label>Gelar</label><input type="text" id="gelar_sarjana" name="gelar_sarjana" value="<?php echo $data['gelar_sarjana'] ?>">
		        <input type="submit" value="Submit">
		    </table>
		</form>
		</div>
	</div>