<?php
require_once 'dbkoneksi.php';
?>
<?php
include_once 'top.php';
include_once 'menu.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM vendor WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?= $row['id'] ?></td>
        </tr>
        <tr>
            <td>Nomor Kode</td>
            <td><?= $row['nomor'] ?></td>
        </tr>
        <tr>
            <td>Nama Vendor</td>
            <td><?= $row['nama'] ?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td><?= $row['kota'] ?></td>
        </tr>
        <tr>
            <td>Kontak</td>
            <td><?= $row['kontak'] ?></td>
        </tr>
    </tbody>
</table>
<?php
include_once 'bottom.php';
?>