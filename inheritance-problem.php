<?php

class Produk {
    //property di dalam class
    public  $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;
    
    
    //membuat constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0,$tipe ) {
        
        //manggil variabel
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;

    }


    public function getLabel() {
        //menggunakan this untuk merujuk nilai dari variabel
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        //untuk ngambil informasi lengkap
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        //kondisi menentukan komik atau game
        if ($this->tipe == "Komik" ) {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if( $this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}




class CetakInfoProduk {
    public function cetak ( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}






//mengisi melalui parameter karena menggunakan constructor 
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen jump", 30000, 100, null, "Komik");

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, null, 50, "Game");


// Membuat parent child seperti berikut 
// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game  : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 Jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
