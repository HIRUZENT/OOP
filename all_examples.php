<?php 

//INI CODINGAN UNTUK CONSTRUCT DAN DESTRUCT ANJAY
class komp{
   public function __construct(){
      return $this->tes = "construct ";
   }
   public function cetak(){
      echo "cetak pertama $this->tes";
   }
   public function __destruct(){
      echo "destruct ";
   }
      public function cetak2(){
      echo "cetak kedua $this->tes";
   }
      public function cetak3(){
      echo "cetak ketiga $this->tes";
   }
}
$hasil = new komp();
$hasil->cetak();
echo "<br>";
$hasil->cetak2();
echo "<br>";
$hasil->cetak3();
echo "<br>";
echo "<br>";




//INI ADALAH CODINGAN UNTUK... GATAU DEH LIAT AJA (Public sih kayaknya)
class kelas{
   public $buku, $spidol, $ptulis, $meja, $kursi, $jendela;
      function data1(){
         $bukuu   = $this->buku;
         $spidoll = $this->spidol;
         $ptuliss = $this->ptulis;
         return "$bukuu, $spidoll dan $ptuliss";
      }
      function data2(){
         $mejaa    = $this->meja;
         $kursii   = $this->kursi;
         $jendelaa = $this->jendela;

         return "$mejaa, $kursii dan $jendelaa";
      }
      function bersih(){
         echo "Barang yang sudah dibersihkan yaitu : ";
      }
      function kotor(){
         echo "Barang yang belum dibersihkan yaitu : ";
      }
}

echo "<b>Ini kayaknya hasil dari Public : </b><br>";
$hasil1 = new kelas();
$hasil1->buku="Buku";
$hasil1->spidol="Spidol";
$hasil1->ptulis="Papan tulis";
echo $hasil1->bersih();
echo $hasil1->data1();

echo "<br>";

$hasil2 = new kelas();
$hasil2->meja="Meja";
$hasil2->kursi="Kursi";
$hasil2->jendela="jendela";
echo $hasil2->kotor();
echo $hasil2->data2();
echo "<br>";echo "<br>";
 ?>





<?php 
//INI ADALAH CODINGAN UNTUK PROTECTED
class supermarket{
   protected $harga;
   public $barang;
      protected function data(){
         return $this->harga = "Bismillah";
      }
      function cetak(){
         echo "<b>Protected : </b>";
         echo $this->data();
      }
}
$hasil = new supermarket();
$hasil->cetak();
echo "<br>";echo "<br>";
 ?>





<?php 
//INI CODINGAN UNTUK CONSTRUCT
class kendaraan{
   public $mobil, $warna, $motor;
      function __construct($mobil = "mobil", $warna = "warna"){
         $this->mobil = $mobil;
         $this->warna = $warna;
      }
      function data(){
         echo "<b> Construct : </b>";
         return "{$this->mobil}, {$this->warna}";
      }
      function cetak(){
         return $this->data();
      }
}
$hasil = new kendaraan("Ini adalah mobil Toyota", "Mobil ini berwarna pink");
echo $hasil->cetak();
echo "<br>";echo "<br>";
 ?>





<?php 
//INI CODINGAN UNTUK PRIVATE DAN EXTENDS
class komputer{
   protected $vga = "Nompal padilah";
      function isi(){
         echo "<b> Private : </b>";
         return $this->vga;
      }
      function print(){
         echo $this->isi();
      }
}
class laptop extends komputer{
      function printhasil(){
         echo $this->isi();
      }
}
$hasil = new laptop();
echo $hasil->printhasil();
 ?>