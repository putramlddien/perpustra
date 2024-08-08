<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php';
?><body><title>Biodata Dokter</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<br>
<div class="content"><!-- <?php include '../data/pagination.php' ?> -->
    <h2>Biodata Dokter</h2>
    <a class="button" href="tambah_data.php">Tambah Data</a><br>
    <table id="customers">
    <tr><th>NO</th><th>NIP</th><th>Nama</th><th>Tanggal Lahir</th><th>Agama</th>
    <th>Bidang Keahlian</th><th>Pangkat/Golongan</th><th>Gelar</th><th colspan="3">Aksi</th></tr><br>
    <?php
    $sql = ("select * from tb_biodokter LIMIT $posisi,$batas");
    $query= mysqli_query($db_link,$sql);
    $no=1;
    while ($r =  mysqli_fetch_array($query)) { ?>
        <tr>
            <td><?php echo "$no"; ?></td>
            <td><?php echo "$r[nip_dokter]"; ?></td>
            <td><?php echo "$r[nama_dokter]"; ?></td>
            <!-- <td><img src="../../gambar/<?php echo "$r[gambar]"; ?>" style="width: 50px; height: 60px" name="gambar"></td> -->
            <td><?php echo "$r[ttl_dokter]"; ?></td>
            <td><?php echo "$r[agama]"; ?></td>
            <td><?php echo "$r[bidang_dokter]"; ?></td>
            <td><?php echo "$r[pangkat_golongan]"; ?></td>
            <td><?php echo "$r[gelar_sarjana]"; ?></td>
            <td><a href="licensi_dokter.php?id=<?php echo "$r[nip_dokter]"; ?>" class="editbutton">Licensi</a></td>
            <td><a href="edit_data.php?id=<?php echo "$r[nip_dokter]"; ?>" class="editbutton">Edit</a></td>
            <td><a href="hapus.php?id=<?php echo "$r[nip_dokter]"; ?>"onclick="return confirm('Anda yakin ingin menghapus?')" class="editbutton">Hapus</a></td>
            </tr>
            <?php $no++; }?>
    
</table><br><br>
<div class="pagination">
<?php
$sql6 = ("select * from tb_biodokter");
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