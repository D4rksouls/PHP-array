<?php

$arra = array(1,2,3,2,4,5,6,2);

for($i = 0 ; $i < count($arra) ; $i++){
    if($arra[$i] === 2){
        $arra[$i] = $arra[$i] + 2;
        }
        var_dump($arra[$i]);
}

?>