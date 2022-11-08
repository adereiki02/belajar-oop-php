<?php

class Produk {
    //property di dalam class
    public $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0 ;
    
    
    //membuat constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        
        //manggil variabel
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }


    public function getLabel() {
        //menggunakan this untuk merujuk nilai dari variabel
        return "$this->penulis, $this->penerbit";
    }
}

//mengisi melalui parameter karena menggunakan constructor 
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen jump", 30000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000);

$produk3 = new Produk("Dragon Ball");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game  : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);