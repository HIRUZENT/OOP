<?php 
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
 ?>