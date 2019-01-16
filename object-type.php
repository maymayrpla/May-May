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


class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()}, {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
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

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
