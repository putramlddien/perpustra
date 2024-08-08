<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php';
?><br><title>Tambah Data Buku</title>
<div class="content">
<h2>Tambah Data Buku</h2>
<a class="button" href="tampil_data.php">Kembali</a><br><br>
<div class="or">
<form action="../data/tambah_buku.php" method="post" enctype="multipart/form-data">
    <table>
        <label>Kode Buku</label><input type="text" name="kode_buku" placeholder="Kode Buku">
        <label>Judul Buku</label><input type="text" name="judul" placeholder="Judul Buku">
        <label>Cover</label><input type="file" name="gambar">
        <label>Pengarang</label><input type="text" name="pengarang" placeholder="Pengarang">
        <label>Penerbit</label><input type="text" name="penerbit" placeholder="Penerbit">
        <label>Tahun Terbit</label><input type="date" name="tahun_terbit" placeholder="Tahun Terbit">
        <label>Stok</label><input type="text" name="stok" placeholder="Stok">
        <input type="submit" value="Submit">
    </table>
</form>
</div>
</div><br>