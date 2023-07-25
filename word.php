<?php 
abstract class kendaraan{
	abstract function berjalan($jalan);
	abstract function berhenti();
}
	class mobil extends kendaraan{
		public function berjalan($jalan){
			$this->jalan = $jalan;
			$jalan = "asdas";
			echo "Mobil Naufal sedang berjalan $jalan";
		}

		public function berhenti(){
			echo "Mobil Aep sedang berhenti";
		}
}

	class motor extends mobil{
		public function berjalan($jalan){
			$this->jalan = $jalan;
			echo "Mobil Naufal sedang berjalan $jalan";
		}
			public function berhenti(){
			echo "Motor Aep sedang berhenti";
		}
			public function melayang(){
				echo "Motornya melayang sendiri";
		}
}


$hasil = new mobil();
echo $hasil->berjalan("");
echo "<br>";
echo $hasil->berhenti();
echo "<br>";

$hasil2 = new motor();
echo $hasil2->berjalan("");
echo "<br>";
echo $hasil2->berhenti();
echo "<br>";
echo $hasil2->melayang();

 ?>