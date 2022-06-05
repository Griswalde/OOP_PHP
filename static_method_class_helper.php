<?php
class ProdukHelper {
    public static function cekValidSKU($sku){
        return preg_match("/^[A-Z]{3}[0-9]{3}$/",$sku);

    }
    public static function cekValidMerek($merek){
        $semuaMerek=["Samsung","LG","Sony","Philips","Sharp","Sanken"];
        return in_array($merek,$semuaMerek);
    }
}

if(ProdukHelper::cekValidSKU("AAA545")){
    echo "Merek AAA545 valid <br>";
}

if(produkHelper::cekValidSKU("AAA545")){
    echo "merek AAA545 valid <br>";
}

if(ProdukHelper::cekValidMerek("sharp")) {
    echo "merek samsung tersedia <br>";
}

if(ProdukHelper::cekValidMerek("samsung")) {
    echo "merek samsung tersedia <br>";
}

if(ProdukHelper::cekValidMerek("Asus")) {
    echo "merek samsung tersedia <br>";
}