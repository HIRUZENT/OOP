<?php 
class jarak{
	public $cm;
	private $hasil;
	const km = 100000;
	const dm = 10;
	const mm = 10;

	public function cm1(){
		echo "Diketahui cm = 100";
		echo "<br>";
		$this->cm = 100;
		$km = $this->cm / self::km;
		echo "Hasil dari konversi cm ke km = " .$this->hasil = $km. " km";

		echo "<br>";
		$dm = $this->cm / self::dm;
		echo "Hasil dari konversi cm ke dm = " . $this->hasil = $dm. " dm";

		echo "<br>";
		$mm = $this->cm * self::mm;
		echo "Hasil dari konversi cm ke mm = " . $this->hasil = $mm. " mm";
	}


	public function cm2(){

		echo "Diketahui cm = 0.25";
		echo "<br>";
		$this->cm = 0.25;
		$km = $this->cm / self::km;
		echo "Hasil dari konversi cm ke km = " .$this->hasil = $km. " km";

		echo "<br>";
		$dm = $this->cm / self::dm;
		echo "Hasil dari konversi cm ke dm = " . $this->hasil = $dm. " dm";

		echo "<br>";
		$mm = $this->cm * self::mm;
		echo "Hasil dari konversi cm ke mm = " . $this->hasil = $mm. " mm";
	}

	public function cm3(){

		echo "Diketahui cm = 25000";
		echo "<br>";
		$this->cm = 25000;
		$km = $this->cm / self::km;
		echo "Hasil dari konversi cm ke km = " .$this->hasil = $km. " km";

		echo "<br>";
		$dm = $this->cm / self::dm;
		echo "Hasil dari konversi cm ke dm = " . $this->hasil = $dm. " dm";

		echo "<br>";
		$mm = $this->cm * self::mm;
		echo "Hasil dari konversi cm ke mm = " . $this->hasil = $mm. " mm";
	}

	public function cm4(){

		echo "Diketahui cm = 5";
		echo "<br>";
		$this->cm = 5;
		$km = $this->cm / self::km;
		echo "Hasil dari konversi cm ke km = " .$this->hasil = $km. " km";

		echo "<br>";
		$dm = $this->cm / self::dm;
		echo "Hasil dari konversi cm ke dm = " . $this->hasil = $dm. " dm";

		echo "<br>";
		$mm = $this->cm * self::mm;
		echo "Hasil dari konversi cm ke mm = " . $this->hasil = $mm. " mm";
	}
}

$cetak = new jarak();
echo $cetak->cm1();
echo "<br>";
echo "<br>";
echo "<br>";
echo $cetak->cm2();
echo "<br>";
echo "<br>";
echo "<br>";
echo $cetak->cm3();
echo "<br>";
echo "<br>";
echo "<br>";
echo $cetak->cm4();

 ?>