<?php

include "index6.php";

class buah
{
    var $ttlMangga, $ttlJambu, $ttlSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getMangga(){
        $this->ttlMangga = $this->mangga * 15000;
        echo "<br>harga mangga : ".$this->ttlMangga;
    }

    public function getJambu(){
        $this->ttlJambu = $this->jambu * 13000;
        echo "<br>harga jambu : ".$this->ttlJambu;
    }

    public function getSalak(){
        $this->ttlSalak = $this->salak * 10000;
        echo "<br>harga salak : ".$this->ttlSalak;
    }

    public function total(){
        $total = $this->ttlMangga + $this->ttlJambu + $this->ttlSalak;
        echo "<br>total belanjaan = ". $total;
    }
}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
$transaksi = new buah($mangga, $jambu, $salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->total();
?>