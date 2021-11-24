<?php

include "formbelanja.php";

class skin
{
    var $ttlelite, $ttlspecial, $ttlepic;
   
    public function __construct($elite, $special, $epic){
        $this->elite = $elite;
        $this->special = $special;
        $this->epic = $epic;
    }

    public function getelite(){
        $this->ttlelite = $this->elite * 100000;
        echo "<br>harga skin elite : ".$this->ttlelite;
    }

    public function getspecial(){
        $this->ttlspecial = $this->special * 125000;
        echo "<br>harga skin special : ".$this->ttlspecial;
    }

    public function getepic(){
        $this->ttlepic = $this->epic * 150000;
        echo "<br>harga skin epic : ".$this->ttlepic;
    }

    public function total(){
        $total = $this->ttlelite + $this->ttlspecial + $this->ttlepic;
        echo "<br>total belanjaan = ". $total;
    }
}

$elite = $_POST["elite"];
$special = $_POST["special"];
$epic = $_POST["epic"];
$transaksi = new skin($elite, $special, $epic);
$transaksi->getelite();
$transaksi->getspecial();
$transaksi->getepic();
$transaksi->total();
?>