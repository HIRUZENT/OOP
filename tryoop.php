<?php 
class kendaraan{
	public $merk,$tipe;

	public function data(){
		return "Nama : Lamborghini ";	
	}
	public function data2(){
		return "Tipe : Huracan";
	}
}
echo "DATA MOBIL : ";
echo "<br>";
$data1 = new kendaraan();
$data1->merk = "Lamborghini";
echo $data1->data();
echo "<br>";
echo $data1->data2();
 ?>