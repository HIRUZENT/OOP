<?php 
class Produk{
	public $jenis = "Sport", $merk = "Yamaha", $stok = 20; //jenis dan merk menyimpan string

	public function cekStok(){
		echo "Cek stok merk motor  " . $this->merk  . " Jenis ". $this->jenis ;
		echo "<br>";
		echo "Stok saat ini adalah : " . $stok = $this->stok;
	}

	public function tambahStok($tambah = 12){
        $this->stok = $this->stok + $tambah;

		echo "<br>";

		if ($this->stok <= 100) {
			echo "Stok berhasil ditambah " . $tambah;
			echo "<br>";
			echo "Stok saat ini adalah : " . $this->stok;
		}

		if ($this->stok > 100) {
            $this->stok = $this->stok - $tambah;
            echo "Maaf, stok sudah penuh. Penambahan stok dibatalkan";
        }
	}
}

$cetak = new Produk();
echo $cetak->cekStok();
echo "<br>";
echo "<br>";
echo $cetak->tambahStok(20);
echo "<br>";
echo $cetak->tambahStok(30);
echo "<br>";
echo $cetak->tambahStok();
echo "<br>";
echo $cetak->tambahStok(100);
echo "<br>";
echo "<br>";
echo $cetak->cekStok();
 ?>