<?php

Class Produk {
    public $Judul,
           $penulis,
           $penerbit,
           $harga = 0; 

    public function __construct( $judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "this->penulis, $this->penerbit";
    }
}


class CetakInfoProduk{
    public function cetak ( produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) ";
        return $str;
    }
}

$produk1 = new produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000);
$produk2 = new produk("Uncharted", "Nail Druckman", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
