<?php 
require_once 'dbkoneksi.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM pembelian WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location: index.php?hal=pembelian');
?>