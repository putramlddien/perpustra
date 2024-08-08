<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php';
?><body><title>Licensi Dokter</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<br>
<div class="content"><!-- <?php include '../data/pagination.php' ?> -->
    <h2>Licensi Dokter</h2>
    <table id="customers">
    <tr><th>NO</th><th>ID Licensi</th><th>NIP</th><th>Nama Dokter</th><th>Licensi Dokter</th>
    <th>Kontrak Mulai</th><th>Kontrak Berakhir</th><th colspan="2">Aksi</th></tr><br>
    <?php
    $sql = ("select * from tb_licensi LIMIT $posisi,$batas");
    $query= mysqli_query($db_link,$sql);
    $no=1;
    while ($r =  mysqli_fetch_array($query)) { ?>
        <tr>
            <td><?php echo "$no"; ?></td>
            <td><?php echo "$r[id_licensi]"; ?></td>
            <td><?php echo "$r[nip_dokter]"; ?></td>
            <td><?php echo "$r[nama_dokter]"; ?></td>
            <td><?php echo "$r[licensi_dokter]"; ?></td>
            <td><?php echo "$r[kontrak_mulai]"; ?></td>
            <td><?php echo "$r[kontrak_selesai]"; ?></td>
            <td><a href="edit_data.php?id=<?php echo "$r[id_licensi]"; ?>" class="editbutton">Edit</a></td>
            <td><a href="hapus.php?id=<?php echo "$r[id_licensi]"; ?>"onclick="return confirm('Anda yakin ingin menghapus?')" class="editbutton">Hapus</a></td>
            </tr>
            <?php $no++; }?>
    
</table><br><br>
<div class="pagination">
<?php
$sql6 = ("select * from tb_licensi");
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