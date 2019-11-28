<?php

class Produc{
    
    private $nama,
            $ket,
            $harga;
    function __construct($nama="nama",$ket="ket",$harga=0){
        $this->nama=$nama;
        $this->ket=$ket;
        $this->harga=$harga;
    }
    function detailBarang(){
        $str= "Nama : $this->nama , $this->ket, $this->harga";
        return $str;
    }
}

class Anak1 extends Produc{
    private $jens;
    public function __construct($nama="nama",$ket="ket",$harga=0,$jenis="Jenis"){
        parent::__construct($nama,$ket,$harga);
        $this->jenis=$jenis;
    };

}
class Anak2 extends Produc{
    private $berat;

}

 $child= new Anak("A","B");

 var_dump($child);

// $produk1= new Produc("Mie Instan","100 dus","200000");
// $produk2= new Produc("Pocariswet","200 kaleng","300000");
// var_dump($produk1);
// var_dump($produk2);
// echo "<hr>";
// echo $produk1->detailBarang();
// echo "<hr>";
// echo $produk2->detailBarang();
// phpinfo();