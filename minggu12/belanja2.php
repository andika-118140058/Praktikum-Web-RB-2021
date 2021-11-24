<?php

include "formbelanja2.php";

class diamond
{
    var $ttlkecil, $ttlsedang, $ttlbesar;
   
    public function __construct($kecil, $sedang, $besar){
        $this->kecil = $kecil;
        $this->sedang = $sedang;
        $this->besar = $besar;
    }

    public function getkecil(){
        $this->ttlkecil = $this->kecil * 250000;
        echo "<br>harga 2180 DM : ".$this->ttlkecil;
    }

    public function getsedang(){
        $this->ttlsedang = $this->sedang * 600000;
        echo "<br>harga 5600 DM : ".$this->ttlsedang;
    }

    public function getbesar(){
        $this->ttlbesar = $this->besar * 1150000;
        echo "<br>harga 11200 DM : ".$this->ttlbesar;
    }

    public function total(){
        $total = $this->ttlkecil + $this->ttlsedang + $this->ttlbesar;
        echo "<br>total belanjaan = ". $total;
    }
}

$kecil = $_POST["kecil"];
$sedang = $_POST["sedang"];
$besar = $_POST["besar"];
$transaksi = new skin($kecil, $sedang, $besar);
$transaksi->getkecil();
$transaksi->getsedang();
$transaksi->getbesar();
$transaksi->total();
?>