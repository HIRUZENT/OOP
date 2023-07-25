<?php 
abstract class status{
		abstract function pelanggan($lembar);
		abstract function bukan_pelanggan($lembar);
}

class Mandiri_Fotocopy extends status{
	public $hargap, $hargabp, $lembar;
	const pelanggan = 75;

	public function pelanggan($lembar){
		$this->lembar = $lembar;
		echo "PELANGGAN";
		echo "<br>";
		echo "Fotokopi sebanyak " . $this->lembar;
		echo "<br>";
		echo "Harga satuan = Rp.75.00,-";
		echo "<br>";
		echo "Total = Rp." . self::pelanggan * $this->lembar;
	}

	public function bukan_pelanggan($lembar){
		$this->lembar = $lembar;

		if ( $this->lembar < 100 ) {

			echo "BUKAN PELANGGAN";
			echo "<br>";
			echo "Fotokopi sebanyak " . $this->lembar;
			echo "<br>";
			echo "Harga satuan = Rp.150.00,-";
			echo "<br>";
			echo "Total = Rp." . 150 * $this->lembar;

		} elseif ($this->lembar > 200) {

			echo "BUKAN PELANGGAN";
			echo "<br>";
			echo "Fotokopi sebanyak " . $this->lembar;
			echo "<br>";
			echo "Harga satuan = Rp.80.00,-";
			echo "<br>";
			echo "Total = Rp." . 80 * $this->lembar;
			
		} elseif ($this->lembar > 100) {

			echo "BUKAN PELANGGAN";
			echo "<br>";
			echo "Fotokopi sebanyak " . $this->lembar;
			echo "<br>";
			echo "Harga satuan = Rp.100.00,-";
			echo "<br>";
			echo "Total = Rp." . 100 * $this->lembar;
		} 
	}
}

$fotokopi = new Mandiri_Fotocopy();

function hitung_pelanggan($hasil){
	$hasil->pelanggan(10);
}

function hitung_bukan_pelanggan($hasil){
	$hasil->bukan_pelanggan(99);
	echo "<br>";
	echo "<br>";
	$hasil->bukan_pelanggan(101);
	echo "<br>";
	echo "<br>";
	$hasil->bukan_pelanggan(201);
	echo "<br>";
	echo "<br>";
}

echo hitung_pelanggan($fotokopi);
echo "<br>";
echo "<br>";
echo hitung_bukan_pelanggan($fotokopi);
echo "<br>";
echo "<br>";

 ?>