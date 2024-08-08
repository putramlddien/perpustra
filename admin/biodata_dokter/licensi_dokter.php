<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php';
?><br><title>Form Licensi Dokter</title>
<div class="content">
    <?php   
          
            $nip_dokter = $_GET['id'];
            $sql = "SELECT * FROM tb_biodokter WHERE nip_dokter='$nip_dokter'";
            $query = mysqli_query($db_link,$sql);
            $r = mysqli_fetch_array($query);

            date_default_timezone_set('asia/jakarta');
    ?>
<h2>Form Licensi Dokter</h2>
<a class="button" href="../biodata_dokter/tampil_data.php">Kembali</a><br><br>
<div class="or">
<form action="../data/aksi_licensi.php" method="post">
    <table>
        <label>NIP</label><input type="text" readonly name="nip_dokter" value="<?php echo $r['nip_dokter'] ?>">
        <label>Nama Dokter</label><input type="text" id="nama_dokter" readonly name="nama_dokter" value="<?php echo $r['nama_dokter'] ?>">
        <label>Licensi</label><input type="date" name="licensi_dokter" value="<?php echo date('Y-m-d'); ?>">
        <label>Kontrak Awal</label><input type="date" name="kontrak_mulai" value="<?php echo date('Y-m-d'); ?>">
        <label>Kontrak Akhir</label><input type="date" name="kontrak_selesai" value="<?php echo date('Y-m-d'); ?>">
        <input type="submit" value="Submit">
    </table>
</form>
</div>
</div><br>