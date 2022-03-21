<?php
require_once "class_PersegiPanjang.php";
$PersegiPanjang = new PersegiPanjang( 30, 15 );
$PersegiPanjangA = new PersegiPanjang( 15, 10 );
echo "<br/>Luas Persegi Panjang :".$PersegiPanjang->getLuas();
echo "<br>Persegi PanjangA :".$PersegiPanjangA->getLuas();
echo "Keliling Persegi Panjang :".$PersegiPanjang->getKeliling();
echo "<br>Keliling Persegi PanjangA :".$PersegiPanjangA->getKeliling();
?>