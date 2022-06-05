<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;
}

$produk01 = new Produk();
$produk01->jenis = "Telivisi";
$produk01->merek = "Samsung";
$produk01->stok = 20;

$produk02 = new Produk();
$produk02->jenis = "Mesin Cuci";
$produk02->merek = "LG";
$produk02->stok = 30;

print_r($produk01);
echo "<br>";
print_r($produk02);