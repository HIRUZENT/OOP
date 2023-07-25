<?php 

class produk{
	public $stok = 10, $hasil;

	public function ambil(){
		$this->stok;
		return $this->stok--;
	}

	public function tambah($tambah){
		$this->stok + $tambah;

		if ($this->stok > 100) {
			echo "maaf gabisa ";
			$this->stok - $tambah;
		}

		if ($this->stok < 100) {
			echo "yes bisa ditambah : " . $tambah;
			echo "<br>";
			return $this->hasil + $tambah;
		}
	}
	public function cek(){
		echo $this->stok + 1;
	}
}

$cetak = new produk();
echo $cetak->ambil();
echo "<br>";
echo $cetak->ambil();
echo "<br>";
echo $cetak->ambil();
echo "<br>";
echo $cetak->ambil();
echo "<br>";
echo $cetak->tambah(10);
echo "<br>";
echo $cetak->tambah(20);
echo "<br>";
echo $cetak->cek();
echo "<br>";