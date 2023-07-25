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
</style>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KONSTANTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<center><h1><b>TARIF TOL JAGORAWI - CHIJAGO</b></h1></center>
<p><center><b>BIAYA MASUK TOL JAGORAWI : Rp.10.000,-</b></center></p>
<p style="margin-top: -10px;"><center> (semua golongan)</center></p>

</body>
</html>
<?php 
abstract class kendaraan{
    const jagorawi = 10000;
    abstract function jenis($golongan);
    abstract function tarif($harga);
}
        class golongan1 extends kendaraan{
            const chijago = 15000;
                    public function jenis($golongan){
                        echo "Daftar jenis kendaraan $golongan : <b> Sedan, Jip, Pickup, Bus </b>";
                    }
                        public function tarif($harga){
                        $this->harga = $harga;
                        $harga = parent::jagorawi + self::chijago;
                        echo "<b> Tarif : Rp. $harga,- </b>";
                }          
}
        class golongan2 extends kendaraan{
            const chijago = 20000;
                    public function jenis($golongan){
                        echo "Daftar jenis kendaraan golongan 2 : <b> Truk gandar 2 </b>";
                    }
                        public function tarif($harga){
                        $this->harga = $harga;
                        $harga = parent::jagorawi + self::chijago;
                        echo "<b> Tarif : Rp. $harga,- </b>";
                }          
}
        class golongan3 extends kendaraan{
            const chijago = 24000;
                    public function jenis($golongan){
                        echo "Daftar jenis kendaraan golongan 3 : <b> Truk gandar 3 </b>";
                    }
                        public function tarif($harga){
                        $this->harga = $harga;
                        $harga = parent::jagorawi + self::chijago;
                        echo "<b> Tarif : Rp. $harga,- </b>";
                }  
}
        class golongan4 extends kendaraan{
            const chijago = 50000;
                    public function jenis($golongan){ 
                        echo "Daftar jenis kendaraan golongan 4 : <b> Truk gandar 4 </b>";
                    }
                        public function tarif($harga){
                        $this->harga = $harga;
                        $harga = parent::jagorawi + self::chijago;
                        echo "<b> Tarif : Rp. $harga,- </b>";
                }
}
        class golongan5 extends kendaraan{
            const chijago = 12000;
                    public function jenis($golongan){
                        echo "Daftar jenis kendaraan golongan 5 : <b> Truk gandar 5 </b>";
                    }
                        public function tarif($harga){
                        $this->harga = $harga;
                        $harga = parent::jagorawi + self::chijago;
                        echo "<b> Tarif : Rp. $harga,- </b>";
                }
}
        class golongan6 extends kendaraan{
            const chijago = 64000;
                    public function jenis($golongan){
                        echo "Daftar jenis kendaraan golongan 6 : <b> Kendaraan roda 2 </b>";
                    }
                        public function tarif($harga){
                        $this->harga = $harga;
                        $harga = parent::jagorawi + self::chijago;
                        echo "<b> Tarif : Rp. $harga,- </b>";
                }
}
$hasil = new golongan1();
echo "<b><h3>GOLONGAN 1</h3></b>";
echo $hasil->jenis("Golongan 1");
echo "<br>";
echo $hasil->tarif("");

$hasil = new golongan2();
echo "<b><h3>GOLONGAN 2</h3></b>";
echo $hasil->jenis("Golongan 2");
echo "<br>";
echo $hasil->tarif("");

$hasil = new golongan3();
echo "<b><h3>GOLONGAN 3</h3></b>";
echo $hasil->jenis("Golongan 3");
echo "<br>";
echo $hasil->tarif("");

$hasil = new golongan4();
echo "<b><h3>GOLONGAN 4</h3></b>";
echo $hasil->jenis("Golongan 4");
echo "<br>";
echo $hasil->tarif("");

$hasil = new golongan5();
echo "<b><h3>GOLONGAN 5</h3></b>";
echo $hasil->jenis("Golongan 5");
echo "<br>";
echo $hasil->tarif("");

$hasil = new golongan6();
echo "<b><h3>GOLONGAN 6</h3></b>";
echo $hasil->jenis("Golongan 6");
echo "<br>";
echo $hasil->tarif("");
 ?>
