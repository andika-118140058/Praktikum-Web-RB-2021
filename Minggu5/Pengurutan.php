<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengurutan</title>
</head>
<body>

    <h4>PENGURUTAN</h4>

    <?php 
        function susun(&$lNama){
            sort($lNama);
        }

        $lNama = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
        echo "Sebelum Di Sort : <br> <br>";
        $i = 0;
        foreach($lNama as $nama){
            if($i < count($lNama)-1){
                echo $nama." | ";
            }else{
                echo $nama;
            }
            $i++;
        }

        echo "<br><br><br>";

        echo "Sesudah Di Sort : <br> <br>";
        susun($lNama);

        $i = 0;
        foreach($lNama as $nama){
            if($i < count($lNama)-1){
                echo $nama." | ";
            }else{
                echo $nama;
            }
            $i++;
        }
    ?>
    
</body>
</html>
