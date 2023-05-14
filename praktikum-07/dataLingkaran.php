<?php
require_once "classLingkaran.php";
echo "Nilai PHI " . Lingkaran::PHI;
$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);

echo "<br> Luas Lingkaran I = " . $lingkaran1->getLuas();
echo "<br> Luas Lingkaran II = " . $lingkaran2->getLuas();
?>