<?php

Class Produk {
    public $Judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct( $judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe
    }

    public function getLabel() {
        return "this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // komik : Naruto | Masashi kisimoto, Shonen Jump (Rp. 30.000) - 100 halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} halaman.";
        } else if ($this->tipe == "Game"){
            $str .= "~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}


class CetakInfoProduk{
    public function cetak ( produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
        return $str;
    }
}

$produk1 = new produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new produk("Uncharted", "Nail Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
