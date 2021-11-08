<?php
function prima(){
    echo " <h2>BILANGAN PRIMA</h2>";
    for($i = 2; $i <=50; $i++){
        for($j = 2; $j<$i ;$j++){

            if($i % $j == 0){
                break;

            }
            else if ($i-1 == $j){
                echo "$i ";
                break;
            }
        }
    }
}

prima();
?>