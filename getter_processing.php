<?php
class Produk {
    private $merek = "";

    public function setMerek($merek){
        if(is_string($merek)){
            $this->merek = $merek;
        }
        else {
            echo"error: merek harus berbentuk string<br>";
        }
    }

    public function getMerek(){
        return strtoupper($this->merek);
    }
}

$produk01 = new Produk();
echo $produk01->setMerek("dan");

$produk01->setMerek("acer");
echo $produk01->getMerek();