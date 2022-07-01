<?php
class Baju{
    public $merk;
    public $bahan;

    public function __construct($paraMerk, $paraBahan){
        $this->merk = $paraMerk;
        $this->bahan = $paraBahan;    
    }
}
class gamis extends Baju{
    public $warna;
    public $stock;

    public function __construct( $paraMerk, $paraBahan, $paraWarna, $paraStock){

        parent:: __construct ($paraMerk, $paraBahan);
        $this->warna = $paraWarna;
        $this->stock= $paraStock;    
    }
    public function __destruct(){
        echo "cek destruct";
    }
    public function details (){
        return "Merk : $this->merk, bahan: $this->bahan, warna: $this->warna, stock: $this->stock";
    }
}
$gamis = new gamis ("Zazkia Mecca", "katun", "Frappucino", "60");
echo $gamis->details();
    ?>

       