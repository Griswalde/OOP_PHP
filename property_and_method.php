<?php
class Produk {
    public $sku = "001";
    public $merek = "samsung";
    public $harga = 40000;

    public function pesanProduk(){
        return "Produk dipesan....";
    }
}

$telivisi = new Produk();
echo $telivisi->sku;
echo "<br>";
echo $telivisi->merek;
echo "<br>";
echo $telivisi->harga;
echo "<br>";
echo $telivisi->pesanProduk;
echo "<br>";