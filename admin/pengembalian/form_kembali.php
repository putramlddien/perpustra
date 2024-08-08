<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php';
?><br>
<div class="content">
    <?php   
            $id_peminjaman = $_GET['id'];
            $sql = "SELECT * FROM tb_peminjaman WHERE id_peminjaman='$id_peminjaman'";
            $query = mysqli_query($db_link,$sql);
            $r = mysqli_fetch_array($query);

            date_default_timezone_set('asia/jakarta');
    ?>
<h2>Pengembalian Buku</h2>
<a class="button" href="../peminjaman/data_peminjaman.php">Kembali</a><br><br>
<div class="or">
<form action="../data/aksikembali.php" method="post">
    <table>
        <label>Kode Buku</label><input type="text" readonly name="kode_buku" value="<?php echo $r['kode_buku'] ?>">
        <label>Judul Buku</label><input type="text" readonly name="judul" value="<?php echo $r['judul'] ?>">
        <label>Nama Anggota</label><input type="text" readonly name="nama_anggota" value="<?php echo $r['nama_anggota'] ?>">
        <label>Tanggal Pengembalian</label>
        <?php $p = date('Y-m-d') ?>
        <input type="date" name="tanggal_pengembalian" value="<?php echo $r['tanggal_pengembalian'] ?>" readonly>  
        <label>Tanggal Dikembalikan</label><input type="date" readonly name="tanggal_dikembalikan" value="<?php echo date('Y-m-d'); ?>">
        <label>Denda</label>
        <select name="denda">
            <option>YES</option>
            <option>NO</option>
        </select>
        <label>Nominal</label><input type="text" name="nominal" placeholder="Nominal Denda">

        <label>Jumlah</label><input type="text" name="qty" placeholder="Jumlah" value="<?php echo $r['qty'] ?>" readonly>
        <input type="submit" value="Submit">
    </table>
</form>
</div>
</div><br>