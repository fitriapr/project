<?php

$var1 = true;
$var2 = false;

    $and = $var1 && $var2;  
    echo "true dan false </br></br>";
    $AND = var_dump($and);
    echo "hasil logica AND" . $AND . "</br>";

    $or = $var1 || $var2;
    $OR = var_dump($or);
    echo "hasil logica OR" . $OR . "</br>";

    $not = !$var1;
    $NOT = var_dump($not);
    echo "hasil logica NOT" . $NOT . "</br>";

?>