<!DOCTYPE html>
<link rel="stylesheet" href="../../style.css" type="text/css">

<div class="navbar">
<?php session_start() ?>
<a href="../../logout.php">Logout</a>
<a href="">Welcome <?= '' . $_SESSION['nama_anggota']; ?></a>
<h2 style="margin: 15px 12px; color: white; font-family: magneto;">Klinik</h2>
</div><br><br><br>

<div class="sidebar">
  <a href="../buku/tampil_data.php">Buku</a>
  <a href="../anggota/tampil_data.php">Data Anggota</a>
  <a href="../peminjaman/data_peminjaman.php">Data Peminjaman</a>
</div>
</body>
</html>