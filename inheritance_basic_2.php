<?php

use Telivisi as GlobalTelivisi;

class Produk {
    public $merek = "Sharp";
    public $stok = 50;
    public $tolol = "ngentot";

    public function cekStok(){
        return "Sisa stok: ". $this->stok;
    }
}

class Telivisi extends Produk {
    public $jenis = "Telivisi";

    public function cekStokTelivisi(){
        return $this->jenis." ".$this->merek.", ".$this->cekStok();
    }
}

class Babi extends Telivisi {
    public $genre = "Alwi";

    public function kontolSilvi(){
        return $this->genre. " ". $this->tolol. ",".$this->cekstok();
    }
}

$produk01 = new Telivisi();
echo $produk01->merek;
echo "<br>";
echo $produk01->cekStokTelivisi();
echo "<br>";
$produk02 = new Babi();
echo $produk02->tolol;
echo "<br>";
echo $produk02->kontolSilvi();
