<?php
class Produk {
    public $sku = "001";
    public $merek = "samsung";
    public $harga = 40000;

    public function pesanProduk(){
        return "Produk dipesan....";
    }

    public function memekKuda(){
        return "Produk memek....";
    }
}

$telivisi = new Produk();

$telivisi->sku = "001";
$telivisi->merek = "40000";
$telivisi->harga = 15000000;

$mesinCuci = new Produk();
$mesinCuci->sku = "002";
$mesinCuci->merek = "LG";
$mesinCuci->harga=150000;

$speaker = new Produk();
$speaker->sku = "003";
$speaker->merek = "edifier";
$speaker->harga = 950000;

print_r ($telivisi);
echo "<br>";
print_r($mesinCuci);
echo "<br>";
print_r($speaker);
