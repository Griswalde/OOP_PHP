<?php

use Telivisi as GlobalTelivisi;

class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($jenis,$merek,$stok)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}

class Telivisi Extends Produk {
    public $ukuranLayar;


    public function __construct($jenis,$merek,$stok,$ukuranLayar){
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
        $this->ukuranLayar = $ukuranLayar;
}
}
    $produk01 = new Telivisi("Televisi","Samsung",30,32);

    echo "<pre>";
    print_r($produk01);
    echo "</pre>";