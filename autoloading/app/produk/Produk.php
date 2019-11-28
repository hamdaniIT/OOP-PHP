<?php

abstract class Produk
{
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;

        return $this;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;

        return $this;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;

        return $this;
    }
    public function getHarga()
    {
        return $this->harga;
    }
    public function setHarga($harga)
    {
        $this->harga = $harga;

        return $this;
    }
    public function getLabel(){
        return "$this->penulis , $this->penerbit";
    }
    abstract public function getInfo();
}
