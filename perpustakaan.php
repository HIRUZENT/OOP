<style>
	body{
		padding: 10px;
	}
	pre{
		font-size: 20px;
		font-family: inherit;
	}
</style>

<?php
interface tampil{
	public function tampilkan_data_buku();
}

abstract class perpustakaan{
	abstract function judul();
	abstract function pengarang();
	abstract function kelas();
	abstract function jumlah_halaman();
	abstract function tahun_terbit();
}


class buku1 extends perpustakaan implements tampil{
	public function judul(){
		return "Tekhnologi Jaringan Berbasis Luas (WAN)";
	}
		public function pengarang(){
		return "Rudi Setiawan";
	}
		public function kelas(){
		return "XI Program Keahlian RPL";
	}
		public function jumlah_halaman(){
		return "320";
	}
		public function tahun_terbit(){
		return "2018";
	}

	public function tampilkan_data_buku(){
		echo "<pre> Judul 			: " . $this->judul() ."<br> Pengarang		: " . $this->pengarang()."<br> kelas 			: " . $this->kelas()."<br> Jumlah Halaman 	: " . $this->jumlah_halaman()."<br> Tahun Terbit 		: " . $this->tahun_terbit() . "</pre>";
	}
}

class buku2 extends perpustakaan implements tampil{
	public function judul(){
		return "Pendidikan Kewarganegaraan";
	}
		public function pengarang(){
		return "Istiana Nen Arienti";
	}
		public function kelas(){
		return "XI SMA/MA/SMK";
	}
		public function jumlah_halaman(){
		return "312";
	}
		public function tahun_terbit(){
		return "2018";
	}

	public function tampilkan_data_buku(){
		echo "<pre> Judul 			: " . $this->judul() ."<br> Pengarang		: " . $this->pengarang()."<br> kelas 			: " . $this->kelas()."<br> Jumlah Halaman 	: " . $this->jumlah_halaman()."<br> Tahun Terbit 		: " . $this->tahun_terbit() . "</pre>";
	}
}

class buku3 extends perpustakaan{
	public function judul(){
		return "Bahasa Inggris";
	}
		public function pengarang(){
		return "Naufal Fadhilah F";
	}
		public function kelas(){
		return "XI SMA/MA/SMK";
	}
		public function jumlah_halaman(){
		return "120";
	}
		public function tahun_terbit(){
		return "2023";
	}

}

$data_buku_1 = new buku1();
$data_buku_2 = new buku2();
$data_buku_3 = new buku3();
function cetak($cetak_buku){
	$cetak_buku->tampilkan_data_buku();
}

echo "<h1>DATA BUKU PERPUSTAKAAN</h1>";
echo "<h2>Buku 1</h2>";
echo cetak($data_buku_1);
echo "<br>";
echo "<h2>Buku 2</h2>";
echo cetak($data_buku_2);

?>