<?php
class Produk {
    public $merek = "Sony";
}

class Telivisi extends Produk {
    public $merek = "Panasonic";
}

$produk01 = new Telivisi();
echo $produk01->merek;