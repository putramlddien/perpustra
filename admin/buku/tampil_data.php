<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php';
?><body><title>(Admin) Data Buku</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<br>
<div class="content"><!-- <?php include '../data/pagination.php' ?> -->
    <h2>PPQ Dapin</h2>
    <a class="button" href="tambah_data.php">Tambah Data</a><br>
    <table id="customers">
    <tr><th>NO</th><th>Kode Buku</th><th>Judul</th><th>Cover</th><th>Pengarang</th><th>Penerbit</th><th>Tahun Terbit</th><th>Stok</th><th colspan="2">Aksi</th></tr><br>
    <?php
    $sql = ("select * from tb_buku LIMIT $posisi,$batas");
    $query= mysqli_query($db_link,$sql);
    $no=1;
    while ($r =  mysqli_fetch_array($query)) { ?>
        <tr>
            <td><?php echo "$no"; ?></td>
            <td><?php echo "$r[kode_buku]"; ?></td>
            <td><?php echo "$r[judul]"; ?></td>
            <td><img src="../../gambar/<?php echo "$r[gambar]"; ?>" style="width: 50px; height: 60px" name="gambar"></td>
            <td><?php echo "$r[pengarang]"; ?></td>
            <td><?php echo "$r[penerbit]"; ?></td>
            <td><?php echo "$r[tahun_terbit]"; ?></td>
            <td><?php echo "$r[stok]"; ?></td>
            <td><a href="edit_data.php?id=<?php echo "$r[kode_buku]"; ?>" class="editbutton">Edit</a></td>
            <td><a href="hapus.php?id=<?php echo "$r[kode_buku]"; ?>"onclick="return confirm('Anda yakin ingin menghapus?')" class="editbutton">Hapus</a></td>
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