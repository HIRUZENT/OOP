<?php
interface rumus_segitiga{
	const SISI 	 = 12;
	const ALAS 	 = 15;
	const TINGGI = 20;
}

abstract class bangun_datar{
	abstract function luas();
	abstract function keliling();
}

class segitiga extends bangun_datar implements rumus_segitiga{
	public function luas(){
		echo "Hitung luas bangun datar Segitiga";
		echo "<br>";
		echo "Diketahui Alas : " . self::ALAS . "cm";
		echo "<br>";
		echo "Diketahui Tinggi : "  . self::TINGGI . "cm";
		echo "<br>";
		echo "<br>";
		return "Rumus : 1/2 x " . self::ALAS . " x " .self::TINGGI . " = " . 0.5 * self::ALAS * self::TINGGI . "cm";
	}
	public function keliling(){
		return self::SISI * 3;
	}
}

$hasil = new segitiga();

function cetak($jawaban){
	echo $jawaban->luas();
}

echo cetak($hasil);
