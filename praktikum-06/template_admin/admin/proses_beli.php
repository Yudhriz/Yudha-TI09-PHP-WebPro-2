<?php
require_once 'dbkoneksi.php';
?>
<?php
$_tgl = $_POST['tanggal'];
$_nomor = $_POST['nomor'];
$_produk_id = $_POST['produk_id'];
$_jumlah = $_POST['jumlah'];
$_harga = $_POST['harga'];
$_vendor_id = $_POST['vendor_id'];
$_proses = $_POST['proses'];

// array data
$ar_data[] = $_tgl; // ? 1
$ar_data[] = $_nomor; // 2
$ar_data[] = $_produk_id; // ? 3
$ar_data[] = $_jumlah; // ? 4
$ar_data[] = $_harga; // ? 5
$ar_data[] = $_vendor_id; // ? 6

if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO pembelian (tanggal, nomor, produk_id, jumlah, harga, vendor_id) VALUES (?,?,?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit']; // ? 8
   $sql = "UPDATE pembelian SET tanggal=?, nomor=?, produk_id=?, jumlah=?, harga=?, vendor_id=? WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location: index.php?hal=pembelian');
?>