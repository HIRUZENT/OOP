<style>
    h5{
        margin-top: 5px;
    }
</style>

<?php
interface tarif{
    public function harga($harga_asli);
    public function diskon();
}
interface golongan{
    public function jenis();
}

abstract class kendaraan{
    const jagorawi = 10000;

    abstract function asal();
    abstract function tujuan();
}
class golongan1 extends kendaraan implements golongan, tarif{
    const cijago = 15000;
    private $potongan_harga = 10;

        public function __construct($golongan = "golongan 1"){
            $this->golongan = $golongan;
        }
        public function __destruct(){
            echo "<b><h5> Potongan harga berlaku hingga tanggal 12 Januari 2024 </h5></b>";
            echo "<br>";
        }
        public function jenis(){
            return "Sedan, PickUp, Jip, Bus";
        }

        public function asal(){
            return " Jagorawi ";
        }

        public function tujuan(){
            return " Cijago ";
        }

        public function harga($harga_asli = ""){
            $this->harga_asli = $harga_asli;
            $this->harga_asli = parent::jagorawi + self::cijago;
            return $this->harga_asli;
        }
        public function diskon($diskon = ""){
            $this->diskon = $diskon;
            $this->diskon = $this->harga_asli * $this->potongan_harga / 100;
            return $this->harga_diskon = "Rp.". $this->harga_asli - $this->diskon;
        }
        public function print(){
            echo "<b>GOLONGAN 1</b>";
            echo "<br>";
            echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
            echo "Dikenakan tarif harga sebesar <b> Rp." . $this->harga(). "</b>";
            echo "<br>";
            echo "Golongan 1 mendapat potongan harga spesial tahun baru 2024 sebesar 10%, menjadi <b>" . $this->diskon(). "</b>";
        }
}
class golongan2 extends kendaraan implements golongan, tarif{
    const cijago = 30000;
    private $potongan_harga = 20;

        public function __construct($golongan = "golongan 2"){
            $this->golongan = $golongan;
        }
        public function __destruct(){
            echo "<b><h5> Potongan harga berlaku hingga tanggal 12 Januari 2024 </h5></b>";
            echo "<br>";
        }
        public function jenis(){
            return "Truk gandar 2";
        }

        public function asal(){
            return " Jagorawi ";
        }

        public function tujuan(){
            return " Cijago ";
        }

        public function harga($harga_asli = ""){
            $this->harga_asli = $harga_asli;
            $this->harga_asli = parent::jagorawi + self::cijago;
            return $this->harga_asli;
        }
        public function diskon($diskon = ""){
            $this->diskon = $diskon;
            $this->diskon = $this->harga_asli * $this->potongan_harga / 100;
            return $this->harga_diskon = "Rp.". $this->harga_asli - $this->diskon;
        }
        public function print(){
            echo "<b>GOLONGAN 2</b>";
            echo "<br>";
            echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
            echo "Dikenakan tarif harga sebesar <b> Rp." . $this->harga(). "</b>";
            echo "<br>";
            echo "Golongan 2 mendapat potongan harga spesial tahun baru 2024 sebesar 20%, menjadi <b>" . $this->diskon(). "</b>";
        }
}
class golongan3 extends kendaraan implements golongan, tarif{
    const cijago = 25000;
    private $potongan_harga = 30;

        public function __construct($golongan = "golongan 3"){
            $this->golongan = $golongan;
        }
        public function __destruct(){
            echo "<b><h5> Potongan harga berlaku hingga tanggal 12 Januari 2024 </h5></b>";
            echo "<br>";
        }
        public function jenis(){
            return "Truk gandar 3";
        }

        public function asal(){
            return " Jagorawi ";
        }

        public function tujuan(){
            return " Cijago ";
        }

