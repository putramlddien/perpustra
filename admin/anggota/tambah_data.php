<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php';   
?><br><title>Tambah Data Anggota</title>
<div class="content">
<h2>Tambah Data Anggota</h2>
<a class="button" href="tampil_data.php">Kembali</a><br><br>
<div class="or">
<form action="../data/tambah_anggota.php" method="post">
    <table>
        <label>NISN</label><input type="text" name="nisn_anggota" placeholder="NISN">
        <label>Nama Lengkap</label><input type="text" name="nama_anggota" placeholder="Nama Anggota">
        <label>Username</label><input type="text" name="username" placeholder="Username Anggota">
        <label>Password</label><input type="text" name="password" placeholder="Password Anggota">
        <label>Kelas</label><input type="text" name="kelas" placeholder="Kelas">
        <label>Alamat</label><input type="text" name="alamat" placeholder="alamat">
        <input type="submit" value="Submit">
    </table>
</form>
</div>
</div><br>