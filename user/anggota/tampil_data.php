<?php
    include '../../koneksi.php';  
    include '../bar/navbar.php';   
?><body><?php     
    $tabel = "tb_anggota";
    $od = "nama_anggota";
    $ke = "tampil_data.php"; ?>
<link rel="stylesheet" href="../style.css" type="text/css">
<br><title>Data Anggota</title>
<div class="content"><!-- <?php include '../data/pagination.php' ?> -->
    <h2>Data Anggota</h2>
    <!-- <?php include "../../cari.php" ?> -->
    <table id="customers">
    <tr><th>NO</th><th>NISN</th><th>Nama Anggota</th><th>Kelas</th><th>Alamat</th></tr><br>
    <?php
    $sql = ("select * from tb_anggota LIMIT $posisi,$batas");
    $query= mysqli_query($db_link,$sql);
    $no=1;
    while ($r=  mysqli_fetch_array($query))
    { ?>
        <tr>
            <td><?php echo "$no"; ?></td>
            <td><?php echo "$r[nisn_anggota]"; ?></td>
            <td><?php echo "$r[nama_anggota]"; ?></td>
            <td><?php echo "$r[kelas]"; ?></td>
            <td><?php echo "$r[alamat]"; ?></td>
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
</div>
</body>