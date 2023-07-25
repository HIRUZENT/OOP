<!-- Naufal Fadhilah F -->
<!--      XI PPLG 1    -->
<!--         28        -->

<style>
    h1{
        background-color: yellow;
        padding: 20px;
        margin: -8px;
        color: black;
        margin-bottom: 10px;
    }
    h5{
        margin-top: -10px;
    }
    h4{
        font-size: 13px;
    }
</style>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KONSTANTA</title>
</head>
<body>
<center><h1><b>TARIF TOL JAGORAWI - CHIJAGO</b></h1></center>
<p><center><b>BIAYA MASUK TOL JAGORAWI : Rp.10.000,-</b></center></p>
<p style="margin-top: -10px;"><center> (semua golongan)</center></p>

</body>
</html>

<?php
interface golongan{
    public function jenis();
    public function tarif();
}

abstract class kendaraan{
    const jagorawi = 10000;
    protected $harga;
    abstract function asal();
    abstract function tujuan();
}

class golongan1 extends kendaraan implements golongan{
    const cijago = 15000;

    public function __destruct(){
        echo "<b><h5> Tarif golongan 1 berlaku hingga tanggal 12 Januari 2023 </h5></b>";
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

    public function tarif($harga = ""){
        $this->harga = $harga;
        $harga = parent::jagorawi + self::cijago;
        return $harga;
    }

    public function print(){
        echo "<b>GOLONGAN 1</b>";
        echo "<br>";
        echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
        echo "Dikenakan tarif harga sebesar Rp." . $this->tarif();
    }
}

class golongan2 extends kendaraan implements golongan{
    const cijago = 20000;
    public function __destruct(){
        echo "<b><h5> Tarif golongan 1 berlaku hingga tanggal 12 Januari 2023 </h5></b>";
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

    public function tarif($harga = ""){
        $this->harga = $harga;
        $harga = parent::jagorawi + self::cijago;
        return $harga;
    }

    public function print(){
        echo "<b>GOLONGAN 2</b>";
        echo "<br>";
        echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
        echo "Dikenakan tarif harga sebesar Rp." . $this->tarif();
    }
}

class golongan3 extends kendaraan implements golongan{
    const cijago = 25000;

    public function __destruct(){
        echo "<b><h5> Tarif golongan 1 berlaku hingga tanggal 12 Januari 2023 </h5></b>";
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

    public function tarif($harga = ""){
        $this->harga = $harga;
        $harga = parent::jagorawi + self::cijago;
        return $harga;
    }

    public function print(){
        echo "<b>GOLONGAN 3</b>";
        echo "<br>";
        echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
        echo "Dikenakan tarif harga sebesar Rp." . $this->tarif();
    }
}
class golongan4 extends kendaraan implements golongan{
    const cijago = 30000;

    public function __destruct(){
        echo "<b><h5> Tarif golongan 1 berlaku hingga tanggal 12 Januari 2023 </h5></b>";
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

    public function tarif($harga = ""){
        $this->harga = $harga;
        $harga = parent::jagorawi + self::cijago;
        return $harga;
    }

    public function print(){
        echo "<b>GOLONGAN 4</b>";
        echo "<br>";
        echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
        echo "Dikenakan tarif harga sebesar Rp." . $this->tarif();
    }
}
class golongan5 extends kendaraan implements golongan{
    const cijago = 35000;

    public function __destruct(){
        echo "<b><h5> Tarif golongan 1 berlaku hingga tanggal 12 Januari 2023 </h5></b>";
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

    public function tarif($harga = ""){
        $this->harga = $harga;
        $harga = parent::jagorawi + self::cijago;
        return $harga;
    }

    public function print(){
        echo "<b>GOLONGAN 5</b>";
        echo "<br>";
        echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
        echo "Dikenakan tarif harga sebesar Rp." . $this->tarif();
    }



}
class golongan6 extends kendaraan implements golongan{
    const cijago = 40000;

    public function __destruct(){
        echo "<b><h4> Tarif golongan 1 berlaku hingga tanggal 12 Januari 2023 </h4></b>";
        echo "<br>";
    }
    public function jenis(){
            return "kendaraan roda 2";
    }

    public function asal(){
        return " Jagorawi ";
    }

    public function tujuan(){
        return " Cijago ";
    }

    public function tarif($harga = ""){
        $this->harga = $harga;
        $harga = parent::jagorawi + self::cijago;
        return $harga;
    }

    public function print(){
        echo "<b>GOLONGAN 6</b>";
        echo "<br>";
        echo "Jenis kendaraan : <b>" .  $this->jenis() . "</b> <br> perjalanan dari tol " . $this->asal() . "menuju" . $this->tujuan();
        echo "Dikenakan tarif harga sebesar Rp." . $this->tarif();
    }
}

$golongan1 = new golongan1("");
$golongan1->print();

echo "<br>";
echo "<br>";

$golongan1 = new golongan2();
$golongan1->print();

echo "<br>";
echo "<br>";

$golongan1 = new golongan3();
$golongan1->print();

echo "<br>";
echo "<br>";

$golongan1 = new golongan4();
$golongan1->print();

echo "<br>";
echo "<br>";

$golongan1 = new golongan5();
$golongan1->print();

echo "<br>";
echo "<br>";

$golongan1 = new golongan6();
$golongan1->print();

 ?>
