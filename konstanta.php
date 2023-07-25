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
</head>
<body>
<center><h1><b>TARIF TOL JAGORAWI - CHIJAGO</b></h1></center>


</body>
</html>
<?php 
class kendaraan{
    const jagorawi = 10000;
    public $namatol1 = "Jagorawi", $namatol2 = "Cijago", $golongan1= "Golongan 1", $golongan2 = "Golongan 2", $golongan3 = "Golongan 3", $golongan4 = "Golongan 4", $golongan5 = "Golongan 5", $golongan6 = "Golongan 6";
}
        class golongan1 extends kendaraan{
            const chijago = 15000;
                function sedan(){
                    echo "<b>GOLONGAN 1</b>";
                    echo "<br>";
                    echo "Sedan termasuk ke dalam " . $this->golongan1;
                    echo "<br>";
                    echo " perjalanan dari Tol " .$this->namatol1 ." menuju " .$this->namatol2." Rp. ". parent::jagorawi + self::chijago;
                    echo "<br>";
                    }
                function jip(){
                    echo "Jip termasuk ke dalam " . $this->golongan1;
                    echo "<br>";
                    echo " perjalanan dari Tol " .$this->namatol1 ." menuju " .$this->namatol2." Rp. ". parent::jagorawi + self::chijago;
                    echo "<br>";
                    }
                function pickup(){
                    echo "Pick Up sedan termasuk ke dalam " . $this->golongan1;
                    echo "<br>";
                    echo " perjalanan dari Tol " .$this->namatol1 ." menuju " .$this->namatol2. " Rp. ". parent::jagorawi + self::chijago;
                    echo "<br>";
                    }
                function bus(){
                    echo "Bus termasuk ke dalam " . $this->golongan1;
                    echo "<br>";
                    echo " perjalanan dari Tol " .$this->namatol1 ." menuju " .$this->namatol2.  " Rp. ". parent::jagorawi + self::chijago;
                    }
                }

        class golongan2 extends kendaraan{
            const chijago = 20000;
                function truk2(){
                    echo "<b>GOLONGAN 2</b>";
                    echo "<br>";
                    echo "Truk roda 2 termasuk ke dalam " . $this->golongan2;
                    echo "<br>";
                    echo " perjalanan dari Tol " .$this->namatol1 ." menuju " .$this->namatol2.  " Rp. ". parent::jagorawi + self::chijago;
                    }
                }

        class golongan3 extends kendaraan{
            const chijago = 24000;
                function truk3(){
                    echo "<b>GOLONGAN 3</b>";
                    echo "<br>";
                    echo "Truk roda 3 termasuk ke dalam " . $this->golongan3;
                    echo "<br>";
                    echo " perjalanan dari Tol " .$this->namatol1 ." menuju " .$this->namatol2.  " Rp. ". parent::jagorawi + self::chijago;
                    }
                }

        class golongan4 extends kendaraan{
            const chijago = 50000;
                function truk4(){
                    echo "<b>GOLONGAN 4</b>";
                    echo "<br>";
                    echo "Truk roda 3 termasuk ke dalam " . $this->golongan4;
                    echo "<br>";
                    echo " perjalanan dari Tol " .$this->namatol1 ." menuju " .$this->namatol2.  " Rp. ". parent::jagorawi + self::chijago;
                    }
                }

        class golongan5 extends kendaraan{
            const chijago = 12000;
                function truk5(){
                    echo "<b>GOLONGAN 5</b>";
                    echo "<br>";
                    echo "Truk roda 5 termasuk ke dalam " . $this->golongan5;
                    echo "<br>";
                    echo " perjalanan dari Tol " .$this->namatol1 ." menuju " .$this->namatol2.  " Rp. ". parent::jagorawi + self::chijago;
                    }
                }

        class golongan6 extends kendaraan{
            const chijago = 64000;
                function roda2(){
                    echo "<b>GOLONGAN 6</b>";
                    echo "<br>";
                    echo "Kendaraan  roda 2 termasuk ke dalam " . $this->golongan6;
                    echo "<br>";    
                    echo " perjalanan dari Tol " .$this->namatol1 ." menuju " .$this->namatol2.  " Rp. ". parent::jagorawi + self::chijago;
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
