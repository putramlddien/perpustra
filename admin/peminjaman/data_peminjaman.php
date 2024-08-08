<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php'; 
?><body><title>(Admin) Data Peminjaman</title>
<link rel="stylesheet" href="../styles.css" type="text/css">
<br>
<div class="content"><!-- <?php include '../data/pagination.php' ?> -->
    <h2>Data Peminjaman</h2>
    <table id="customers">
    <tr><th>NO</th><th>Nama Anggota</th><th>Kode Buku</th><th>Judul Buku</th><th>Tanggal Peminjaman</th><th>Tanggal Pengembalian</th><th>Jumlah</th><th>Pengembalian</th><th>Hapus</th></tr><br>
    <?php
    $sql = ("select * from tb_peminjaman LIMIT $posisi,$batas");
    $query= mysqli_query($db_link,$sql);
    $no=1;
    while ($r =  mysqli_fetch_array($query)) { ?>
        <tr>
            <td><?php echo "$no"; ?></td>
            <td><?php echo "$r[nama_anggota]"; ?></td>
            <td><?php echo "$r[kode_buku]"; ?></td>
            <td><?php echo "$r[judul]"; ?></td>
            <td><?php echo "$r[tanggal_peminjaman]"; ?></td>
            <td><?php echo "$r[tanggal_pengembalian]"; ?></td>
            <td><?php echo "$r[qty]"; ?></td>
            <td><a href="../pengembalian/form_kembali.php?id=<?php echo "$r[id_peminjaman]"; ?>" class="editbutton" action="../data/aksikembali.php">Pengembalian</a></td>
            <td><a href="hapus_peminjaman.php?id=<?php echo "$r[id_peminjaman]"; ?>" class="editbutton">Hapus</a></td>
            </tr>
            <?php $no++; }?>
    
</table><br><br>
<div class="pagination">
<?php
$sql6 = ("select * from tb_buku");
$jmldata=  mysqli_query($db_link,$sql6);
$jmldata=  mysqli_num_rows($jmldata);
$jml_halaman=  ceil($jmldata/3);

for($i=1;$i<=$jml_halaman;$i++)
{
    if($i!=$jml_halaman)
    {
        echo "<a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a>";
    }
    else
    {
        echo "<a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a>";
    }
}
?>
</div>
</div>
</body>