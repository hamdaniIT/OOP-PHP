<?php

class Produc{
    
    private $nama,
            $ket,
            $harga;
    function __construct($nama,$ket,$harga){
        $this->nama=$nama;
        $this->ket=$ket;
        $this->harga=$harga;
    }
    function detailBarang(){
        $str= "Nama : $this->nama , $this->ket, $this->harga";
        return $str;

    }
}
$produk1= new Produc("Mie Instan","100 dus","200000");
$produk2= new Produc("Pocariswet","200 kaleng","300000");
var_dump($produk1);
var_dump($produk2);
echo "<hr>";
echo $produk1->detailBarang();
echo "<hr>";
echo $produk2->detailBarang();
// phpinfo();