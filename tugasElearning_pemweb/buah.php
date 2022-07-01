<?php
class buah{
    public $jenis = true;
}

class Agregat extends buah{
    public $merah = true;
}

$buah1 = new Agregat();
    $buah2= new buah();

//output
if(property_exists($buah1, "merah")){
    echo " Buah berwarna merah: Rasberry, Stroberi, Murbei, Delima";
}
?>