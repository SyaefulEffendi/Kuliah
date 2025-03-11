<?php 
class Produk{
    public $judul = "Judul";
    public $penulis = "penulis";
    public $penerbit = "penerbit";
    public $harga = 0;
}
$produk1 = new Produk();
var_dump($produk1);

$produk2 = new Produk();
var_dump($produk2 -> judul);
?>