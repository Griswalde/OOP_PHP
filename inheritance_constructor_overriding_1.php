<?php
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($jenis,$merek,$stok){
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}

    class Telivisi extends Produk {
        public function __construct($jenis,$merek,$stok)
        {
            parent::__construct($jenis,$merek,$stok);
        }
        
    }


    $produk02 = new Produk("kontol","memek",50);

echo "<pre>";
print_r($produk02);
echo "</pre>";

echo "<br>";

$produk01 = new Telivisi("Tv","Samsung", 20);


echo "<pre>";
print_r($produk01);
echo "</pre>";