        public function harga($harga_asli = ""){
            $this->harga_asli = $harga_asli;
            $this->harga_asli = parent::jagorawi + self::cijago;
            return $this->harga_asli;
        }
        public function diskon($diskon = ""){
            $this->diskon = $diskon;
            $this->diskon = $this->harga_asli * $this->potongan_harga / 100;
            return $this->harga_diskon = "Rp.". $this->harga_asli - $this->diskon;
        }
        public function print(){
            echo "<b>GOLONGAN 3</b>";
            echo "<br>";
            echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
            echo "Dikenakan tarif harga sebesar <b> Rp." . $this->harga(). "</b>";
            echo "<br>";
            echo "Golongan 3 mendapat potongan harga spesial tahun baru 2024 sebesar 30%, menjadi <b>" . $this->diskon(). "</b>";
        }
}
class golongan4 extends kendaraan implements golongan, tarif{
    const cijago = 42000;
    private $potongan_harga = 40;

        public function __construct($golongan = "golongan 4"){
            $this->golongan = $golongan;
        }
        public function __destruct(){
            echo "<b><h5> Potongan harga berlaku hingga tanggal 12 Januari 2024 </h5></b>";
            echo "<br>";
        }
        public function jenis(){
            return "Truk gandar 4";
        }

        public function asal(){
            return " Jagorawi ";
        }

        public function tujuan(){
            return " Cijago ";
        }

        public function harga($harga_asli = ""){
            $this->harga_asli = $harga_asli;
            $this->harga_asli = parent::jagorawi + self::cijago;
            return $this->harga_asli;
        }
        public function diskon($diskon = ""){
            $this->diskon = $diskon;
            $this->diskon = $this->harga_asli * $this->potongan_harga / 100;
            return $this->harga_diskon = "Rp.". $this->harga_asli - $this->diskon;
        }
        public function print(){
            echo "<b>GOLONGAN 4</b>";
            echo "<br>";
            echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
            echo "Dikenakan tarif harga sebesar <b> Rp." . $this->harga(). "</b>";
            echo "<br>";
            echo "Golongan 4 mendapat potongan harga spesial tahun baru 2024 sebesar 40%, menjadi <b>" . $this->diskon(). "</b>";
        }
}
class golongan5 extends kendaraan implements golongan, tarif{
    const cijago = 52000;
    private $potongan_harga = 50;

        public function __construct($golongan = "golongan 5"){
            $this->golongan = $golongan;
        }
        public function __destruct(){
            echo "<b><h5> Potongan harga berlaku hingga tanggal 12 Januari 2024 </h5></b>";
            echo "<br>";
        }
        public function jenis(){
            return "Truk gandar 5";
        }

        public function asal(){
            return " Jagorawi ";
        }

        public function tujuan(){
            return " Cijago ";
        }

        public function harga($harga_asli = ""){
            $this->harga_asli = $harga_asli;
            $this->harga_asli = parent::jagorawi + self::cijago;
            return $this->harga_asli;
        }

        public function diskon($diskon = ""){
            $this->diskon = $diskon;
            $this->diskon = $this->harga_asli * $this->potongan_harga / 100;
            return $this->harga_diskon = "Rp.". $this->harga_asli - $this->diskon;
        }
        
        public function print(){
            echo "<b>GOLONGAN 5</b>";
            echo "<br>";
            echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
            echo "Dikenakan tarif harga sebesar <b> Rp." . $this->harga(). "</b>";
            echo "<br>";
            echo "Golongan 5 mendapat potongan harga spesial tahun baru 2024 sebesar 50%, menjadi <b>" . $this->diskon(). "</b>";
        }
}


$cetak = new golongan1();
echo "<b><h2>GOLONGAN 1</b></h2>";
echo $cetak->print();

$cetak = new golongan2();
echo "<b><h2>GOLONGAN 2</b></h2>";
echo $cetak->print();

$cetak = new golongan3();
echo "<b><h2>GOLONGAN 3</b></h2>";
echo $cetak->print();

$cetak = new golongan4();
echo "<b><h2>GOLONGAN 4</b></h2>";
echo $cetak->print();

$cetak = new golongan5();
echo "<b><h2>GOLONGAN 5</b></h2>";
echo $cetak->print();

 ?>