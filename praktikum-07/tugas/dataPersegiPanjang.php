<?php
require_once "classPersegiPanjang.php";

$persegipanjang1 = new PersegiPanjang(5, 10);
$persegipanjang2 = new PersegiPanjang(10, 20);

echo "Luas PersegiPanjang I = " . $persegipanjang1->getLuas() . "<br>";
echo "Keliling PersegiPanjang I = " . $persegipanjang1->getKeliling() . "<br>";
echo "Luas PersegiPanjang II = " . $persegipanjang2->getLuas() . "<br>";
echo "Keliling PersegiPanjang II = " . $persegipanjang2->getKeliling() . "<br>";
