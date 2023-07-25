<?php 
class Produk{
	public $jenis = "Sport", $merk = "Yamaha", $stok = 20; //jenis dan merk menyimpan string

	public function pesanProduk(){
		echo "Tambah stok motor " . $this->merk . " Jenis ". $this->jenis;
		echo "<br>";
		echo "Stok berhasil dipesan ";
		echo "<br>";
		$stok = $this->stok;
		$this->stok--;
		echo "Stok saat ini adalah : " . $this->stok;
	}

	public function cekStok(){
		echo "Cek stok merk motor  " . $this->merk  . " Jenis ". $this->jenis ;
		echo "<br>";
		echo "Stok saat ini adalah : " . $stok = $this->stok;
	}
}


$cetak = new Produk();
echo $cetak->cekStok();
echo "<br>";
echo "<br>";
echo $cetak->pesanProduk();
echo "<br>";
echo "<br>";
echo $cetak->pesanProduk();
echo "<br>";
echo "<br>";
echo $cetak->pesanProduk();