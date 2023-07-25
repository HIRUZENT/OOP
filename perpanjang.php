<?php
class main {
	const p = 2;
	const l = 4;
	const t = 5;

	public $v, $luas;
}

class persegi_panjang extends main {
	public function luas(){
		$this->luas = parent::p * parent::l;
		return $this->luas;

	}
}
class balok extends persegi_panjang {
	public function volume_balok(){
		$this->v = $this->luas() * self::t;
		return $this->v;
	}
}

$hitung_luas = new persegi_panjang();
$hitung_volume = new balok();

function hitung_luas($hasil){
	$hasil->luas();
}
function hitung_volume($hasil){
	$hasil->volume_balok();

}
echo "Luas Persegi Panjang : ";
echo $hitung_luas->luas();
echo "<br>";
echo "<br>";
echo "Volume Balok : ";
echo $hitung_volume->volume_balok();
 ?>