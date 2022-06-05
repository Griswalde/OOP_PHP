<?php
class Produk {
    public $harga = 0;
    private const KURSUSD = 15000;

    public function hargaIDR(){
        return $this->hargaUSD * self::KURSUSD;
    }
}

$produk01 = new Produk();
$produk01->hargaUSD = 15;

echo $produk01->hargaIDR();