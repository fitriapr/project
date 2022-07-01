<?php
class binatang{
    public $reptil = true;
}

class Bersisik extends binatang{
    public $karnivora = true;
}

$binatang1 = new Bersisik();
    $binatang2= new binatang();

//output
if(property_exists($binatang1, "karnivora")){
    echo "Komodo, kadal, buaya, bunglon";
}
?>