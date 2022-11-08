<?php

class Produk {
    //property di dalam class
    public  $judul, 
            $penulis,
            $penerbit,
            $harga;  
    
    //membuat constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        
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

    public function getInfoProduk() {
        //untuk ngambil informasi lengkap
        // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}



//deklarasi child class
class Komik extends Produk {
    //inisiasi variabel pada class komik
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){


        parent::__construct( $judul , $penulis , $penerbit , $harga );

        $this->jmlHalaman = $jmlHalaman;

    }


    public function getInfoProduk() {
        $str = "Komik : " .parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";

        return $str;
    }
    
}

class Game extends Produk {
    //inisiasi variabel pada class komik
    public $waktuMain;
    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0  ) {
    
        parent::__construct( $judul , $penulis , $penerbit , $harga );


        $this->waktuMain = $waktuMain;
    
    }


    public function getInfoProduk() {
        $str = "Game : " .parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";

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
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen jump", 30000, 100);

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
