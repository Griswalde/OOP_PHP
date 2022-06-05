<?php
class Produk {
    public $jenis = "";
    public $merek = "";

    public function pesanProdukTelivisi(){
        return "Telivisi dipesan...";
    }

    public function pesanProdukMesinCuci(){
        return "Mesin cuci dipesan...";
    }
}

$produk01 = new Produk();
$produk01->jenis = "Telivisi";
$produk01->merek = "Samsung";

$produk02 = new Produk();
$produk02->jenis = "Mesin Cuci";
$produk02->merek = "LG";

echo $produk01->pesanProdukTelivisi();
echo "<br>";
echo $produk02->pesanProdukMesinCuci();

