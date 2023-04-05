<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM kartu";
$rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_kartu.php" role="button">Create Vendor</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Diskon</th>
            <th>Iuran</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $row['kode'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['dsikon'] ?></td>
                <td><?= $row['iuran'] ?></td>
                <td>
                    <a class="btn btn-primary" href="view_vendor.php?id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary" href="form_vendor.php?idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary" href="delete_vendor.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $row['nama'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>