<?php

class Pegawai{
    public static $nik=0;

    public static function cetak(){
        echo self::$nik++."<br>";
    }

}

Pegawai::cetak();
Pegawai::cetak();
Pegawai::cetak();
Pegawai::cetak();
$peg = new Pegawai();
echo "<hr>";
$peg->cetak();
$peg->cetak();
