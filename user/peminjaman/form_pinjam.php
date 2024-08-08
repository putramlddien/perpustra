<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php';
?><br><title>Form Pinjam Buku</title>
<div class="content">
    <?php   
          
            $kode_buku = $_GET['id'];
            $sql = "SELECT * FROM tb_buku WHERE kode_buku='$kode_buku'";
            $query = mysqli_query($db_link,$sql);
            $r = mysqli_fetch_array($query);

            date_default_timezone_set('asia/jakarta');
    ?>
<h2>Pinjam Buku</h2>
<a class="button" href="../buku/tampil_data.php">Kembali</a><br><br>
<div class="or">
<form action="../data/aksipinjam.php" method="post">
    <table>
        <label>Kode Buku</label><input type="text" readonly name="kode_buku" value="<?php echo $r['kode_buku'] ?>">
        <label>Judul Buku</label><input type="text" readonly name="judul" value="<?php echo $r['judul'] ?>">
        <label>Nama Anggota</label>
<input type="text" readonly name="nama_anggota" value="<?php echo $_SESSION['nama_anggota'] ?>">
        <label>Tanggal Peminjaman</label><input type="date" readonly name="tanggal_peminjaman" value="<?php echo date('Y-m-d'); ?>">
        <label>Tanggal Pengembalian</label>
        <?php $p = date('Y-m-d') ?>
        <input type="date" name="tanggal_pengembalian" value="<?php echo date('Y-m-d', strtotime('+7 day', strtotime($p))); ?>" readonly>
        <label>Jumlah</label><input type="text" name="qty" placeholder="Jumlah">
        <input type="submit" value="Submit">
    </table>
</form>
</div>
</div><br>