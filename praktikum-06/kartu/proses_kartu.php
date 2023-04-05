<?php
require_once 'dbkoneksi.php';
?>
<?php
$_nama = $_POST['nama'];
$_kota = $_POST['kota'];
$_kontak = $_POST['kontak'];
$_proses = $_POST['proses'];

// array data
$ar_data[] = $_nama; // ? 1
$ar_data[] = $_kota; // 2
$ar_data[] = $_kontak; // ? 3

if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO vendor (nama, kota, kontak) VALUES (?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit']; // ? 8
   $sql = "UPDATE vendor SET nama=?,kota=?, kontak=? WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location:list_vendor.php');
?>