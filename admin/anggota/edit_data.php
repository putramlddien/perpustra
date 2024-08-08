<?php
	include '../../koneksi.php';
	include '../bar/navbar.php';
?><br><title>Edit Data Anggota</title>
<div class="content">
<link rel="stylesheet" type="text/css" href="../style.css">
<h2>Edit Data Anggota</h2>
<a class="button" href="tampil_data.php">Kembali</a><br><br>
<div class="or">
      <?php
			$nisn_anggota = $_GET['id'];
			$sql = "SELECT * FROM tb_anggota WHERE nisn_anggota='$nisn_anggota'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='../data/edit_anggota.php?nisn_anggota=<?php echo "$nisn_anggota"; ?>' method='POST'>
			<table>
		        <label>Nisn Anggota</label><input type="text" id="nisn_anggota" name="nisn_anggota" value="<?php echo $data['nisn_anggota'] ?>">
		        <label>Nama Lengkap</label><input type="text" id="nama_anggota" name="nama_anggota" value="<?php echo $data['nama_anggota'] ?>">
		        <label>Username</label><input type="text" id="username" name="username" value="<?php echo $data['username'] ?>">
		        <label>Password</label><input type="text" id="password" name="password" value="<?php echo $data['password'] ?>">
		        <label>Kelas</label><input type="text" id="kelas" name="kelas" value="<?php echo $data['kelas'] ?>">
		        <label>Alamat</label><input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>">
		        <input type="submit" value="Submit">
		    </table>
		</form>
		</div>
	</div>