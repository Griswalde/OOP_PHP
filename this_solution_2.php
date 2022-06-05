<?php
class Produk {
    public $jenis = "";
    public $merek = "";

    public function pesanProduk(){
        return $this->jenis. " ". $this->merek." dipesan....";
    }
}

$produk01 = new Produk();
$produk01->jenis = "Telivisi";
$produk01->merek = "Samsung";


$produk02 = new Produk();
$produk02->jenis = "Monitor";
$produk02->merek = "Asus";


echo $produk01->pesanProduk();
echo "<br>";
echo $produk02->pesanProduk();