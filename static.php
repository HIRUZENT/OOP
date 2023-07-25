<?php 
class supermarket{
	public static $nama_toko = "Supermarket keadilan",
		   		  $alamat    = "Jalan kehidupan no.1",
		   		  $jam 		 = "Buka pukul 07:00 - 22:00";
}
class makanan extends supermarket{
	private static $nama, $harga_asli, $harga_diskon, $rasa, $expired;
	const diskon = 10;
	const harga  = 10000;
		public static function cheetos(){
			self::$nama = "Cheetos";
			self::$rasa = "Barbeque";
			self::$expired = "Januari 2023";

			echo self::$nama. "<br>". self::$rasa. "<br>".self::$expired;
			echo "<br>";
			return self::$harga_diskon = self::harga * self::diskon / 100;
			echo self::$harga_asli = self::$harga_asli - self::$harga_diskon;
		}

}
class minuman extends supermarket{

}

echo "Daftar produk makanan dan minuman";
echo "<br>";
echo "<br>";
echo supermarket::$nama_toko. "<br>". supermarket::$alamat. "<br>". supermarket::$jam;
echo "<br>";
echo "<br>";
echo makanan::cheetos();
echo "<br>";
echo "<br>";
 ?>