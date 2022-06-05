<?php
class Produk {
    public function hello(){
        return "ini dari Produk";
    }
}

    class Telivisi extends Produk {
        public function hello(){
            return "ini dari Telivisi";
        }
    }

    $produk01 = new Telivisi();
    echo $produk01->hello();