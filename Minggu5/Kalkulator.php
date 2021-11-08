<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>

    <h4>KALKULATOR</h4>

    <?php
        function penjumlahan($x,$y){
            $total = $x + $y;
            echo "<br>PENJUMLAHAN <br>";
            echo "Operator : + <br>";
            echo "Hasil : $total <br>";
        }
        function pengurangan($x,$y){
            $total = $x - $y;
            echo "<br> PENGURANGAN <br>";
            echo "Operator : - <br>";
            echo "Hasil : $total <br>";
        }
        function perkalian($x,$y){
            $total = $x * $y;
            echo "<br> PERKALIAN <br>";
            echo "Operator : * <br>";
            echo "Hasil : $total <br>";
        }
        function pembagian($x,$y){
            $total = $x / $y;
            echo "<br> PEMBAGIAN <br>";
            echo "Operator : / <br>";
            echo "Hasil : $total <br>";
        }
        function modulus($x,$y){
            $total = $x % $y;
            echo "<br> MODULUS <br>";
            echo "Operator : % <br>";
            echo "Hasil : $total <br>";
        }

        $i=10;
        $j=5;

        echo "Bilangan 1 = $i <br>";
        echo "Bilangan 2 = $j <br>";
        echo "<br> Berikut merupakan hasil dari setiap operasi <br>";
        
        penjumlahan($i,$j);
        pengurangan($i,$j);
        perkalian($i,$j);
        pembagian($i,$j);
        modulus($i,$j);
    ?>
    
</body>
</html>
