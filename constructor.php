<?php 

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
}

public function getLabel() {
	return "$this->penulis, $this->penerbit";
}
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// var_dump($produk2->judul);

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Unchanted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("DragonBall");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);


