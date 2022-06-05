<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function pesanProduk(){
        $this->stok = $this->stok -1;

    }

    public function borongProduk($jumlah) {
        $this->stok = $this->stok -$jumlah;
    }

    public function cekStok(){
        return "sisa stok: ". $this->stok. "<br>";
    }
}

$produk01 = new Produk();
$produk01->jenis = "Telivisi";
$produk01->merek = "Asus";
$produk01->stok = "90";

echo $produk01->cekStok();

$produk01->borongProduk(10);
echo $produk01->cekStok();

$produk01->borongProduk(25);
echo $produk01->cekStok();