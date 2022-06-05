<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function borongProduk($jumlah = 10) {
        $this->stok = $this->stok - $jumlah;
    }

    public function cekStok(){
        return "Sisa Stok: ". $this->stok . "<br>"; 
    }

    

}

$produk01 = new Produk();
$produk01->jenis = "Telivisi";
$produk01->merek = "Asus";
$produk01->stok = "90";

$produk01->borongProduk();
echo $produk01->cekStok();

$produk01->borongProduk(20);
echo $produk01->cekStok();