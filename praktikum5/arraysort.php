<?php
function aray_sort(){
    echo "<h2> SORT ARRAY</h2>";

    $arr = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "tomas", "jojo", "anton");
    sort($arr);
    
    foreach ($arr as $data){
        echo "$data<br>";
    }
}

aray_sort();
?>