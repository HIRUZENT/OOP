<?php 
class kendaraan{
	public $golongan1= "Golongan 1", $golongan2 = "Golongan 2", $golongan3 = "Golongan 3", $golongan4 = "Golongan 4", $golongan5 = "Golongan 5", $golongan6 = "Golongan 6";
}
		class golongan1 extends kendaraan{
				function sedan(){
					echo "Mobil sedan termasuk ke dalam ";
					return $this->golongan1;
					}
				function jip(){
					echo "Mobil jip termasuk ke dalam ";
					return $this->golongan1;
					}
				function pickup(){
					echo "Mobil pickup termasuk ke dalam ";
					return $this->golongan1;
					}
				function bus(){
					echo "Mobil bus termasuk ke dalam ";
					return $this->golongan1;
					}
				}

		class golongan2 extends kendaraan{
				function truk2(){
					echo "Truk dengan dua gandar termasuk ke dalam ";
					return $this->golongan2;
					}
				}

		class golongan3 extends kendaraan{
				function truk3(){
					echo "Truk dengan tiga gandar termasuk ke dalam ";
					return $this->golongan3;
					}
				}

		class golongan4 extends kendaraan{
				function truk4(){
					echo "Truk dengan empat gandar termasuk ke dalam ";
					return $this->golongan4;
					}
				}

		class golongan5 extends kendaraan{
				function truk5(){
					echo "Truk dengan lima gandar termasuk ke dalam ";
					return $this->golongan5;
					}
				}

		class golongan6 extends kendaraan{
				function roda2(){
					echo "Kendaraan roda dua termasuk ke dalam ";
					return $this->golongan6;
					}
				}

$hasil = new golongan1();
echo $hasil->sedan();
echo "<br>";
echo $hasil->jip();
echo "<br>";
echo $hasil->pickup();
echo "<br>";
echo $hasil->bus();


echo "<br>";
echo "<br>";
$hasil = new golongan2();
echo $hasil->truk2();


echo "<br>";
echo "<br>";
$hasil = new golongan3();
echo $hasil->truk3();

echo "<br>";
echo "<br>";
$hasil = new golongan4();
echo $hasil->truk4();

echo "<br>";
echo "<br>";
$hasil = new golongan5();
echo $hasil->truk5();

echo "<br>";
echo "<br>";
$hasil = new golongan6();
echo $hasil->roda2();
 ?>