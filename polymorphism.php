<?php 
interface hitung{
	public function km();
	public function dm();
	public function mm();
}

abstract class rumus{
	abstract function hasil();
	const km = 100000;
	const dm = 10;
	const mm = 10;
}

class A extends rumus implements hitung{
	const cm = 100;

		public function km(){
		echo "Diketahui cm = ". self::cm;
		echo "<br>";
		$km = self::cm / parent::km;
		echo "Hasil dari konversi cm ke km = " .$this->hasil = $km. " km";

	}
		public function dm(){
		echo "<br>";
		$dm = self::cm / parent::dm;
		echo "Hasil dari konversi cm ke dm = " . $this->hasil = $dm. " dm";

	}
		public function mm(){
		echo "<br>";
		$mm = self::cm * parent::mm;
		echo "Hasil dari konversi cm ke mm = " . $this->hasil = $mm. " mm";
	}

	public function hasil(){
		echo $this->km(). $this->dm(). $this->mm();
	}
}

class B extends rumus implements hitung{
	const cm = 0.25;
		public function km(){
		echo "Diketahui cm = ". self::cm;
		echo "<br>";
		$km = self::cm / parent::km;
		echo "Hasil dari konversi cm ke km = " .$this->hasil = $km. " km";

	}
		public function dm(){
		echo "<br>";
		$dm = self::cm / parent::dm;
		echo "Hasil dari konversi cm ke dm = " . $this->hasil = $dm. " dm";

	}
		public function mm(){

		echo "<br>";
		$mm = self::cm * parent::mm;
		echo "Hasil dari konversi cm ke mm = " . $this->hasil = $mm. " mm";
	}

	public function hasil(){
		echo $this->km(). $this->dm(). $this->mm();
	}
}

class C extends rumus implements hitung{
	const cm = 25000;
		public function km(){
		echo "Diketahui cm = ". self::cm;
		echo "<br>";
		$km = self::cm / parent::km;
		echo "Hasil dari konversi cm ke km = " .$this->hasil = $km. " km";

	}
		public function dm(){
		echo "<br>";
		$dm = self::cm / parent::dm;
		echo "Hasil dari konversi cm ke dm = " . $this->hasil = $dm. " dm";

	}
		public function mm(){
		echo "<br>";
		$mm = self::cm * parent::mm;
		echo "Hasil dari konversi cm ke mm = " . $this->hasil = $mm. " mm";
	}

	public function hasil(){
		echo $this->km(). $this->dm(). $this->mm();
	}
}

class D extends rumus implements hitung{
	const cm = 5;
		public function km(){
		echo "Diketahui cm = ". self::cm;
		echo "<br>";
		$km = self::cm / parent::km;
		echo "Hasil dari konversi cm ke km = " .$this->hasil = $km. " km";

	}
		public function dm(){
		echo "<br>";
		$dm = self::cm / parent::dm;
		echo "Hasil dari konversi cm ke dm = " . $this->hasil = $dm. " dm";
	}
		public function mm(){
		echo "<br>";
		$mm = self::cm * parent::mm;
		echo "Hasil dari konversi cm ke mm = " . $this->hasil = $mm. " mm";
	}

	public function hasil(){
		echo $this->km(). $this->dm(). $this->mm();
	}
}

$jawaban1 = new A();
$jawaban2 = new B();
$jawaban3 = new C();
$jawaban4 = new D();

function hitung($hasil){
	$hasil->hasil();
}

echo hitung($jawaban1);
echo "<br>";
echo "<br>";
echo hitung($jawaban2);
echo "<br>";
echo "<br>";
echo hitung($jawaban3);
echo "<br>";
echo "<br>";
echo hitung($jawaban4);

?>