<?php

Class Produk {
    public $Judul,
           $penulis,
           $penerbit,
           $harga = 0; 

    public funtion getLabel{
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1 -> judul = "Naruto";
// var_dump($produk1);

// $produk2 = new produk2();
// $produk2->judul = "Uncharted";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "30000";

$produk4 = new produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Nail Druckmann";
$produk4>penerbit = "Sony computer";
$produk4->harga = "250000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

