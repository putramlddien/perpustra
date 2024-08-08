<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php';
?><br><title>Tambah Biodata Dokter</title>
<div class="content">
<h2>Tambah Biodata Dokter</h2>
<a class="button" href="tampil_data.php">Kembali</a><br><br>
<div class="or">
<form action="../data/tambah_dokter.php" method="post" enctype="multipart/form-data">
    <table>
        <label>NIP</label><input type="text" name="nip_dokter" placeholder="Masukan NIP">
        <label>Nama Dokter</label><input type="text" name="nama_dokter" placeholder="Masukan Nama Dokter">
        <label>Tanggal Lahir</label><input type="date" name="ttl_dokter" placeholder="Masukan Tanggal Lahir">
        <label>Agama</label><input type="text" name="agama" placeholder="Masukan Agama">
        <label>Bidang Keahlian</label><input type="text" name="bidang_dokter" placeholder="Masukan Bidang/Golongan">
        <label>Pangkat/Golongan</label><input type="text" name="pangkat_golongan" placeholder="Masukan Pangkat/Golongan">
        <label>Gelar</label><input type="text" name="gelar_sarjana" placeholder="Masukan Gelar Dokter">

        <input type="submit" value="Submit">
    </table>
</form>
</div>
</div><br>