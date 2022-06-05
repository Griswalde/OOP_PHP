<?php
class Produk {
    public $jenis = "";
    public $merek = "";

    public function pesanProduk(){
        return $this->jenis. " dipesan....";
    }

    public function memekGajah(){
        return $this->merek. " memek....";
    }
}

$produk01 = new Produk();
$produk01->jenis = "Telivisi";
$produk01->merek = "Samsung";

echo $produk01->pesanProduk();
echo "<br>";
echo $produk01->memekGajah();