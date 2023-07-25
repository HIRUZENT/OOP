<?php 
trait hewan{
	public function kucing(){
		echo "Kucing aneh berasal dari " . $this->getasal();
	}
	public function tikus(){
		echo "Tikus mengerikan berasal dari " . $this->getasal();
	}
    abstract function getasal();
}

trait buah{
	public function mangga(){
		echo "Mangga berasal dari " . $this->getasal();
	}
	public function apel(){
		echo "Apel merah berasal dari " . $this->getasal();
	}
}


class penjualan{
    public $nama;
    public function getasal(){
        return $this->nama;
    }
    public function setasal($nama){
        $this->nama = $nama;
    }

    use hewan, buah;

}

$hewan = new penjualan();
echo $hewan->setasal("Jogja");
echo $hewan->kucing();
echo "<br>";
echo $hewan->tikus();
echo "<br>";
echo "<br>";

$buah = new penjualan();
echo $buah->setasal("Bandung");
echo $buah->mangga();
echo "<br>";
echo $buah->apel();
echo "<br>";
echo "<br>";

?>