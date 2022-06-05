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


$mesinCuci = new Produk();
$mesinCuci->sku = "002";
$mesinCuci->merek = "LG";
$mesinCuci->harga = 1500000000;

echo $mesinCuci->sku;
echo "<br>";
echo $mesinCuci->merek;
echo "<br>";
echo $mesinCuci->harga;
echo "<br>";
echo $mesinCuci->pesanProduk();
echo "<br>";
echo $mesinCuci->memekKuda();